<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Testusername implements Rule
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
        $value = strtolower($value);
        $invalidWords = ['cat', 'dog', 'horse'];
        $matches = array();
        foreach($invalidWords as $k => $v) {
            if(preg_match("/\b$value\b/i", $v)) {
                $matches[$k] = $v;
            }
        }

        if (count($matches) > 0) {
            return false;
        }

        return true;

        // TODO: Allow these words as execpotions to the main invalid words
        // Catfish
        // Scatter
        // Bulldog
        // Seahorse
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'This username contains invalid strings';
    }
}
