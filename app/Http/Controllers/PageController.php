<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Passenger;
use App\User;
use App\Order;

class PageController extends Controller
{
    public function about(){
        return view('about');
    }

    public function howitworks(){
        return view('howitworks');
    }

    public function aircraft(){
        return view('aircraft');
    }

    public function contact(){
        return view('contact');
    }

    public function agreement(){
        return view('agreement');
    }

    public function terms(){
        return view('terms');
    }

    public function cookie(){
        return view('cookie');
    }

    public function privacy(){
        return view('privacy');
    }

    public function wtf() {
        return view('wtf');
    }

    public function addPassenger($id){
        $order_id = User::join('orders', 'users.id', '=', 'orders.user_id')->where('users.id', auth()->user()->id)->where('orders.id','=',$id)->first()->id;
        $passengers = Passenger::where('order_id',$order_id)->where('category','=','passenger')->get();
        $pets = Passenger::where('order_id',$order_id)->where('category','=','pets')->get();
        return view('add-passenger',compact('order_id','passengers','pets'));
    }

    public function addpassengers(Request $request) {
        
        $add = new Passenger;
        $add->order_id = $request->order_id;
        $add->category = $request->category;
        $add->first_name = $request->first_name;
        $add->last_name = $request->last_name;
        $add->email = $request->email;
        $add->phone = $request->phone;
        $add->pet_name = $request->pet_name;
        $add->breed = $request->breed;
        $add->health = $request->health;
        $add->temperament = $request->temperament;
        $add->weight = $request->weight;
        $add->ex_weight = $request->ex_weight;
        $add->save();
        toastr()->success('Saved Successfully');
        return redirect()->back();

    }
}
