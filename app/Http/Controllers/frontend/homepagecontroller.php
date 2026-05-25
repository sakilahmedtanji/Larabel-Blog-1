<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\blog;
use App\Models\contactmassage;
use Illuminate\Http\Request;

class homepagecontroller extends Controller
{
    public function index(){
        $blogs= blog::orderBy('created_at','desc')->paginate(5);
        return view('frontend.index',compact('blogs'));
        return view('frontend.index');
    }
    public function aboutme(){
        return view('frontend.aboutme');
    }
    public function contact(){
        
        return view('frontend.contact');
    }
    public function posta($id){
        $post = Blog::findOrFail($id);
        
        return view('frontend.content.post1',compact('post'));
        
    }
    public function contactmassage(Request $request){
        $massage= new contactmassage();
        $massage->name= $request->name;
        $massage->email=$request->email;
        $massage->phone=$request->phone;
        $massage->massage=$request->massage;

        $massage->save();
        toastr()->success('Massage sent successfully.');
        return redirect()->back();
    }

    
}
  