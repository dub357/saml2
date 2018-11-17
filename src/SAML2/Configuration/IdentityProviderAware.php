<?php

namespace SAML2\Configuration;

declare(strict_types=1);

/**
 * Interface for triggering setter injection
 */
interface IdentityProviderAware
{
    public function setIdentityProvider(IdentityProvider $identityProvider);
}
