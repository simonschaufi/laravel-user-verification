<?php

namespace Jrean\UserVerification;

class VerificationException extends \Exception
{
    /**
     * The exception description.
     *
     * @var string
     */
    protected $message = 'The model instance provided is not compliant with this package.';
}
