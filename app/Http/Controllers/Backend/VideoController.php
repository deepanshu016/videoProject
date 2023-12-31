<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\VideoUploadRequest;
use Illuminate\Http\Request;
use Aws\S3\S3Client;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Video;
use DataTables;

Class VideoController extends Controller {


    // Home Page
    public function index(Request $request) {
        $categories = Category::all();
        return view('backend.video_upload',compact('categories'));
    }

    public function list(Request $request)
    {
       return view('backend.videos.list');
    }
    // Upload Videos
    public function videoUpload(VideoUploadRequest $request)
    {

        try{
            if($request->video_id){
                $video = Video::where('video_id',$request->video_id)->first();
            }else{
                $video = new Video();
            }

            if($request->video_type == 1){

                // $imageName = time().'.'.$request->video->extension();
                // $path = Storage::disk('s3')->put('videos', $request->video);
                // $path = Storage::disk('s3')->url($path);
                $file = $request->file('video');
                $fileName = $file->getClientOriginalName();
                $file->move(storage_path('app/public/videos'), $fileName);
                $client = new S3Client([
                    'region' => 'us-east-1',
                    'credentials' => [
                        'key' => config('filesystems.disks.s3.key'),
                        'secret' => config('filesystems.disks.s3.secret'),
                    ]
                ]);
                $bucketName = config('filesystems.disks.s3.bucket');
                $client->putObject([
                    'Bucket' => $bucketName,
                    'Key' => $fileName,
                    'Body' => fopen(storage_path('app/public/videos/' . $fileName), 'rb')
                ]);
                $url = $client->getObjectUrl($bucketName, $fileName);
                $video->upload_video = $url;
            }
            if($request->video_type ==='2'){
                $video->video_embeded_code = $request->video_url;
            }
            if($request->hasFile('video_image')){
                $path = $request->file('video_image')->store('uploads', 'public');
                $video->video_futured_image = $path;
            }
            $video->category_id = $request->category;
            $video->video_type = $request->video_type;
            $video->video_title = $request->video_title;
            $video->slug = $this->slug($request->video_title);
            $video->price = $request->price;
            $video->time_for_live = $request->time_for_live;
            $video->add_tags = ($request->video_tags) ? $request->video_tags : '';
            $video->trending_topic = $request->trending_topics;
            $video->video_description = $request->video_description;

            $video->save();
            if($video->id){
                return response()->json(array('status'=> 'success','msg'=>'Video uploaded successfully','url'=>url('admin/video-list')));
            }
            return response()->json(array('status'=> 'error','msg'=>'Something went wrong','url'=>''));

        }catch(Exception $e){
            \Log::debug($e->getMessage());
            return response()->json(array('status'=> 'error','msg'=>$e->getMessage(),'url'=>''));
        }

    }


    public function upload(Request $request)
    {
        $file = $request->file('video');

        $s3 = new S3Client([
            'version' => 'latest',
            'region' => config('filesystems.disks.s3.region'),
            'credentials' => [
                'key' => config('filesystems.disks.s3.key'),
                'secret' => config('filesystems.disks.s3.secret'),
            ],
        ]);

        $fileName = uniqid() . '_' . $file->getClientOriginalName();
        $bucket = config('filesystems.disks.s3.bucket');

        try {
            // Initiate a multipart upload
            $result = $s3->createMultipartUpload([
                'Bucket' => $bucket,
                'Key' => $fileName,
            ]);

            $uploadId = $result['UploadId'];
            $fileSize = $file->getSize();
            $partSize = 5 * 1024 * 1024; // 5 MB (adjust as needed)

            $parts = [];

            for ($offset = 0; $offset < $fileSize; $offset += $partSize) {
                $partNumber = count($parts) + 1;

                $result = $s3->uploadPart([
                    'Bucket' => $bucket,
                    'Key' => $fileName,
                    'UploadId' => $uploadId,
                    'PartNumber' => $partNumber,
                    'Body' => fopen($file->path(), 'rb'),
                    'ContentLength' => min($partSize, $fileSize - $offset),
                    'Offset' => $offset,
                ]);

                $parts[] = [
                    'PartNumber' => $partNumber,
                    'ETag' => $result['ETag'],
                ];
            }

            // Complete the multipart upload
            $s3->completeMultipartUpload([
                'Bucket' => $bucket,
                'Key' => $fileName,
                'UploadId' => $uploadId,
                'MultipartUpload' => ['Parts' => $parts],
            ]);

            return response()->json(['success' => true], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function videoList(Request $request)
    {
       try{

            if ($request->ajax()) {
                $videoList = Video::with('category')->get();
                return Datatables::of($videoList)
                        ->addIndexColumn()
                        ->editColumn('category', function($row){
                            return $row->category->category_name;
                        })
                        ->editColumn('video_type', function($row){
                               if($row->video_type == '1'){
                                    $video_type = '<span class="badge badge-soft-success">S3 Bucket</span>';
                               }else{
                                    $video_type = '<span class="badge badge-soft-danger">Video URL</span>';
                               }
                               return $video_type;
                        })
                        ->editColumn('live_video', function($row){
                               if($row->time_for_live){
                                    $live_video = '<span class="badge badge-soft-danger">No</span>';
                               }else{
                                    $live_video = '<span class="badge badge-soft-success">Yes</span>';
                               }
                               return $live_video;
                        })
                        ->editColumn('featured_image', function($row){
                               if($row->video_futured_image){
                                    $video_futured_image = '<img src="'.$row->video_futured_image.'" alt="Featured Image" width="50px" height="50px">';
                               }else{
                                    $video_futured_image = '';
                               }
                               return $video_futured_image;
                        })
                        ->addColumn('action', function($row){
                            $btn = '';
                            $btn .= '<a href="'.route('video.edit',['video_id'=>$row->video_id,'video_slug'=>$row->slug]).'" class="edit btn btn-primary btn-sm">Edit</a>';
                            $btn .= '<a href="javascript:void(0)" class="delete-data btn btn-danger btn-sm" data-id="'.$row->video_id.'" url="'.route('delete.video').'">Delete</a>';
                            return $btn;
                        })
                        ->rawColumns(['action','category','video_type','live_video','featured_image'])
                        ->make();
            }
            // return response()->json(array('status'=> 'success','msg'=>'Video uploaded successfully','data'=>$videoList));
        }catch(Exception $e){
            \Log::debug($e->getMessage());
            return response()->json(array('status'=> 'error','msg'=>$e->getMessage(),'url'=>''));
        }
    }

    public function slug($string, $spaceRepl = "-"){
        $string = str_replace("&", "and", $string);

        $string = preg_replace("/[^a-zA-Z0-9 _-]/", "", $string);

        $string = strtolower($string);

        $string = preg_replace("/[ ]+/", " ", $string);

        $string = str_replace(" ", $spaceRepl, $string);

        return $string.'-'.sha1($string);
    }


    public function editVideo(Request $request, $video_id, $video_slug = '') {
        $categories = Category::all();
        $singleVideo = Video::where('video_id', $video_id)->first();
        if (!$singleVideo) {
            abort(404);
        }
        return view('backend.video_upload',compact('singleVideo','categories'));
    }


    public function deleteVideo(Request $request){
        try{
            $id = $request->id;
            if ($request->ajax()) {
                $result = Video::where('video_id',$id)->delete();
                if($result > 0){
                    return response()->json(array('status' => 'success','message' => 'Video deleted successfully','url'=>url('admin/video-list')));
                }else{
                    return response()->json(array('status' => 'errors','message' => 'Something went wrong !!!','url'=>''));
                }
                return response()->json($response);
            }else{
               return redirect(url('admin'))->with('error','Access  not allowed');
            }
        }catch(Exception $e){
            \Log::debug($e->getMessage());
            return response()->json(array('status'=> 'error','msg'=>$e->getMessage(),'url'=>''));
        }
    }
}
