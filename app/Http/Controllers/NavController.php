<?php

namespace App\Http\Controllers;

class NavController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function page2() {
        return view('page_2');
    }

    public function page3() {
        return view('page_3');
    }

    public function page4() {
        return view('page_4');
    }
    ////////////////////////////
    public function welcome() {
        return view('contact');
    }
}
    ////////////////////////////
