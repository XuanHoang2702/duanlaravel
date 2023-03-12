<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Blog;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('front.auth.register');
    }
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $validator  = Validator::make($request->all(), [
                'name' => 'required|min:6|max:30',
                'email' => 'required|email',
                'password' => 'required|confirmed|min:6|max:16',
                'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:10000',
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
        }
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension(); // Lấy phần mở rộng của tập tin
            $destination_Path = public_path('front/img/avatar');
            $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif']; // Các phần mở rộng cho phép
            if (!in_array(strtolower($extension), $allowed_extensions)) {
                // Phần mở rộng không hợp lệ, chuyển đổi thành định dạng mong muốn
                $extension = 'jpg';
            }
            $file_Name = time() . "." . $extension; // Thêm phần mở rộng vào tên tập tin
            $file->move($destination_Path, $file_Name);
        } else {
            $file_Name = 'noname.jpg';
        }
        //
        $user  = DB::table('users')->Where('email', $request->email)->first();
        if (!$user) {
            $newUser = new User();
            $newUser->name = $request->name;
            $newUser->email = $request->email;
            $newUser->avatar = $file_Name;
            $newUser->password = $request->password;
            $newUser->level = $request->level;
            $newUser->description = $request->description;
            $newUser->save();
            return redirect()->route('register.show')->with('message', 'Bạn đã tạo tài
            khoản thành công , mời bạn đăng nhập');
        } else {
            return  redirect()->route('register.show')->with('message', 'Tài khoản đã
            tồn tại, mời bạn đăng nhập');
        }
    }
    public function showLogin()
    {
        return view('front.auth.login');
    }
    public function login(Request $request)
    {
        $product_news = Product::paginate(4);
        $menProducts = Product::Where('featured', true)->Where('product_category_id', 1)->get();
        $womenProducts = Product::Where('featured', true)->Where('product_category_id', 2)->get();
        $blog_pages = Blog::paginate(4);
        $blogs = Blog::orderBy('id', 'desc')->limit(3)->get();
        $validator  = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $remember = $request->remember;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request)) {
            if (Auth::user()->level == 1) {
                session()->put('menProducts', $menProducts);
                session()->put('womenProducts', $womenProducts);
                session()->put('product_news', $product_news);
                session()->put('blogs', $blogs);
                return redirect()->route('home', ['menProducts' => $menProducts, 'womenProducts' => $womenProducts, 'product_news' => $product_news, 'blogs' => $blogs])->with('i', (request()->input('page', 1) - 1) * 5);
            } else {
                return view('dashboard.admin');
            }
        }
    }
}
