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
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($this->user), 'alpha_dash', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($this->user)],
            // 'password' => ['required', 'string', 'min:8', 'confirmed', 'max:255'],
            'description' => ['string', 'nullable', 'max:1000', 'min:10'],
            // 'avatar' => 'image|mimes:jpeg,jpg,png,gif,svg|max:1024|dimensions:ratio=1/1',
            // 'banner' => 'image|mimes:jpeg,jpg,png,gif,svg|max:1024|
            // dimensions:min_width=600,min_height=150,max_width=900,max_height=350',
        ];
    }
}
