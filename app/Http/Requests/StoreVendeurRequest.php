<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVendeurRequest extends FormRequest
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
            'nom' =>'required|string',
            'prenom' => 'required|string',
            'telephone' => 'required|string',
            'email' => 'required|unique:clients,email',
            'adresse' => 'required|string'
        ];
    }
    public function messages()
    {
        return[
            'nom.required'=> 'Le nom du vendeur est requis',
            'prenom.required'=> 'Le prenom du vendeur est requis',
            'telephone.required'=> 'Le numéro du vendeur est requis',
            'email.required'=> 'L\'email du vendeur est requis',
            'email.unique'=> 'Cet email existe déja.',
            'adresse.required'=> 'L\'adresse du vendeur est requise',

        ];
    }
}
