<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TweetValidation extends FormRequest
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
            'body' => 'required|max:255',
            'user' => 'exists:users,id',
            'likes' => 'exists:likes,id',
            'dislikes' => 'exists:likes,id',
        ];
    }
}
