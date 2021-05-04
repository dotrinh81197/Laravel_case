<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'product_name' => 'bail|required',
            'category' => 'bail|required',
            'title' => 'bail|required',
            'info' => 'bail|required',



        ];
    }
    public function messages()
    {
        $messages = [
            'product_name.required' => 'Tên sản phẩm không được trống',
            'category.required' => 'Thể loại  sản phẩm không được trống',
            'title.required' => 'Tiêu đề sản phẩm không được trống',
            'info.required' => 'Tên sản phẩm không được trống',
        ];
        return $messages;
    }
}
