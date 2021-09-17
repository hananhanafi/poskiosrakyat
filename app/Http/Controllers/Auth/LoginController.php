<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;
use App\Models\Retailer;
use Auth;
use Redirect;

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
            $this->middleware('guest:retailer')->except('logout');
            $this->middleware('guest:retailer_operator')->except('logout');
    }

    public function loginOtp()
    {
        return view('login.login-otp');
    }

    public function loginOtpVerif()
    {
        return view('login.login-otp-verif');
    }

    public function showRetailerLoginForm()
    {
        return view('auth.retailer.login');
    }
    public function showRetailerForgotPasswordVerifyOTPForm()
    {
        return view('auth.retailer.forgot-password-verify-otp');
    }
    public function showRetailerForgotPasswordSetPasswordForm()
    {
        return view('auth.retailer.forgot-password-set-password');
    }

    public function retailerLogin(Request $request)
    {
        $errors = new MessageBag;
        // return $request;
        $this->validate($request, [
            'username'   => 'required',
            'password' => 'required|min:8'
        ]);
        $user = Retailer::where('username', $request->username)->first();
        // return $user['reviewed_at'];

        $errors = new MessageBag([
            'password' => ['username dan/atau kata sandi tidak valid.'], 
            'review' => ['Untuk saat ini Anda belum bisa masuk ke sistem, akun Anda sedang diperiksa oleh Admin']
        ]);
        // return $errors->first('review');

            if(isset($user['reviewed_at'])) {
                if (Auth::guard('retailer')->attempt(['username' => $request->username, 'password' => $request->password])) {
                    return redirect()->intended('/dashboard')->with('alert-success', 'You are now logged in.');;
                }
            }else {
                return redirect()->back()->withErrors($errors->first('review'));
            }

        return Redirect::back()->withErrors($errors->first('password'))->withInput($request->only('username'));
    }

     public function showRetailerOperatorLoginForm()
    {
        return view('auth.login-operator');
    }

    public function retailerOperatorLogin(Request $request)
    {

        $errors = new MessageBag;
        // return $request;
        $this->validate($request, [
            'username'   => 'required',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('retailer_operator')->attempt(['username' => $request->username, 'password' => $request->password])) {
            // return $request;
            return redirect()->intended('/dashboard')->with('alert-success', 'You are now logged in.');;
        }
        
        $errors = new MessageBag(['password' => ['username and/or password invalid.']]);

        return Redirect::back()->withErrors($errors)->withInput($request->only('username'));
    }
}
