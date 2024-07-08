<?php

namespace App\Http\Controllers;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class Dashboardcontroller extends Controller
{
  public function dashboard(){
    $blog=BlogPost::all();
    return view('account.dashboard', compact('blog'));
  }

   public function create(Request $request){
    $blog=BlogPost::all();
    return view('blog.create',compact('blog'));

   }

   public function store(Request $request){

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
           ]);
   $user=Auth()->user();
   $userid=$user->id;


   $blog=new BlogPost();

   $blog->title=$request->title;
   $blog->content=$request->content;
   $blog->author=$request->author;
   $blog->user_id=$userid;
   $blog->status='pending';
   $image=$request->image;

   if($image){
    $imagename = time() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('blogimage'), $imagename);
    $blog->image = $imagename;


   }

   $blog->save();
   return redirect()->back()->with('success','blog added successfully');

        }

    public function my_blog(){
             $user=Auth()->user();
             $user_id=$user->id;
             $blog=BlogPost::where('user_id','=',$user_id)->get();
             return view('blog.my_blog',compact('blog'));
        }


    public function UserManageBlog(){
        $user=Auth()->user();
        $user_id=$user->id;
        $blog=BlogPost::where('user_id','=',$user_id)->get();
        return view('blog.manage',compact('blog'));
    }

    public function edit($id){

        $blog=BlogPost::find($id);

        return view('blog.edit',compact('blog'));


      }

    public function userupdate(Request $request, $id){
        $blog=BlogPost::find($id);
        $blog->title=$request->title;
        $blog->content=$request->content;
        $image=$request->image;
        if($image){
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('blogimage'), $imagename);
            $blog->image = $imagename;
        }

        $blog->save();
        return redirect()->back()->with('success','blog updated successfully');
    }
}
