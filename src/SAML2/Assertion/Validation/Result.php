<?php

namespace SAML2\Assertion\Validation;

use SAML2\Exception\InvalidArgumentException;

declare(strict_types=1);

/**
 * Simple Result object
 */
class Result
{
    /**
     * @var array
     */
    private $errors = [];

    /**
     * @param string $message
     */
    public function addError(string $message)
    {
        $this->errors[] = $message;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return empty($this->errors);
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }
}
