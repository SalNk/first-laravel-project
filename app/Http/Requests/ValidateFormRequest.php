<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateFormRequest extends FormRequest
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
            'nom' => 'required|min:3',
            'email' => 'required|email',
        ];
    }

    public function messages(){
        return[
            'nom.required' => 'Veillez saisir votre nom',
            'nom.min' => 'Veillez saisir un nom avec au moins 3 caractères',
            'email.required' => 'Veillez saisir saisir votre mail',
            'email.email' => 'Le mail saisi n\'est pas correct'
        ];
    }
}
