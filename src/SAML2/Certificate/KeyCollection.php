<?php

declare(strict_types=1);

namespace SAML2\Certificate;

use SAML2\Exception\InvalidArgumentException;
use SAML2\Utilities\ArrayCollection;

/**
 * Simple collection object for transporting keys
 */
class KeyCollection extends ArrayCollection
{
    /**
     * Add a key to the collection
     *
     * @param \SAML2\Certificate\Key $key
     */
    public function add($key)
    {
        parent::add($key);
    }
}
