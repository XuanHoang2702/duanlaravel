<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'name' => 'required|min:6|max:30',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6|max:16',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:10000',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Trường :attribute bắt buộc phải nhập',
            'name.min:6' => 'Bạn phải nhập tối thiểu 6 kí tự',
            'name.max:30' => 'Bạn chỉ được nhập tối đa 30 kí tự',
            'email.required' => 'Bạn không được để trống email',
            'password.required' => 'Trường :attribute bắt buộc phải nhập',
            'password.confirmed' => 'Xác nhận mật khẩu không khớp',
            'avatar.required' => 'Hãy chọn ảnh',
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'tên sản phẩm',
            'email' => 'email',
            'password' => 'mật khẩu',
            'avatar' => 'ảnh đại diện',
        ];
    }
}
