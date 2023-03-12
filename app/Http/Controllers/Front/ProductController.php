<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function productSearch(Request $request)
    {
        $keyword = $request->input('product_search');
        $product_searchs = Product::where('name', 'LIKE', '%' . $keyword . '%')->get();
        return view('front.product_search', compact('product_searchs'));
    }
}
