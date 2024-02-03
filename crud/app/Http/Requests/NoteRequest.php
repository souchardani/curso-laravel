<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class NoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //con true decimos que cualquiera puede realizar este tipo de peticiones al sistema
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
            'title'=>'required|max:255|min:3',
            'description'=>'required|max:255|min:3',
        ];
    }
}
