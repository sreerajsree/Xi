<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fullname'=>['required','string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8', 'string', 'regex:/^.*(?=.{3,})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\d\x]).+$/', 'confirmed'],
            'dob' => ['required'],
            'address' => ['required', 'string'],
            'id_card' => ['required', 'mimes:jpg,pdf,png,jpeg'],
            'image' => ['required', 'mimes:jpg,pdf,png,jpeg'],
        ]);
    }

    protected function create(array $data) {
        $request = request();
        if($request->hasFile('image')){
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'_'.'.'.$extension;
            $path = $request->file('image')->storeAs('public/pp', $fileNameToStore);
        }else{
            $fileNameToStore = 'no-image.jpg';
        }

        if($request->hasFile('id_card')){
            $fileNameWithExt = $request->file('id_card')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('id_card')->getClientOriginalExtension();
            $fileNameToStoreid = $fileName.'_'.time().'_'.'.'.$extension;
            $path = $request->file('id_card')->storeAs('public/id', $fileNameToStoreid);
        }else{
            $fileNameToStoreid = 'no-image.jpg';
        }

        return User::create([
            'fullname' => $data['fullname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'dob' => $data['dob'],
            'address' => $data['address'],
            'id_card' => $fileNameToStoreid,
            'image' => $fileNameToStore,
        ]);
    }
    


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
}
