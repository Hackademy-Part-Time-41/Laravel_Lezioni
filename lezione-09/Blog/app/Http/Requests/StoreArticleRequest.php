<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // se authorize non restituisce true non prosegue nella logica
        
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
                'title' => ['required', 'max:50'],
                'body' => 'required|max:500',
                'author' => 'required|max:30',
                'image'=>'mimes:jpg,jpeg'
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'Il titolo deve essere inserito',
            'title.max'=>'Il titolo può avere al massimo :max caratteri',
            'body.max'=>'Il corpo può essere al massimo di :max caratteri',
            'body.required'=>'Devi inserire il corpo del tuo articolo'
        ];
    }

}
