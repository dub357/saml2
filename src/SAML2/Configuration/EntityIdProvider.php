<?php

namespace SAML2\Configuration;

declare(strict_types=1);

/**
 * Interface \SAML2\Configuration\EntityIdProvider
 */
interface EntityIdProvider
{
    /**
     * @return null|string
     */
    public function getEntityId();
}
