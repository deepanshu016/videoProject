<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

Class HomeController extends Controller {


    // Home Page
    public function index(Request $request) {
        return view('frontend.home');
    }
    // About Us
    public function AboutUs(Request $request) {
        return view('frontend.about_us');
    }
    public function ContactUs(Request $request) {
        return view('frontend.contact');
    }
}
