<?php

namespace App\Http\Requests;

use App\Enums\LeadStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateLeadRequest extends FormRequest
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
            'status' => [
                'nullable',
                'string',
                Rule::in(array_column(LeadStatus::cases(), 'value')),
                function ($attribute, $value, $fail) {
                    $conversionValue = $this->input('conversion_value');

                    if (isset($conversionValue)) {
                        if ($conversionValue == 0 && $value !== LeadStatus::UNQUALIFIED->value) {
                            $fail('When conversion value is 0, status must be "Unqualified".');
                        } elseif ($conversionValue > 0 && ! in_array($value, [LeadStatus::QUALIFIED->value, LeadStatus::CONVERTED->value])) {
                            $fail('When conversion value is greater than 0, status must be "Qualified" or "Converted".');
                        }
                    }
                },
            ],
            'conversion_value' => [
                'required_if:status,'.LeadStatus::QUALIFIED->value,
                'required_if:status,'.LeadStatus::CONVERTED->value,
                'required_without:status',
                'numeric',
                'min:0',
                function ($attribute, $value, $fail) {
                    $status = $this->input('status');

                    if ($value == 0 && $status !== LeadStatus::UNQUALIFIED->value) {
                        $fail('When conversion value is 0, status must be "Unqualified".');
                    } elseif ($value > 0 && ! in_array($status, [LeadStatus::QUALIFIED->value, LeadStatus::CONVERTED->value])) {
                        $fail('When conversion value is greater than 0, status must be "Qualified" or "Converted".');
                    }
                },
            ],
        ];
    }

    public function messages()
    {
        return [
            'conversion_value.required' => 'De conversiewaarde is verplicht.',
            'conversion_value.required_if' => 'De conversiewaarde is verplicht wanneer de status ":value" is.',
            'conversion_value.required_without' => 'De conversiewaarde is verplicht wanneer er geen status is opgegeven.',
            'conversion_value.numeric' => 'De conversiewaarde moet een getal zijn.',
            'conversion_value.min' => 'De conversiewaarde moet minimaal 0 zijn.',
            'status.required' => 'De status is verplicht.',
            'status.string' => 'De status moet een string zijn.',
            'status.in' => 'De status moet een van de volgende waarden hebben: '.implode(', ', array_column(LeadStatus::cases(), 'value')),
        ];
    }
}
