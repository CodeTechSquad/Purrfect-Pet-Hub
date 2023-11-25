<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;


class BlogController extends Controller
{
    public function index()
    {
        //$blogs = Blog::all();
        //return view('pages.admin.blog.index', compact('blogs'));
        return view('pages.admin.blog.index', ['blogs' => Blog::get() ]);
    }

    public function create()
    {
        return view('pages.admin.blog.create');
    }

    public function store(Request $request)
    {

        //validation
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        //upload images
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('blog_images'), $imageName);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->image = $imageName;

        $blog->save();

        return back()->withSuccess('Blog post created successfully!');
    }

        public function delete(Blog $blog)
        {
            $blog->delete();
            return redirect()->route('admin.blog.index');
        }

}    