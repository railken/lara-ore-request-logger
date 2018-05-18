<?php

namespace Railken\LaraOre\RequestLogger\RequestLog\Attributes\CreatedAt\Exceptions;

use Railken\LaraOre\RequestLogger\RequestLog\Exceptions\RequestLogAttributeException;

class RequestLogCreatedAtNotValidException extends RequestLogAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'created_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'REQUEST_LOG_CREATED_AT_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}