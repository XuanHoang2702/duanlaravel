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
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Trường :attribute bắt buộc phải nhập.',
            'name.min' => 'Tên phải chứa ít nhất :min kí tự.',
            'name.max' => 'Tên chỉ được chứa tối đa :max kí tự.',
            'email.required' => 'Trường :attribute bắt buộc phải nhập.',
            'email.email' => 'Email không đúng định dạng.',
            'password.required' => 'Trường :attribute bắt buộc phải nhập.',
            'password.confirmed' => 'Xác nhận mật khẩu không khớp.',
            'password.min' => 'Mật khẩu phải chứa ít nhất :min kí tự.',
            'password.max' => 'Mật khẩu chỉ được chứa tối đa :max kí tự.',
            'avatar.required' => 'Bạn phải chọn một tập tin ảnh.',
            'avatar.image' => 'Tập tin tải lên phải là hình ảnh.',
            'avatar.mimes' => 'Tập tin tải lên phải có định dạng jpeg, png, jpg hoặc gif.',
            'avatar.max' => 'Kích thước tập tin tải lên không được vượt quá :max kilobytes.',
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
