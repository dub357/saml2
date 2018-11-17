<?php

namespace SAML2\Certificate;

use SAML2\Exception\InvalidArgumentException;
use SAML2\Utilities\ArrayCollection;

declare(strict_types=1);

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
    public function add(Key $key)
    {
        parent::add($key);
    }
}
