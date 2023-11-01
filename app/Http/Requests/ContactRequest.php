<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactRequest extends FormRequest
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
            'phone' => ['required' , 'regex:/[0-9]{10}/|digits:10'],
            'email' => ['required' , 'email'],
            'location' => ['required' , 'string'],
            'lang' => ['required' , Rule::in(['en' , 'ar'])]
        ];
    }
}
