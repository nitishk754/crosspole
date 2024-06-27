<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckPhoneNumber implements Rule
{
    private $region;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($region)
    {
        $this->region = $region;
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
        if ($this->region == "india") {
            return 'regex:/^[6-9]\d{9}$/';
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The phone number is not valid';
    }
}
