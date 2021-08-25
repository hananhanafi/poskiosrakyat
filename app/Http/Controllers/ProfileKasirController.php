<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RetailerOperator;
use App\Models\Village;
use Illuminate\Support\Facades\Hash;
use Validator;
use DB;
use Auth;

class ProfileKasirController extends Controller
{
    public function index()
    {
    	$data = RetailerOperator::where('id_retailer_operator', '=', Auth::user()->id_retailer_operator)
            ->get()
            ->toArray();
        // return $data;

        return view('setting.profile-retailer-operator', compact('data'));
    }

    public function update(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255',
        ]);
        // return $request;

        DB::beginTransaction();
            try{
                RetailerOperator::where('id_retailer_operator', $request->id_retailer_operator)
                    ->update([
                        'username' => $request->username,
                        'nama' => $request->nama,
                ]);
            }catch(\Exception $e) {
               DB::rollback();
               return response()->json(['status' => 'Update Tabel retailer_operator Fail', 'messages' => $e->getMessage()]);
            }
        // return $request;
        DB::commit();

        return redirect()->intended('/profile/retailer_operator')->with('success','Berhasil mengubah data akun');
    }

    public function update_password(Request $request)
    {
       // return $request;

        Validator::extend('password', function($attribute, $value, $parameter, $validator){
            return Hash::check($value, $user->password);
        });

        $messages = [
            'password' => 'Invalid current password.',
        ];

        $validator = Validator::make(request()->all(), [
            'current_password' => 'required|password',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
        ], 
        // $messages
        );

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $user = RetailerOperator::find($request->id_retailer_operator);

        $user->password = Hash::make($request->password);
        $user->save();
      
      return redirect()->intended('/profile/retailer_operator')->with('success','Berhasil mengubah kata sandi');
    }
}
