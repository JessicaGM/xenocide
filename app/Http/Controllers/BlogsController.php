<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(){
        $blogs = Blog::latest('created_at')->get();
        return view('index', ['blogs' => $blogs]);
    }

    public function show($request){
        Blog::where('title',$request)->firstOrFail();
        $blogs = Blog::where('title',$request)->get();
        return view('blog', ['blogs' => $blogs]);
    }
}
