<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class AntiSpam implements Rule
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
        if ($value == "Mensch") {
            return true;
        }
        if ($value == "human") {
            return true;
        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Bitte füllen Sie das Anti-Spam-Feld aus, indem Sie "Mensch" in das Feld eintragen.';
    }
}
