<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        $users = $request->user();
        return view('profile', compact('user'));
    }

    public function update(Request $request, $id){
        User::FindOrFail($id)->update([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'dob' => $request->dob,
            'address' =>$request->address,
        ]);
        return back();
    }
}
