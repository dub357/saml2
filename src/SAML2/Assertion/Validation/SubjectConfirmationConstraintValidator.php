<?php

namespace SAML2\Assertion\Validation;

use SAML2\XML\saml\SubjectConfirmation;

declare(strict_types=1);

interface SubjectConfirmationConstraintValidator
{
    public function validate(
        SubjectConfirmation $subjectConfirmation,
        Result $result
    );
}
