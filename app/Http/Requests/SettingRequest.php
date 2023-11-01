<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SettingRequest extends FormRequest
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
            'header_image' => ['required' , 'image'],
            'big_header' => ['required' , 'string'],
            'small_header' => ['required' , 'string'],
            'about' => ['required' , 'string'],
            'lang' => ['required'  , Rule::in(['en'  , 'ar'])],
        ];
    }
}
