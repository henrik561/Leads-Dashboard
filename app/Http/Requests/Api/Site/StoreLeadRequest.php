<?php

namespace App\Http\Requests\Api\Site;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'site_id' => 'required|exists:sites,id',
            'email' => 'nullable|email|required_without:phone_number|max:255',
            'phone_number' => 'nullable|string|required_without:email|max:255',
            'conversion_time' => 'required|date',
            'gclid' => 'required|string|max:255',
        ];
    }
}
