<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Front\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        $product_news = Product::paginate(4);
        $menProducts = Product::Where('featured', true)->Where('product_category_id', 1)->get();
        $womenProducts = Product::Where('featured', true)->Where('product_category_id', 2)->get();
        $blog_pages = Blog::paginate(4);
        $blogs = Blog::orderBy('id', 'desc')->limit(3)->get();
        return view('front.home', compact('menProducts', 'womenProducts', 'product_news', 'blogs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
