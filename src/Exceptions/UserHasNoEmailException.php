<?php
/**
 * This file is part of codicastudio\UserVerification package.
 *
 * (c) Jean Ragouin <go@askjong.com> <www.askjong.com>
 */
namespace codicastudio\UserVerification\Exceptions;

use Exception;

class UserHasNoEmailException extends Exception
{
    /**
     * The exception description.
     *
     * @var string
     */
    protected $message = 'The given user instance has an empty or null email field.';
}
