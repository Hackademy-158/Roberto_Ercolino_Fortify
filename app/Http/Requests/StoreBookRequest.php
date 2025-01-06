<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'title' => 'required|min:5|max:100',
            'author' =>'required',
            'plot' =>'required',
            'cover' =>'required|image',
            'price'=>'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'il campo e richiesto',
            'min' => 'il campo :attribute e troppo corto almeno :min caratteri',
            'max' => 'il campo :attribute deve essere di massimo :max caratteri',
            'image' => 'il file deve essere un immagine',
            'numeric' => 'il campo deve essere un numero'
        ];
    }
}
