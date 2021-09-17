<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Retailer;
use App\Models\RetailerOperator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:retailer');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showRetailerRegisterForm()
    {
        return view('auth.retailer.register');
    }
    public function showRetailerNotRegisterPage()
    {
        return view('auth.retailer.not-register');
    }
    protected function showSetAccountRetailer(Request $request)
    {
        // $user = Retailer::where('id_retailer', $request->id_retailer)->first();
        return view('auth.retailer.set-account');
        
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    /**
     * @param array $data
     *
     * @return mixed
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function retailerPhoneAuth(Request $request)
    {
        $this->validate($request, [
            'phone_number' => 'required|string|max:255',
        ]);
        try{
            // Retailer::updateOrCreate([ ]);
            $user = Retailer::where('no_hp', $request->phone_number)->first();
            if($user){
                return response()->json(['status' => 'success', 'messages' => 'Berhasil', 'data' => $user]);
            }else {
                return response()->json(['status' => 'error', 'messages' => 'Gagal', 'data' => $user],404);
            }
        }catch(Exception $e) {
            // DB::rollback();
            return response()->json(['status' => 'error', 'messages' => $e->getMessage()]);
        }
    }
    protected function retailerVerifiedOTP(Request $request)
    {
        $this->validate($request, [
            'phone_number' => 'required|string|max:255',
        ]);
        try{
            $user = Retailer::where('no_hp', $request->phone_number)->first();
            if($user){
                return view('auth.retailer.set-account', compact('user'));
                // return redirect('/retailer/set-user', compact('user'));
                // return redirect()->route('retailer-set-account', ['id_retailer' => $user->id_retailer]);
            }else {
                return response()->json(['status' => 'error', 'messages' => 'Gagal', 'data' => $user],404);
            }
        }catch(Exception $e) {
            // DB::rollback();
            return response()->json(['status' => 'error', 'messages' => $e->getMessage()]);
        }
    }
    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function createRetailer(Request $request)
    {
        $user = Retailer::where('id_retailer', $request->id_retailer)->first();

        $this->validate($request, [
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        DB::beginTransaction();
            try{
                Retailer::where('id_retailer', $request->id_retailer)
                    ->update([
                        'username' => $request->username,
                        'password' => Hash::make($request->password),
                    ]);
            }catch(\Exception $e) {
                DB::rollback();
                return response()->json(['status' => 'Create Tabel Retailer Fail', 'messages' => $e->getMessage()]);
            }
        DB::commit();

        return redirect()->intended('/retailer/login')->with('success-set-account', 'Berhasil membuat akun');
    }
    // protected function createRetailer(Request $request)
    // {
    //     $this->validate($request, [
    //         'nama_toko' => 'required|string|max:255',
    //         'nama_pemilik' => 'required|string|max:255',
    //         'username' => 'required|string|max:255',
    //         'no_hp' => 'required|string|max:255',
    //         'password' => 'required|string|min:8|confirmed',
    //     ]);

    //     DB::beginTransaction();
    //         try{
    //             Retailer::updateOrCreate([
    //                 'nama_toko' => $request->nama_toko,
    //                 'nama_pemilik' => $request->nama_pemilik,
    //                 'username' => $request->username,
    //                 'no_hp' => $request->no_hp,
    //                 'village_id' => 1,
    //                 'alamat' => "",
    //                 'latitude' => "",
    //                 'longitude' => "",
    //                 'file_foto_depan' => "",
    //                 'file_foto_ktp' => "",
    //                 'warning_count' => 0,
    //                 'password' => Hash::make($request->password),
    //             ]);
    //         }catch(\Exception $e) {
    //            DB::rollback();
    //            return response()->json(['status' => 'Create Tabel Retailer Fail', 'messages' => $e->getMessage()]);
    //         }
    //     DB::commit();

    //     return redirect()->intended('login/retailer');
    // }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    
}
