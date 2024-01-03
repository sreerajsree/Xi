<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
