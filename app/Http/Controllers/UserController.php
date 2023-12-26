<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Storage;

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

    public function imageUpdate(Request $request, $id)
    {
        $data = User::find($id);
        if ($request->file('image')) {
            $imagePath = Storage::delete('public/pp/'.$data->image);
            if (is_file($imagePath)) {
                unlink($imagePath);
            }
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->storeAs("public/pp/", $filename);
            $data['image'] = $filename;
        }
        $data->save();
        return redirect()
            ->back()
            ->withSuccessMessage('Image Updated Successfully!');
    }
}
