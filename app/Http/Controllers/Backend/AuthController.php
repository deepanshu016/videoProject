<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\Admin;
use Session;
Class AuthController extends Controller {


    // Home Page
    public function index(Request $request) {
        return view('backend.login');
    }
    // About Us
    public function AboutUs(Request $request) {
        return view('backend.about_us');
    }
    public function ContactUs(Request $request) {
        return view('backend.contact');
    }
    // Admin Login
    public function adminLogin(LoginRequest $request){
       try{
            $email = $request->input('email');
            $password = sha1($request->input('password'));
            $userDetails = Admin::where(array('email'=>$email,'password'=>$password))->first();
            if($userDetails){
                $request->session()->put('admin',$userDetails);
                $response = array('status'=>'success','message'=>'Login Successfull!!','type'=>'success','title'=>'Success','url'=>url('admin/dashboard'));
            }else{
                $response = array('status'=>'error','message'=>'Credentials not matched','type'=>'error','title'=>'Failure');
            }
       }catch (Exception $e){
           $response = array('status'=>'error','message'=>$e->getMessage(),'type'=>'error','title'=>'Failure');
       }
       return response()->json($response);
    }

    //SESSION VALUE
    public function user() {
        $user = session('admin');
        if(!empty($user))
        {
            $userDetails = Admin::where('id',$user->id)->first();
        }else{
            $userDetails = '';
        }
        return $userDetails;
    }

    public static function logout() 
    {
        session()->flush();
        return redirect(url('admin'));
    }
}
