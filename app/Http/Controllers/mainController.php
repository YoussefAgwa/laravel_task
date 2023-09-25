<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    // View home
    public function home() {
        return view('index');
    }
    // View about
    public function about() {
        return view('pages.about');
    }
    // View contact
    public function contact() {
        return view('pages.contact');
    }
    // View post
    public function post() {
        return view('pages.post');
    }
}
