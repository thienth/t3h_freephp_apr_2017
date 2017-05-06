<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Ham tra ve giao dien dang nhap 
     * @return view resources/views/auth/login.blade.php
     */
    public function login(){
        return view('auth.login');
    }

    /**
     * Ham nhan du lieu tu form va tien hanh dang nhap
     * @return neu login thanh cong thi tro sang trang quan tri
     * neu login k thanh cong thi tra ve man hinh login voi messages error
     */
    public function postLogin(Request $request){
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }else{
            return view('auth.login', ['errMsg' => 'wrong email/password']);
        }

    }
}
