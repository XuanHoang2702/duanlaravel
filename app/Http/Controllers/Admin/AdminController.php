<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\ProductCategory;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\UserRequest;
use App\Models\Product;

class AdminController extends Controller
{
    //
    public $data = [];
    public function index()
    {
        return view('dashboard.home');
    }
    public function showProduct()
    {
        $products = Product::paginate(6);
        return view('dashboard.product.show', compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);;
    }
    public function addProduct()
    {
        $data = $this->data;
        $data['errorMessage'] = 'Vui lòng kiểm tra lại dữ liệu!';
        $categories = ProductCategory::all();
        $brands = Brand::all();
        return view('dashboard.product.add', compact('brands', 'categories', 'data'));
    }
    public function storeProduct(ProductRequest $request)
    {
        Product::create($request->all());
        return view('dashboard.product.show')->with('thongbao', 'Thêm sản phẩm thành công!');;
    }
    public function editProduct($id)
    {
        $product = Product::find($id);
        $data = $this->data;
        $data['errorMessage'] = 'Vui lòng kiểm tra lại dữ liệu!';
        $categories = ProductCategory::all();
        $brands = Brand::all();
        return view('dashboard.product.edit', compact('product', 'brands', 'categories', 'data'));
    }

    public function updateProduct(Request $request, ProductRequest $productRequest, $id)
    {
        //
        $updateData = $request->only(['name', 'product_category_id', 'brand_id', 'tag', 'featured', 'price', 'discount', 'qty', 'description']);

        $product = Product::find($id);
        $product->update($updateData);
        return redirect()->route('product.show')->with('thongbao', 'Cập nhật sản phẩm thành công!');
    }
    public function deleteProduct(Request $request, $id)
    {
        $product_delete = Product::find($id);
        $product_delete->delete();
        return redirect()->route('product.show')->with('thongbao', 'xóa sản phẩm thành công!');
    }

    //Category
    public function showCategory()
    {
        $categories = ProductCategory::all();
        return view('dashboard.category.show', compact('categories'));
    }
    public function addCategory()
    {
        $data = $this->data;
        $data['errorMessage'] = 'Vui lòng kiểm tra lại dữ liệu!';
        return view('dashboard.category.add', compact('data'));
    }
    public function storeCategory(CategoryRequest $request)
    {
        ProductCategory::create($request->all());
        $categories = ProductCategory::all();
        return view('dashboard.category.show', compact('categories'))->with('thongbao', 'Thêm sản phẩm thành công!');;
    }
    public function editCategory($id)
    {
        $category = ProductCategory::find($id);
        $data = $this->data;
        $data['errorMessage'] = 'Vui lòng kiểm tra lại dữ liệu!';
        return view('dashboard.category.edit', compact('category', 'data'));
    }

    public function updateCategory(Request $request, CategoryRequest $categoryRequest, $id)
    {
        //
        $updateData = $request->only(['name']);

        $category = ProductCategory::find($id);
        $category->update($updateData);
        return redirect()->route('category.show')->with('thongbao', 'Cập nhật sản phẩm thành công!');
    }
    public function deleteCategory(Request $request, $id)
    {
        $category_delete = ProductCategory::find($id);
        $category_delete->delete();
        return redirect()->route('category.show')->with('thongbao', 'xóa sản phẩm thành công!');
    }

    // User
    public function showUser()
    {
        $users = User::paginate(5);
        return view('dashboard.user.show', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function addUser()
    {
        $data = $this->data;
        $data['errorMessage'] = 'Vui lòng kiểm tra lại dữ liệu!';
        $categories = User::all();
        return view('dashboard.user.add', compact('data'));
    }
    public function storeUser(UserRequest $request)
    {
        User::create($request->all());
        return view('dashboard.user.show')->with('thongbao', 'Thêm user thành công!');;
    }
    public function editUser($id)
    {
        $user = User::find($id);
        $data = $this->data;
        $data['errorMessage'] = 'Vui lòng kiểm tra lại dữ liệu!';
        return view('dashboard.user.edit', compact('data'));
    }

    public function updateUser(Request $request, $id)
    {
        //
        $updateData = $request->only([]);

        $user = User::find($id);
        $user->update($updateData);
        return redirect()->route('user.show')->with('thongbao', 'Cập nhật user thành công!');
    }
    public function deleteUser(Request $request, $id)
    {
        $user_delete = User::find($id);
        $user_delete->delete();
        return redirect()->route('user.show')->with('thongbao', 'xóa user thành công!');
    }
}
