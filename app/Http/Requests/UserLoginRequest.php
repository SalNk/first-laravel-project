<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min: 5'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Saisissez votre Adresse mail',
            'password.required' => 'Saisissez votre mot de passe',
            'password.min' => 'Votre mot de passe est trop court'
        ];
    }
}