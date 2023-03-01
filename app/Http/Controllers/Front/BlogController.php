<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        $blog_pages = Blog::paginate(4);
        // $blogs = Blog::orderBy('id', 'desc')->limit(3)->get();
        return view('front.blog-page', compact('blog_pages'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
