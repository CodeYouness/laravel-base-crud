<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnimalRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'common_name' => 'required|unique:animals|max:100|min:3',
            'scientific_name' => 'required|unique:animals|max:100|min:3',
            'habitat' => 'required|max:100|min:3',
            'class' => 'required|max:100|min:3',
            'family' => 'required|max:100|min:3',
            'average_life' => 'required|integer|min:1|max:127',
            'average_weight' => 'required|integer|min:1|max:32767',
            'image' => 'required|url',

        ];
    }

    public function messages()
    {
        return [
            'common_name.min' => 'BRO MA SONO POCHE LETTERE COME NOME ECCHECCAZZO'
        ];
    }
}