<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeadRequest extends FormRequest
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
            'gclid' => 'required|string',
            'email' => 'required_without:phone_number|email',
            'phone_number' => 'required_without:email|string',
            'conversion_time' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'gclid.required' => 'The gclid field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email field must be a valid email address.',
            'phone_number.required' => 'The phone number field is required.',
            'conversion_time.required' => 'The conversion time field is required.',
        ];
    }
}
