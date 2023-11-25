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

Class VideoController extends Controller {


    // Home Page
    public function index(Request $request) {
        $categories = Category::all();
        return view('backend.video_upload',compact('categories'));
    }

    // Upload Videos
    public function videoUpload(Request $request)
    {
       
        try{
            $video = new Video();

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
                    'Body' => fopen(storage_path('app/public/videos/' . $fileName), 'rb'),
                    'ACL' => 'public-read',
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
            $video->time_for_live = $request->time_for_live;
            $video->add_tags = $request->add_tags;
            $video->trending_topic = $request->trending_topic;
            $video->video_description = $request->video_description;
            $video->save();
            if($video->id){
                return response()->json(array('status'=> 'success','msg'=>'Video uploaded successfully','url'=>route('video.upload'))); 
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
}
