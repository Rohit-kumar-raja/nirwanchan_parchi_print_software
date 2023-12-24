<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\MdicalDepartmentImages;
use Illuminate\Support\Facades\DB;


class UniqueDepartmentImage implements Rule
{
    protected $MdicalDepartmentImages;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($MdicalDepartmentImages)
    {
        //
        $this->MdicalDepartmentImages = $MdicalDepartmentImages;
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
        //return !MdicalDepartmentImages::where('for', 'profile')->exists();
        return !DB::table('mdical_department_images')
            ->where('for', 'profile')
            ->where('medical_department_id', $this->MdicalDepartmentImages)
            ->whereNotNull('image_name')
            ->exists();
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
