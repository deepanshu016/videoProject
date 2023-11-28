<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class CmsController extends Controller
{
    public function index()
    {
        return view('backend.dashboard');
    }

    // Contact Us Page
    public function contactUsPage()
    {
        return view('backend.cms.contact_us');
    }
    // About Us Page
    public function aboutUsPage()
    {
        return view('backend.cms.about_us');
    }
    // Privacy Policy Page
    public function privacyPolicyPage()
    {
        return view('backend.cms.privacy');
    }
    // Terms Condition Page
    public function termsConditionPage()
    {
        return view('backend.cms.terms_condition');
    }
}
