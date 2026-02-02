<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlayerRequest extends FormRequest
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
            'name' => 'required|min:2|max:30',
            'age' => 'required|numeric|min:15|',
            'position' => 'required|min:3|max:3',
            'description' => 'min:20|max:200',
            
        ];
    }
    public function messages()
    {
        return[
            'name.required' =>'El nombre es obligatorio',
            'name.min' => 'El nombre tiene que tener mínimo 2 caracteres',
            'name.max' => 'El nombre tiene que tener máximo 30 caracteres',
            'age.required' => 'La edad es obligatoria',
            'age.numeric' => 'La edad tiene que ser un numero',
            'age.min' => 'La edad tiene que ser por lo menos de 15 años',
            'position.required' => 'La posicion es obligatoria',
            'position.min' => 'La posicion son 3 caracteres: POR|DEF|MED|DEL',
            'position.max0' => 'La posicion son 3 caracteres: POR|DEF|MED|DEL',
            'description.min' => 'La descripción tiene que tener mínimo 20 caracteres',
            'description.max' => 'La descripción tiene que tener como máximo 300 caracteres',
        ];
    }
}
