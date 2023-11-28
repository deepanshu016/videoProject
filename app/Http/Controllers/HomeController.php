<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Video;

Class HomeController extends Controller {


    // Home Page
    public function index(Request $request) {
        $categories = Category::all();
        $videoList = Video::with('category')->orderBy('video_id','DESC')->get();
        // echo "<pre>";
        // print_r($videoList);die;
        return view('frontend.home',compact('categories','videoList'));
    }
    // About Us
    public function AboutUs(Request $request) {
        return view('frontend.about_us');
    }
    public function ContactUs(Request $request) {
        return view('frontend.contact');
    }
}
