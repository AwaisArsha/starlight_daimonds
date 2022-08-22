<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Validator;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Session;
use Cookie;
use Redirect;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('web')->except('logout');
    }

    public function index()
    {
        $error_msg = isset($_REQUEST['error_msg'])?$_REQUEST['error_msg']:0;
        if($error_msg == 1){
            alert();
            Session::flash('flash_danger', 'You are blocked by admin please contact to admin!');
        }
        return view('login');
    }

    public function Login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        // print_r(Hash::make($credentials['password']));
        // die();
        // $2y$10$3Pka1t0ciIJ1Zl0lQNey7Ob6iY0n/CbgvSto9N4gadAbpgZkAYZ/G
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(['error' => $validator->errors()->all()]);
        }



        if (Auth::guard('web')->attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }else{
            return redirect()->intended('login');
        }
    }

    public function Logout(Request $request)
    {

        Auth::guard('web')->logout();
        Cookie::queue(Cookie::forget('XSRF-TOKEN'));
        Cookie::queue(Cookie::forget('roomapp_session'));
        return redirect()->route('login')->withCookie(Cookie::forget('sessionToken'));
    }
}
