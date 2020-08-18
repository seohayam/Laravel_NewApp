<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'post_id' => 'required|numeric',
            'user_id' => 'required|numeric',
            'comment' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'エラーが発生しました！',
            'post_id.required' => 'エラーが発生しました！',
            'comment.required' => '質問を入力してください！',
        ];
    }

}
