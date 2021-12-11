<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retailer;
use App\Models\Village;
use Illuminate\Support\Facades\Hash;
use Validator;
use DB;
use Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Retailer::leftJoin('_village', 'retailer.village_id', '=', '_village.village_id')
            ->where('id_retailer', '=', Auth::user()->id_retailer)
            ->get()
            ->toArray();
        // return $data;

        return view('setting.profile-retailer', compact('data'));
    }
    public function edit()
    {
        $data = Retailer::leftJoin('_village', 'retailer.village_id', '=', '_village.village_id')
            ->where('id_retailer', '=', Auth::user()->id_retailer)
            ->get()
            ->toArray();
        // return $data;

        return view('setting.profile-retailer-edit', compact('data'));
    }

    public function update(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'nama_pemilik' => 'required|string|max:255',
            'nama_toko' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'no_hp' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);

        DB::beginTransaction();
        try {
            if ($request->file_foto_depan) {
                $extension = $request->file('file_foto_depan')->getClientOriginalExtension();
                $filenameSimpan = time() . '.' . $extension;
                $path = $request->file('file_foto_depan')->storeAs('public/posts_image', $filenameSimpan);
                // Storage::disk('public')->put($filenameSimpan, $request->file_foto_depan);

                Retailer::where('id_retailer', $request->id_retailer)
                    ->update([
                        'username' => $request->username,
                        'nama_pemilik' => $request->nama_pemilik,
                        'no_hp' => $request->no_hp,
                        'nama_toko' => $request->nama_toko,
                        'alamat' => $request->alamat,
                        // 'file_foto_depan' => route('root.url') . str_replace('public', '/storage', $path)
                        'file_foto_depan' => $filenameSimpan
                    ]);
            } else {
                Retailer::where('id_retailer', $request->id_retailer)
                    ->update([
                        'username' => $request->username,
                        'nama_pemilik' => $request->nama_pemilik,
                        'no_hp' => $request->no_hp,
                        'nama_toko' => $request->nama_toko,
                        'alamat' => $request->alamat,
                    ]);
            }
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => 'Update Tabel retailer Fail', 'messages' => $e->getMessage()]);
        }
        // return $request;
        DB::commit();

        return redirect()->intended('/profile/retailer')->with('success', 'Berhasil mengubah data akun');
    }

    public function update_toko(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'nama_toko' => 'required|string|max:255',
            'no_hp' => 'required|string|max:255',
            'alamat' => 'max:255',
        ]);
        // return $request;
        if ($request->alamat == null) {
            $alamat = "";
        } else {
            $alamat = $request->alamat;
        }

        DB::beginTransaction();
        try {
            Retailer::where('id_retailer', $request->id_retailer)
                ->update([
                    'nama_toko' => $request->nama_toko,
                    'no_hp' => $request->no_hp,
                    'alamat' => $alamat,
                ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => 'Update Tabel retailer Fail', 'messages' => $e->getMessage()]);
        }
        // return $request;
        DB::commit();

        return redirect()->intended('/profile/retailer')->with('success', 'Berhasil mengubah data toko');
    }

    public function update_password(Request $request)
    {
        // return $request;

        Validator::extend('password', function ($attribute, $value, $parameter, $validator) {
            return Hash::check($value, $user->password);
        });

        $messages = [
            'password' => 'Invalid current password.',
        ];

        $validator = Validator::make(
            request()->all(),
            [
                'current_password' => 'required|password',
                'password' => 'required|min:8|confirmed',
                'password_confirmation' => 'required',
            ],
            // $messages
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $user = Retailer::find($request->id_retailer);

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->intended('/profile/retailer')->with('success', 'Berhasil mengubah kata sandi');
    }
}
