<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
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
        $cms = Cms::where('id',1)->first();
        return view('frontend.terms_condition',compact('categories','videoList','cms'));
    }
    public function privacyPolicy(Request $request) {
        $categories = Category::all();
        $videoList = Video::with('category')->orderBy('video_id','DESC')->get();
        $cms = Cms::where('id',1)->first();
        return view('frontend.privacy_policy',compact('categories','videoList','cms'));
    }
}
