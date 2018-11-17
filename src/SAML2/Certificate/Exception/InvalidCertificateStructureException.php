<?php

namespace SAML2\Certificate\Exception;

use SAML2\Exception\Throwable;

declare(strict_types=1);

/**
 * Named Exception for what the name describes. This should not occur, as it has to be
 * caught on the configuration side.
 */
class InvalidCertificateStructureException extends \DomainException implements
    Throwable
{
}
