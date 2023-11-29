<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PrivacyPolicyRequest;
use App\Http\Requests\ContactUsRequest;
use App\Http\Requests\TermConditionRequest;
use App\Http\Requests\AboutUsRequest;
use App\Models\Cms;
use App\Models\Video;

class CmsController extends Controller
{
    public function index()
    {

        return view('backend.dashboard');
    }

    // Contact Us Page
    public function contactUsPage()
    {
        $cms = Cms::where('id',1)->first();
        return view('backend.cms.contact_us',compact('cms'));
    }
    // About Us Page
    public function aboutUsPage()
    {
        $cms = Cms::where('id',1)->first();
        return view('backend.cms.about_us',compact('cms'));
    }
    // Privacy Policy Page
    public function privacyPolicyPage()
    {
        $cms = Cms::where('id',1)->first();
        return view('backend.cms.privacy',compact('cms'));
    }
    // Terms Condition Page
    public function termsConditionPage()
    {
        $cms = Cms::where('id',1)->first();
        return view('backend.cms.terms_condition',compact('cms'));
    }

    // Contact Us Data
    public function saveContactUs(ContactUsRequest $request) {
        try{
            $cms = Cms::where('id',1)->first();
            if(empty($cms)){
                $cms = new Cms();
            }
            $cms->contact_us_content = $request->contact_us;
            $cms->save();
            if($cms->id){
                return response()->json(array('status'=> 'success','msg'=>'Contact Us data added successfully','url'=>url('admin/contact-us')));
            }
            return response()->json(array('status'=> 'error','msg'=>'Something went wrong','url'=>'')); 
        }catch(Exception $e){
            \Log::debug($e->getMessage());
            return response()->json(array('status'=> 'error','msg'=>$e->getMessage(),'url'=>'')); 
        }
    }

     // About Us Data
    public function saveAboutUs(AboutUsRequest $request) {
        try{
            $cms = Cms::where('id',1)->first();
            if(empty($cms)){
                $cms = new Cms();
            }
            $cms->about_us_content = $request->about_us_content;
            $cms->save();
            if($cms->id){
                return response()->json(array('status'=> 'success','msg'=>'About Us Data added successfully','url'=>url('admin/about-us')));
            }
            return response()->json(array('status'=> 'error','msg'=>'Something went wrong','url'=>'')); 
        }catch(Exception $e){
            \Log::debug($e->getMessage());
            return response()->json(array('status'=> 'error','msg'=>$e->getMessage(),'url'=>'')); 
        }
    }

    //Terms & Conditions Data
    public function saveTermsCondition(TermConditionRequest $request) {
        try{
            $cms = Cms::where('id',1)->first();
            if(empty($cms)){
                $cms = new Cms();
            }
            $cms->terms_conditions_content = $request->terms_conditions_content;
            $cms->save();
            if($cms->id){
                return response()->json(array('status'=> 'success','msg'=>'Terms & Conditions Data added successfully','url'=>url('admin/terms-condition')));
            }
            return response()->json(array('status'=> 'error','msg'=>'Something went wrong','url'=>'')); 
        }catch(Exception $e){
            \Log::debug($e->getMessage());
            return response()->json(array('status'=> 'error','msg'=>$e->getMessage(),'url'=>'')); 
        }
    }

    //Privacy & Policy Data
    public function savePrivacyPolicy(PrivacyPolicyRequest $request) {
        try{
            $cms = Cms::where('id',1)->first();
            if(empty($cms)){
                $cms = new Cms();
            }
            $cms->privacy_policy_content = $request->privacy_and_policy;
            $cms->save();
            if($cms->id){
                return response()->json(array('status'=> 'success','msg'=>'Terms & Conditions Data added successfully','url'=>url('admin/privacy-policy')));
            }
            return response()->json(array('status'=> 'error','msg'=>'Something went wrong','url'=>'')); 
        }catch(Exception $e){
            \Log::debug($e->getMessage());
            return response()->json(array('status'=> 'error','msg'=>$e->getMessage(),'url'=>'')); 
        }
    }
}
