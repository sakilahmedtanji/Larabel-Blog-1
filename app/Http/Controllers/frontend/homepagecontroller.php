<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\contactmassage;
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
    public function contactmassage(Request $request){
        $massage= new contactmassage();
        $massage->name= $request->name;
        $massage->email=$request->email;
        $massage->phone=$request->phone;
        $massage->massage=$request->massage;

        $massage->save();
        toastr()->success('blog created successfully.');
        return redirect()->back();
    }
}
  