<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|min:6',
            'product_category_id' => 'required',
            'brand_id' => 'required',
            'tag' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'qty' => 'required',
            'featured' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Trường :attribute bắt buộc phải nhập',
            'product_category_id.required' => 'Hãy chọn 1 trong các lựa chọn ở trường :attribute',
            'brand_id.required' => 'Hãy chọn 1 trong các lựa chọn ở trường :attribute',
            'tag.required' => 'Hãy chọn 1 trong các lựa chọn ở trường :attribute',
            'price.required' => 'Trường :attribute bắt buộc phải nhập',
            'discount.required' => 'Trường :attribute bắt buộc phải nhập',
            'qty.required' => 'Hãy nhập số lượng sản phẩm',
            'featured.required' => 'Hãy chọn thể loại sản phẩm',

        ];
    }
    public function attributes()
    {
        return [
            'name' => 'tên sản phẩm',
            'product_category_id' => 'danh mục sản phẩm',
            'brand_id' => 'thương hiệu',
            'tag' => 'loại sản phẩm',
            'price' => 'giá sản phẩm',
            'discount' => 'giá sale',
            'qty' => 'số lượng sản phẩm',
        ];
    }
}
