<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public $data = [];
    public function showUser()
    {
        $users = User::paginate(6);
        return view('dashboard.user.show', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);;
    }
    public function addUser()
    {
        $data = $this->data;
        $data['errorMessage'] = 'Vui lòng kiểm tra lại dữ liệu!';
        $categories = User::all();
        return view('dashboard.user.add', compact('data'));
    }
    public function storeUser(Request $request)
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
    public function deleteProduct(Request $request, $id)
    {
        $user_delete = User::find($id);
        $user_delete->delete();
        return redirect()->route('user.show')->with('thongbao', 'xóa user thành công!');
    }
}
