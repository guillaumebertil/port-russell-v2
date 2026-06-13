<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCatwayRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'catwayNumber' => 'required|integer|unique:catways,catwayNumber',
            'catwayType'   => 'required|in:short,long',
            'catwayState'  => 'required|string|min:8, max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'catwayNumber.required' => 'Le numéro du catway est requis.',
            'catwayNumber.integer'  => 'Veuillez entrer un numéro.',
            'catwayNumber.unique'   => 'Ce numéro est déjà pris.',
            'catwayType.required'   => 'Le type de catway est requis.',
            'catwayState.required'  => 'L\'état du catway est requis.',
            'catwayState.min'       => 'La saisie doit faire au moins :min caractères.',
            'catwayState.max'       => 'La saisie ne doit dépasser :max caractères.',
        ];
    }
}
