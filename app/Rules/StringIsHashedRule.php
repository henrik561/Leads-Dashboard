<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class StringIsHashedRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (
            // check sha256
            ! preg_match('/^[a-f0-9]{64}$/i', $value) &&
            // check sha512
            ! preg_match('/^[a-f0-9]{128}$/i', $value) &&
            // check bcrypt
            ! preg_match('/^\$2[aby]\$\d{2}\$[\.\/0-9A-Za-z]{53}$/', $value)
        ) {
            $fail('The '.$attribute.' must be hashed in the following values: sha256, sha512 or bcrypt, if this is a hashed value please contact the administrator.');
        }
    }
}
