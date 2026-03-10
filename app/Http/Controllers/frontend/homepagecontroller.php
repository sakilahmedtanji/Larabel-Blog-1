<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homepagecontroller extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function aboutme(){
        return view('frontend.aboutme');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function posta(){
        return view('frontend.content.post1');
    }
}
  