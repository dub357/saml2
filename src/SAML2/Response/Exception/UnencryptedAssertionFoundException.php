<?php

namespace SAML2\Response\Exception;

use SAML2\Exception\Throwable;

declare(strict_types=1);

class UnencryptedAssertionFoundException extends \RuntimeException implements
    Throwable
{
}
