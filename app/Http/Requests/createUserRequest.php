<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createUserRequest extends FormRequest
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
            'nom' => 'required|min: 3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min: 5'
        ];
    }

     public function messages(){
        return[
            'nom.required' => 'Saisissez votre nom',
            'email.required' => 'Saisissez votre Adresse mail',
            'password.required' => 'Saisissez votre mot de passe',

            'nom.min' => 'Votre nom est trop court',
            'password.min' => 'Votre mot de passe est trop court',

            'email.unique' => 'Cette adresse mail a déjà été utilisée'
        ];
    }
}
