<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RetailerOperator;
use App\Models\Retailer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Validator;
use DB;

class OperatorController extends Controller
{
    public function index()
    {
        $data = Retailer::join('retailer_operator', 'retailer.id_retailer', '=', 'retailer_operator.id_retailer')
            ->where('retailer_operator.deleted_at', '=', NULL)
            ->get()
            ->toArray();
        // return $data;

        return view('user_operator.operator', compact('data'));
    }

    public function create()
    {
        return view('user_operator.operator-add');
    }

    public function store(Request $request)
    {
        // return $request;

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);
        // return $request;

        DB::beginTransaction();
            try{
                RetailerOperator::updateOrCreate([
                    'id_retailer' => $request->id_retailer,
                    'username' => $request->username,
                    'nama' => $request->name,
                    'password' => Hash::make($request->password),
                ]);
            }catch(\Exception $e) {
               DB::rollback();
               return response()->json(['status' => 'Create Tabel retailer_operator Fail', 'messages' => $e->getMessage()]);
            }
        // return $request;
        DB::commit();

        return redirect()->intended('/operator')->with('success','Berhasil membuat akun operator');
    }

    public function show($id)
    {
        $data = Retailer::join('retailer_operator', 'retailer.id_retailer', '=', 'retailer_operator.id_retailer')
            ->where('id_retailer_operator', $id)
            ->select('retailer_operator.id_retailer', 'id_retailer_operator', 'retailer_operator.nama', 'retailer_operator.username', 'retailer_operator.password', 'retailer_operator.deleted_at')
            ->get()
            ->toArray();
        // return $data;

        return view('user_operator.operator-detail', compact('data'));
    }

    public function edit($id)
    {
        $data = Retailer::join('retailer_operator', 'retailer.id_retailer', '=', 'retailer_operator.id_retailer')
            ->where('id_retailer_operator', $id)
            ->select('retailer_operator.id_retailer', 'id_retailer_operator', 'retailer_operator.nama', 'retailer_operator.username', 'retailer_operator.password', 'retailer_operator.deleted_at')
            ->get()
            ->toArray();
        // return $data;

        return view('user_operator.operator-edit', compact('data'));
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

        return redirect()->intended('/operator')->with('success','Berhasil mengubah data operator');
    }

    public function update_password(Request $request)
    {
       // return $request;

        // Validator::extend('password', function($attribute, $value, $parameter, $validator){
        //     return Hash::check($value, $user->password);
        // });

        // $messages = [
        //     'password' => 'Invalid current password.',
        // ];

        $validator = Validator::make(request()->all(), [
            // 'current_password' => 'required|password',
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
      
      return redirect()->back()->with('success','Berhasil Mengubah Password Operator');
    }

    public function destroy($id)
    {
        // return $request;
        $data = RetailerOperator::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Operator berhasil dihapus');
    }
}
