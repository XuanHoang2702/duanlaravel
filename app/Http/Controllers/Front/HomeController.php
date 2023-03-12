<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Front\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        $product_news = Product::paginate(4, ['*'], 'page');
        $menProducts = Product::where('featured', true)->where('product_category_id', 1)->get();
        $womenProducts = Product::where('featured', true)->where('product_category_id', 2)->get();
        $blog_pages = Blog::paginate(4);
        $blogs = Blog::orderBy('id', 'desc')->limit(3)->get();

        // Thêm thông tin xác thực vào truy vấn phân trang
        $product_news->appends(request()->query());

        return view('front.home', compact('menProducts', 'womenProducts', 'product_news', 'blogs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
