<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'user_email' => 'required|max:255',
            'user_password' => 'required|min:6'
        ];
    }
    public function messages()
    {
        return [
            'user_email.required' => 'Email là bắt buộc!',
            'user_password.required' => 'Mật khẩu là bắt buộc!',
            'user_password.min' => 'Mật khẩu có ít nhất 6 kí tự',
        ];
    }
}
