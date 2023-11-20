<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\Admin;

Class VideoController extends Controller {


    // Home Page
    public function index(Request $request) {
        return view('backend.video_upload');
    }

    // Upload Videos
    public function videoUpload(Request $request)
    {
        if ($request->hasFile('certificate_video')) {
            $file = $request->file('certificate_video');
            $path = $file->store('certificate_video', 's3'); // 'videos' is the folder name in the S3 bucket

            // Optionally, you can retrieve the uploaded file URL
            $url = Storage::disk('s3')->url($path);

            // Process further actions or return a response
            return response()->json(['url' => $url]);
        }

        // Handle cases where the file isn't present
        return response()->json(['error' => 'No file found.']);
    }
}
