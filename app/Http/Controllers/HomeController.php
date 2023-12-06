<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Resources\VideoResource;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Video;
use App\Models\Cms;

Class HomeController extends Controller {


    // Home Page
    public function index(Request $request) {
        $categories = Category::all();
        $videoList = Video::with('category')->orderBy('video_id','DESC')->get();
        return view('frontend.home',compact('categories','videoList'));
    }
    // About Us
    public function AboutUs(Request $request) {
        $categories = Category::all();
        $videoList = Video::with('category')->orderBy('video_id','DESC')->get();
        $cms = Cms::where('id',1)->first();
        return view('frontend.about_us',compact('categories','videoList','cms'));
    }
    public function ContactUs(Request $request) {
        $categories = Category::all();
        $videoList = Video::with('category')->orderBy('video_id','DESC')->get();
        $cms = Cms::where('id',1)->first();
        return view('frontend.contact',compact('categories','videoList','cms'));
    }
    public function termsCondition(Request $request) {
        $categories = Category::all();
        $videoList = Video::with('category')->orderBy('video_id','DESC')->get();
        $cms = Cms::find(1);
        return view('frontend.terms_condition',compact('categories','videoList','cms'));
    }
    public function privacyPolicy(Request $request) {
        $categories = Category::all();
        $videoList = Video::with('category')->orderBy('video_id','DESC')->get();
        $cms = Cms::find(1);
        return view('frontend.privacy_policy',compact('categories','videoList','cms'));
    }


    public function videosList(Request $request, $category_id = '', $category_slug='') {
        $categories = Category::all();
        $videoList = Video::with('category')->where('category_id',$category_id)->orderBy('video_id','DESC')->get();
        $videoList = VideoResource::collection($videoList);

        $cms = Cms::find(1);
        return view('frontend.videoList',compact('categories','videoList','cms'));
    }
    public function singleVideo(Request $request, $video_id = '', $video_slug='') {
        $categories = Category::all();
        $singleVideo = Video::with('category')->where('video_id', $video_id)->first();
        if (!$singleVideo) {
            abort(404);
        }
        $cms = Cms::find(1);
        $relatedVideos = Video::with('category')->where('category_id', $singleVideo->category_id)
            ->get();
        $relatedVideos = VideoResource::collection($relatedVideos);
        return view('frontend.singleVideo',compact('categories','singleVideo','cms','relatedVideos'));
    }
}
