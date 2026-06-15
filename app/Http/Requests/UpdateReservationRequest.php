<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateReservationRequest extends FormRequest
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
            'catwayNumber'  => 'required|integer|exists:catways,catwayNumber',
            'clientName'    => 'required|string|min:3|max:255',
            'boatName'      => 'required|string|min:3|max:255',
            'startDate'     => 'required|date',
            'endDate'       => 'required|date|after:startDate'
        ];
    }

    public function messages(): array
    {
        return [
            'catwayNumber.required' => 'Le numéro du catway est requis',
            'catwayNumber.integer'  => 'Format non valide',
            'catwayNumber.exists'   => 'Ce numéro de catway n\'existe pas',
            'clientName.required'   => 'Le nom du client est requis',
            'clientName.string'     => 'Format non valide',
            'clientName.min'        => 'Le nom doit faire au moins :min caractères',
            'clientName.max'        => 'Le nom ne doit pas dépasser :max caractères',
            'boatName.required'     => 'Le nom du bateau est requis',
            'boatName.string'       => 'Format non valide',
            'boatName.min'          => 'Le nom doit faire au moins :min caractères',
            'boatName.max'          => 'Le nom ne doit pas dépasser :max caractères',
            'startDate.required'    => 'La date de début est requis',
            'startDate.date'        => 'Format non valide',
            'endDate.required'      => 'La date de fin est requis',
            'endDate.date'          => 'Format non valide',
            'endDate.after'         => 'La date de fin doit être postérieure à la date de début',
        ];
    }
}
