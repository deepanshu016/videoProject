<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\VideoUploadRequest;
use Illuminate\Http\Request;
use Aws\S3\S3Client;

use App\Models\Admin;
use App\Models\Category;

Class VideoController extends Controller {


    // Home Page
    public function index(Request $request) {
        $categories = Category::all();
        return view('backend.video_upload',compact('categories'));
    }

    // Upload Videos
    public function videoUpload(VideoUploadRequest $request)
    {

       $file = $request->file('video');
        if (!$file) {
            return redirect()->back()->withErrors(['video' => 'Please select a video to upload.']);
        }

        $fileName = $file->getClientOriginalName();
        $file->move(storage_path('app/public/videos'), $fileName);

        $client = new S3Client([
            'region' => 'us-east-1',
            'credentials' => [
                'key' => 'AKIA4O7PPMTIIP5PZ3J6',
                'secret' => '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',
            ]
        ]);

        $bucketName = 'video-uploader-event';
        $client->putObject([
            'Bucket' => $bucketName,
            'Key' => $fileName,
            'Body' => fopen(storage_path('app/public/videos/' . $fileName), 'rb'),
            'ACL' => 'public-read',
        ]);

        $url = $client->getObjectUrl($bucketName, $fileName);

        return response()->json(array('success'=> $url));

    }
}
