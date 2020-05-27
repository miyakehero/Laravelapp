<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
{
    public function authorize()
    {
        if ($this->path() === 'register')
        {
            return true;
        } else {
            return false;
        }
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'email',
            'pwd' => 'required|min:7|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力して下さい。',
            'email.email' => 'メールアドレスが必要です。',
            'pwd.required' => 'パスワードを入力して下さい。',
            'pwd.min' => 'パスワードは７文字以上',
            'pwd.confirmed' => 'パスワードが一致しません。',
        ];
    }
}
