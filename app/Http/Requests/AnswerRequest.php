<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnswerRequest extends FormRequest
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
            'answer' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'エラーが発生しました！',
            'post_id.required' => 'エラーが発生しました！',
            'answer.required' => '回答入力してください！',
        ];
    }
}
