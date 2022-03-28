<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function show($request){
        Blog::where('title',$request)->firstOrFail();
        $blogs = Blog::where('title',$request)->get();
        return view('blog', ['blogs' => $blogs]);
    }

    public function blog(){
        $blogs = Blog::latest('created_at')->get();
        return view('blogs', ['blogs' => $blogs]);
    }
}
