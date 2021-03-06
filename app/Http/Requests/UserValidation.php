<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserValidation extends FormRequest
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
            'name' => [
                'required', 'string', 'max:255', 'min:3'
            ],
            'username' => [
                'required', 'string', 'max:30', Rule::unique('users')->ignore($this->user), 'alpha_dash', 'min:3'
            ],
            'email' => [
                'required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($this->user)
            ],
            // 'password' => ['required', 'string', 'min:8', 'confirmed', 'max:255'],
            'description' => [
                'string', 'nullable', 'max:1000', 'min:10'
            ],
            'tweets' => 'exists:tweets,id',
            'likes' => 'exists:likes,id',
            'follows' => 'exists:users,id'
        ];
    }
}
