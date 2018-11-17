<?php

namespace SAML2\Certificate\Exception;

use SAML2\Exception\Throwable;

declare(strict_types=1);

/**
 * Named exception. Indicates that although required, no keys could be loaded from the configuration
 */
class NoKeysFoundException extends \DomainException implements Throwable
{
}
