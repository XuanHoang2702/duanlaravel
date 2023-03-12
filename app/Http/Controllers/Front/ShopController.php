<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Brand;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use App\Http\Controllers\Front\DB;

class ShopController extends Controller
{
    //
    public function show($id)
    {
        $categories = ProductCategory::all();
        $brands = Brand::all();
        $product_find = Product::findOrFail($id);
        $product_similars = Product::Where('product_category_id', $product_find->product_category_id)->get();
        return view('front.shop.show', compact('product_find', 'categories', 'brands', 'product_similars'));
    }
}
