<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Retailer;
use Auth;
use DB;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    
    public function showRetailerForgotPasswordForm()
    {
        return view('auth.retailer.forgot-password');
    }

    
    protected function retailerVerifiedOTP(Request $request)
    {
        $this->validate($request, [
            'phone_number' => 'required|string|max:255',
        ]);
        try{
            $user = Retailer::where('no_hp', $request->phone_number)->first();
            if($user){
                return view('auth.retailer.forgot-password-set-password', compact('user'));
            }else {
                return response()->json(['status' => 'error', 'messages' => 'Gagal', 'data' => $user],404);
            }
        }catch(Exception $e) {
            // DB::rollback();
            return response()->json(['status' => 'error', 'messages' => $e->getMessage()]);
        }
    }

    
    protected function updatePassword(Request $request)
    {
        $user = Retailer::where('id_retailer', $request->id_retailer)->first();

        $this->validate($request, [
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        DB::beginTransaction();
            try{
                Retailer::where('id_retailer', $request->id_retailer)
                    ->update([
                        'password' => Hash::make($request->password),
                    ]);
            }catch(\Exception $e) {
                DB::rollback();
                return response()->json(['status' => 'Create Tabel Retailer Fail', 'messages' => $e->getMessage()]);
            }
        DB::commit();

        return redirect()->intended('/retailer/login')->with('success-set-password', 'Berhasil memperbarui password');
    }
}
