<?php namespace RainLab\User\Helpers;

use RainLab\User\Classes\Validation\PasswordRule;

/**
 * User defines some helpers for the user module
 *
 * @package october\user
 * @author Alexey Bobkov, Samuel Georges
 */
class User
{
    /**
     * username returns the login attribute to use for logging in.
     */
    public static function username()
    {
        // @todo config
        return 'email';
    }

    /**
     * passwordRules returns rules for the password field
     */
    public static function passwordRules()
    {
        // @todo config
        return ['required', 'string', new PasswordRule, 'confirmed'];
    }
}
