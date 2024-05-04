<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use OpenAdmin\Admin\Auth\Database\Administrator;

class CheckUserEmailExistingCreateRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $entryData = Administrator::where('email', $value)->first();
        if($entryData) {
            $fail('The :attribute already exists');
        }
    }
}
