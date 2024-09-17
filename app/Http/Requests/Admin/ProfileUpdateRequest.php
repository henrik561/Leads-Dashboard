<?php

namespace App\Http\Requests\Admin;

use App\Enums\UserRoles;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'password' => ['nullable', 'string', 'min:8', 'confirmed', 'max:255', Password::defaults()],
            'roles' => ['array', 'min:1'],
            'roles.*' => ['required', 'string', Rule::in(array_column(UserRoles::cases(), 'value'))],
            'sites' => ['array', 'min:1'],
            'sites.*.api_key' => ['required', 'string', 'max:255'],
            'sites.*.api_secret' => ['required', 'string', 'max:255'],
            'sites.*.conversion_action_id' => ['nullable', 'string', 'max:255'],
            'sites.*.customer_id' => ['nullable', 'string', 'max:255'],
            'sites.*.domain' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Het naam veld is verplicht.',
            'name.string' => 'Het naam veld moet een string zijn.',
            'name.max' => 'Het naam veld mag niet meer dan 255 tekens bevatten.',
            'email.required' => 'Het e-mail veld is verplicht.',
            'email.string' => 'Het e-mail veld moet een string zijn.',
            'email.lowercase' => 'Het e-mail veld moet in kleine letters zijn.',
            'email.email' => 'Het e-mail veld moet een geldig e-mailadres zijn.',
            'email.max' => 'Het e-mail veld mag niet meer dan 255 tekens bevatten.',
            'email.unique' => 'Het e-mail veld moet uniek zijn.',
            'password.string' => 'Het wachtwoord veld moet een string zijn.',
            'password.min' => 'Het wachtwoord veld moet minimaal 8 tekens bevatten.',
            'password.confirmed' => 'De wachtwoorden komen niet overeen.',
            'password.max' => 'Het wachtwoord veld mag niet meer dan 255 tekens bevatten.',
            'roles.array' => 'Het rollen veld moet een array zijn.',
            'roles.min' => 'Er moet minimaal 1 rol worden toegevoegd.',
            'roles.*.required' => 'Het rollen veld is verplicht.',
            'sites.array' => 'Het sites veld moet een array zijn.',
            'sites.min' => 'Er moet minimaal 1 site worden toegevoegd.',
            'sites.*.apiKey.required' => 'Het apiKey veld van sites is verplicht.',
            'sites.*.apiKey.string' => 'Het apiKey veld van sites moet een string zijn.',
            'sites.*.apiKey.max' => 'Het apiKey veld van sites mag niet meer dan 255 tekens bevatten.',
            'sites.*.apiSecret.required' => 'Het apiSecret veld van sites is verplicht.',
            'sites.*.apiSecret.string' => 'Het apiSecret veld van sites moet een string zijn.',
            'sites.*.apiSecret.max' => 'Het apiSecret veld van sites mag niet meer dan 255 tekens bevatten.',
            'sites.*.domain.required' => 'Het domein veld van sites is verplicht.',
            'sites.*.domain.string' => 'Het domein veld van sites moet een string zijn.',
            'sites.*.domain.max' => 'Het domein veld van sites mag niet meer dan 255 tekens bevatten.',
            'sites.*.domain.unique' => 'Het domein veld van sites moet uniek zijn.',
            'sites.*.conversionActionId.string' => 'Het conversionActionId veld van sites moet een string zijn.',
            'sites.*.conversionActionId.max' => 'Het conversionActionId veld van sites mag niet meer dan 255 tekens bevatten.',
            'sites.*.customerId.string' => 'Het customerId veld van sites moet een string zijn.',
            'sites.*.customerId.max' => 'Het customerId veld van sites mag niet meer dan 255 tekens bevatten.',
        ];
    }
}
