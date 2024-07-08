<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\category;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function home()
    {
        $categories = category::all();
        $blog = BlogPost::where('status', 'active')->get();
        return view('home', compact('categories', 'blog'));
    }

    public function about_us(){
        return view('Bar.about_us');
    }

    public function blog(){
        $blog=BlogPost::where('status','=','active')->get();
        return view('Bar.blog', compact('blog'));
    }

    public function contact(){
        return view('Bar.contact');
    }

    public function explore(){
        return view('Bar.explore');
    }


    public function getpost($id){
        $blog=BlogPost::find($id);
        return view('posts-details.post-details',compact('blog'));
    }


}
