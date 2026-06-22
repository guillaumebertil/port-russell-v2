<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|min:8',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'     => 'Le nom est requis',
            'name.string'       => 'Le format est incorrect',
            'name.max'          => 'Le nom ne doit dépasser :max caractères',
            'email.required'    => 'L\'adresse email est requis',
            'email.email'       => 'Le format est incorrect',
            'email.unique'      => 'Cet adresse est déjà utilisée',
            'password.required' => 'Le mot de passe est requis',
            'password.min'      => 'Le mot de passe doit contenir au moins :min caractères',
        ];
    }
}
