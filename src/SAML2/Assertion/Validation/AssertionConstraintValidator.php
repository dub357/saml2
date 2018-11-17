<?php

namespace SAML2\Assertion\Validation;

use SAML2\Assertion;

declare(strict_types=1);

interface AssertionConstraintValidator
{
    public function validate(Assertion $assertion, Result $result);
}
