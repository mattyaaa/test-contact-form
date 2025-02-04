<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'gender' => 'required|in:1,2,3',
            'email' => 'required|email|max:255',
            'phone1' => 'required|digits_between:1,5|regex:/^[0-9]+$/',
            'phone2' => 'required|digits_between:1,5|regex:/^[0-9]+$/',
            'phone3' => 'required|digits_between:1,5|regex:/^[0-9]+$/',
            'address' => 'required|string|max:255',
            'building' => 'nullable|string|max:255',
            'inquiry_type' => 'required|string|in:商品のお届けについて,商品の交換について,商品トラブル,ショップへのお問い合わせ,その他',
            'content' => 'required|string|max:120',
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => '姓を入力してください',
            'first_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'phone1.required' => '電話番号を入力してください',
            'phone1.digits_between' => '電話番号は5桁までの数字で入力してください',
            'phone1.regex' => '電話番号は半角数字で入力してください',
            'phone2.required' => '電話番号を入力してください',
            'phone2.digits_between' => '電話番号は5桁までの数字で入力してください',
            'phone2.regex' => '電話番号は半角数字で入力してください',
            'phone3.required' => '電話番号を入力してください',
            'phone3.digits_between' => '電話番号は5桁までの数字で入力してください',
            'phone3.regex' => '電話番号は半角数字で入力してください',
            'address.required' => '住所を入力してください',
            'inquiry_type.required' => 'お問い合わせの種類を選択してください',
            'content.required' => 'お問い合わせ内容を入力してください',
            'content.max' => 'お問合せ内容は120文字以内で入力してください',
        ];
    }
}
