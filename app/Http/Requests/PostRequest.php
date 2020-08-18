<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'user_id' => 'required|numeric',
            'opinion' => 'required',
            'image' => 'required|file|image',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'エラーが発生しました！',
            'opinion.required' => '意見を入力してください！',
            'image.required' => '画像を選択してください',
        ];
    }
}
