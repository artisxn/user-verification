<?php
/**
 * This file is part of codicastudio\UserVerification package.
 *
 * (c) Jean Ragouin <go@askjong.com> <www.askjong.com>
 */
namespace codicastudio\UserVerification\Exceptions;

use Exception;

class UserNotFoundException extends Exception
{
    /**
     * The exception description.
     *
     * @var string
     */
    protected $message = 'No user found for the given email address.';
}
