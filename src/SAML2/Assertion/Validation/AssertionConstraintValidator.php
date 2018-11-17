<?php

declare(strict_types=1);

namespace SAML2\Assertion\Validation;

use SAML2\Assertion;

interface AssertionConstraintValidator
{
    public function validate(Assertion $assertion, Result $result);
}
