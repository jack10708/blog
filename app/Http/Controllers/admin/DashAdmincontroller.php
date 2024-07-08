<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\category;
use Illuminate\Http\Request;

class DashAdmincontroller extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }


    public function Addblog(){
        return view('admin.blog.AddBlog');
    }

    public function Add_Blogs(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        dd($request);

        $user = Auth()->user();
        $user_id = $user->id;
        $author = $user->name;
        $usertype = $user->role;

        $blog = new BlogPost;
        $blog->user_id = $user_id;
        $blog->author = $author;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->usertype = $usertype;
        $blog->status = 'active';

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('blogimage'), $imagename);
            $blog->image = $imagename;
        }

        $blog->save();

        return redirect()->back()->with('success', 'Blog added successfully');
    }


    public function ManageBlogs(){
        $blog=BlogPost::all();
        return view('admin.blog.ManageBlog', compact('blog'));
    }

    public function DeleteBlog($id){
        $blog=BlogPost::find($id);
        $blog->delete();
        return redirect()->back()->with('success','blog deleted successfully');

    }

    public function EditBlog($id){

      $blog=BlogPost::find($id);

      return view('admin.blog.EditBlog',compact('blog'));


    }

    public function UpdateBlog(Request $request, $id){
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

    public function AcceptBlog($id){

        $blog=BlogPost::find($id);
        $blog->status='active';
        $blog->save();
        return redirect()->back()->with('success','post accepted successfully');
    }

    public function RejectBlog(){

        $blog=BlogPost::where('status','=','pending');
        $blog->delete();
        return redirect()->back()->with('success','post rejected successfully');
        }


        public function addCategory()
        {
            return view('admin.categories.add');
        }

        public function storeCategory(Request $request)
        {
            $request->validate([
                'name' => 'required|unique:categories|max:255',
            ]);

            Category::create([
                'name' => $request->name,
            ]);

            return redirect()->route('manage.categories')->with('success', 'Category added successfully');
        }

        public function manageCategories()
        {
            $categories = Category::all();
            return view('admin.categories.manage', compact('categories'));
        }

        public function editCategory($id)
        {
            $category = Category::findOrFail($id);
            return view('admin.edit_category', compact('category'));
        }

        public function updateCategory(Request $request, $id)
        {
            $request->validate([
                'name' => 'required|max:255|unique:categories,name,'.$id,
            ]);

            $category = Category::findOrFail($id);
            $category->update([
                'name' => $request->name,
            ]);

            return redirect()->route('manage.categories')->with('success', 'Category updated successfully');
        }

        public function deleteCategory($id)
        {
            $category = Category::findOrFail($id);
            $category->delete();

            return redirect()->route('manage.categories')->with('success', 'Category deleted successfully');
        }

        public function postsByCategory(Category $category)
{
    $posts = $category->posts()->paginate(10);
    return view('category_posts', compact('category', 'posts'));
}

}






