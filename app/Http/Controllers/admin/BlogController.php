<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     
    public function createblog(){
        return view('admin.blog.create');
    }

    public function storeblog(Request $request){
        $blog = new blog();
        $blog -> title = $request -> title;
        $blog -> subtitle = $request -> subtitle;
        $blog -> author_name = $request -> author_name;
        $blog -> blog_details = $request -> blog_details;
        
        if(isset($request-> image)){
            $image = $request-> file('image');
            $imagename= rand().'.'.$image-> getClientOriginalExtension();
            $image->move('blogs',$imagename);
            
             $blog->image = url('blogs/'.$imagename);
        }
        $blog ->save();
        toastr()->success('blog created successfully.');
        return redirect()->back();
    }

    
    public function bloglist(){
        $blogs= blog::orderby('id','desc')-> paginate(10);

        
        
        return view('admin.blog.list' ,compact('blogs'));  
    }

      public function deleteBlog ($id)
    {
        $blog = Blog::find($id);

        if($blog->image && file_exists('blogs/'.basename($blog->image))){
            unlink('blogs/'.basename($blog->image));
        }

        $blog->delete();

        toastr()->success('Blog deleted successfully');
        return redirect()->back();
    }

    public function editBlog($id){
        $blog = Blog::find($id);
        return view('admin.blog.edit', compact('blog'));
    }
    public function updateBlog(Request $request,$id){
        $blog = Blog::find($id);
        $blog -> title = $request -> title;
        $blog -> subtitle = $request -> subtitle;
        $blog -> author_name = $request -> author_name;
        $blog -> blog_details = $request -> blog_details;
        
        if(isset($request-> image)){
            if($blog->image && file_exists('blogs/'.basename($blog->image))){
            unlink('blogs/'.basename($blog->image));
        }
            
            $image = $request-> file('image');
            $imagename= rand().'.'.$image-> getClientOriginalExtension();
            $image->move('blogs',$imagename);
            
             $blog->image = url('blogs/'.$imagename);
        }
        $blog ->save();
        toastr()->success('blog created successfully.');
        return redirect()->back();
    }
   
}
