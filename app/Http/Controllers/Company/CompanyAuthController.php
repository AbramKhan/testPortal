<?php

namespace App\Http\Controllers\Company;

use App\Constants\Role;
use App\Http\Controllers\Controller;
use App\Mail\WebsiteEmail;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class CompanyAuthController extends Controller
{
    public function ShowSignUp()
    {
        return view('company.signup');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required'],
            'email' => ['email', 'required'],
            'password' => ['required'],
            'c_password' => ['required', 'same:password'],
            'phone' => ['required']
        ]);

        $token = hash('sha256', time());
        $role = Role::COMPANY;
        $status = 0;

        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->password = Hash::make($request->password);
        $company->role = $role;
        $company->status = $status;
        $company->phone = $request->phone;
        $company->token = $token;
        $company->save();

        $verificationLink = route('Company_Email_Varified', ['email' => $request->email]);
        $subject = 'new registerd company verification';
        $message = "click here to verify the registration id";
        $message .= "<a href = '" . $verificationLink . "' > click here </a>";

        \Mail::to($request->email)->send(new WebsiteEmail($subject, $message));

        return redirect()->back()->with('success', 'thanks for rigistration. soon you will get a confirmation notification');


    }


    public function CompanyEmailVarified($email){

        $user = Company::where('email', $email)->first();

        if(!$user){
            return redirect()->back()->with('something went wrong');
        }

        $user->token = '';
        $user->status = 1;
        $user->save();

        return redirect()->route('company_show_login');

    }

    public function LoginPage(){
        return view('Company.signin');
    }

    public function loginSubmit(Request $request){

        $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

         $user = Company::where('email', $request->email)->first();
        // //  dd($user);

        // if($user->status == 0){
        //     return redirect()->back()->with('error', 'your registration is pending');
        // }

        // $check = $request->all();

        // $data = [
        //     'email' => $check['email'] ,
        //     'password' => $check['password']
        // ];

        if ($user) {
            if ($user->status == 0) {
                return redirect()->route('company_show_login')->with('error', 'your registration is pending');
            }

            $check = $request->all();

            $data = [
                'email' => $check['email'],
                'password' => $check['password']
            ];

            if (Auth::guard('company')->attempt($data)) {
                return redirect()->route('company_dashboard')->with('success', 'login succesfully');
            } else {
                return redirect()->back()->with('error', 'information doesnt match');
            }

        } else {
            return redirect()->back()->with('error', 'you are not registered');
        }


        //  if(Auth::guard('company')->attempt($data)){
        //     return redirect()->route('company_dashboard')->with('success', 'login succesfully');
        // }else{
        //     return redirect()->back()->with('error','information doesnt match');
        // }


    }


    public function companydashboard() { 
        return view('company.layouts.dashboard');
    }


    public function companylogout(){
         Auth::guard('company')->logout();

//          request()->session()->invalidate(); 

// request()->session()->regenerateToken();

    return redirect()->route('company_show_login');

    }


}
