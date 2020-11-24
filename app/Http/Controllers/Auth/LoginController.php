<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Widgets\Front\Basket;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    //Start My Change
    public function redirectTo()
    {
        return '/admin';
    }

    public function username()
    {
        return 'mobile';
    }

    public function showLoginForm()
    {
        return view('myAuth.login');
    }


    public function logout(Request $request)
    {

        $this->guard()->logout();
        $items = \App\Services\Basket\Basket::items();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        \App\Services\Basket\Basket::forceSave($items);
        return $this->loggedOut($request) ?: redirect('/');
        return redirect()->route('front.home');
    }


}
