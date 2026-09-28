<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'    => ['required', 'string', 'max:255'],
            'email'   => ['required', 'string', 'email', 'max:255'],
            'tel'     => ['required', 'numeric', 'digits_between:10,11'],
            'content' => ['nullable', 'string'],
        ];
    }

    //messagesメソッドを追加して、バリデーションエラーメッセージをカスタマイズする
    public function messages(): array
    {
        return [
            'name.required' => '名前は必須です。',
            'name.string' => '名前は文字列である必要があります。',
            'name.max' => '名前は255文字以内である必要があります。',
            'email.required' => 'メールアドレスは必須です。',
            'email.string' => 'メールアドレスは文字列である必要があります。',
            'email.email' => '有効なメールアドレスを入力してください。',
            'email.max' => 'メールアドレスは255文字以内である必要があります。',
            'tel.required' => '電話番号は必須です。',
            'tel.numeric' => '電話番号は数字である必要があります。',
            'tel.digits_between' => '電話番号は10桁または11桁である必要があります。',
        ];
    }
}
