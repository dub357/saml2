<?php

namespace SAML2\Response\Validation;

use SAML2\Response;

declare(strict_types=1);

interface ConstraintValidator
{
    public function validate(Response $response, Result $result);
}
