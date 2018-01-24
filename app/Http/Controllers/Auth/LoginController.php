<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
     *
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */



    public function login()
    {
        $user = User::all();
        $email = $user->get('email');
        if($email = "jasminbakery@gmail.com"){
//            protected $redirectToAdmin = 'admin/index';
            return  view( 'admin/index');
        }else{
//            protected $redirectTo = '/home';
            return  view( '/home');
        }
    }
//    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
