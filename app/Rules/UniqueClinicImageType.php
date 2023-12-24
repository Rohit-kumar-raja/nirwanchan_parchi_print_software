<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\ClinicImages;

class UniqueClinicImageType implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //

        if ($value !== 'profile') {
            // If the value is not "profile", consider it as a valid input
            return true;
        }

        // Check if the "profile" value already exists in the database column
        return !ClinicImages::where('for', 'profile')->exists();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute is already present in the database.';
    }
}
