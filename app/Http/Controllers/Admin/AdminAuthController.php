<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\WebsiteEmail;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;




class AdminAuthController extends Controller
{

     public function AdminLoginPage(){
        return view('admin.login');
    }


    public function loginSubmit(Request $request){

       $request->validate([
            'email' => ['required' , 'email'],
            'password' => ['required']
        ]);

        $check = $request->all();

         $data = [
            'email' => $check['email'] ,
            'password' => $check['password']
        ];

         if(Auth::guard('admin')->attempt($data)){
            //  return redirect()->route('admin_Login')->with('error','you are not authorized as admin');
            return redirect()->route('admin_dashboard')->with('success', 'login succesfully');
        }else{
            return redirect()->back()->with('error','information doesnt match');
        }

    }

   public function adminLogout(Request $request){

    Auth::guard('admin')->logout();
     $request->session()->invalidate();
    $request->session()->regenerateToken();
   
    return redirect()->route('admin_login_page');
   }

  

    public function forgetPassword(){
        return view('admin.forget');
    }


    public function forgetPassVarificatio(Request $request){

        $request->validate([
            'email' => ['required','email']
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if(!$admin){
            return redirect()->back()->with('you are not authorized');
        }

        $token = hash('sha256', time());
        $admin->token = $token;
        $admin->update();

        $subject = 'password varification link';

        $varificationLink = url('admin/reset-Password/'.$token.'/'. $request->email);

        $message = "click here to change your password ";
        $message .= "<a href = '".$varificationLink."' > click here </a>";

        \Mail::to($request->email)->send(new WebsiteEmail($subject, $message));

         return redirect()->back()->with('success', 'we have sent a varification link, check your mail');
    }


    public function resetPassword($token, $email){
        $admin = Admin::where('token', $token)->where('email', $email)->first();
        if(!$admin){
            return redirect()->route('admin_login_page')->with('error','somthing went wrong');
        }
        return view('admin.reset', compact('token', 'email'));
    }

     public function passwordRecoverSubmit(Request $request, $email, $token)
    {


        $request->validate(
            [
            'password' => ['required'],
            'retype_password' => ['required','same:password'],
            ]
        );


        $admin = Admin::where('email', $request->email)->where('token', $request->token)->first();
        $admin->token = '';
        $admin->password = Hash::make($request->password);
        $admin->update();

        return redirect()->route('admin_login_page')->with('success', 'your account has been recovered, please login');



    }

       public function AdminProfile(){
        return view('admin.profile');
    }



    public function profileUpdate(Request $request){

        $request->validate(
            [
                'name' => ['required'],
                'email' => ['required'],
            ]
         );

         $admin =Admin::where('id', Auth::guard('admin')->user()->id)->first();

         if($request->photo){
            $request->validate([
                'photo' => ['mimes:png,jpg,jpeg']
            ]);
        
         $photo = time().'.'.$request->photo->extension();
         $request->photo->move(public_path('uploads/admin'), $photo);

         $admin->photo = $photo;
         $admin->update();

         }

         if($request->password){

            $request->validate([
                'password' => ['required'],
                'confirm_password' => ['required','same:password'],
            ]);

           
            $admin->password = Hash::make($request->password);
         }

        

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->update();
         return redirect()->back()->with('success', 'info updated uccessfully');

        //  if($request->photo){

        //  }
    }


}
