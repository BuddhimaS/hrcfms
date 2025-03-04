<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function AuthLogin(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            if(Auth::user()->user_type=='Admin'){
                return redirect('admin/dashboard');
            }

            if(Auth::user()->user_type=='FrontDeskOfficer'){
                return redirect('FrontDeskOfficer/dashboard');
            }
            if(Auth::user()->user_type=='MarketingStaff'){
                return redirect('MarketingStaff/dashboard');
            }
            if(Auth::user()->user_type=='guest'){
                return redirect('guest/dashboard');
            }
            if(Auth::user()->user_type=='CleaningStaff'){
                return redirect('CleaningStaff/dashboard');
            }
          
        } 
        else {

            return redirect()->back()->with('error', 'Invalid Email and Password');
        }
    }
}
