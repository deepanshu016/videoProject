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
    public function videoUpload(VideoUploadRequest $request)
    {
        try{
            $video = new Video();
            if($request->video_type ==='1'){
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
}
