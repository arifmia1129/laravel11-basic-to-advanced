<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
  
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:20', 'min:2'],
            'email' => ['required', 'email']
        ];
    }

    public function messages():array {
        return [
            'name.required'=> 'Name is must be required',
            'name.max'=> 'Name must be under 20 characters',
            'name.min'=> 'Name must be at least 2 character',
            'email.required'=> 'Email is must be required',
            'email.email'=> 'Email must be a valid email format'
        ];
    }
}
