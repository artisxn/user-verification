<?php
/**
 * This file is part of codicastudio\UserVerification package.
 *
 * (c) Jean Ragouin <go@askjong.com> <www.askjong.com>
 */
namespace codicastudio\UserVerification\Exceptions;

use Exception;

class UserNotVerifiedException extends Exception
{
    /**
     * The exception description.
     *
     * @var string
     */
    protected $message = 'This user is not verified.';
}
