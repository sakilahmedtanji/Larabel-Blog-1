<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\contactmassage;
use App\Models\settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class admincontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function adminlogout(){
        Auth::logout();
        return redirect('/');
    }
    public function editsetting(){
        $setting = settings::first();
         
        return view('admin.settings.edit', compact('setting'));
    }

    public function settingupdate(Request $request){
        $setting = settings::first();
        $setting ->about_me = $request->about_me;
        $setting ->facebook = $request->facebook;
        $setting ->Twitter =  $request -> Twitter;
        $setting -> Github = $request -> Github;

        
        
        $setting->save();
        toastr()->success('blog created successfully.');
        return redirect()->back();
    }
    public function showmassage(){
        $massage= contactmassage::orderBy('id','desc')->paginate(20);
        return view('admin.settings.massages', compact('massage'));
    }
    public function deletemassage($id){
        $massage = contactmassage::find($id);
        $massage -> delete();
    }
}
