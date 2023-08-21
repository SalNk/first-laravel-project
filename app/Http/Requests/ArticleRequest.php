<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'titre' => 'required|min: 3',
            'description' => 'required|min: 5'
        ];
    }
    public function messages(){
        return[
            'titre.required' => 'Saisissez le nom de l\'article',
            'description.required' => 'Veillez deécrire l\'article',

            'titre.min' => 'Le nom de l\'article doit avoir au minimum 3 caractères',
            'description.min' => 'Soyez plus descriptif'
        ];
    }
}
