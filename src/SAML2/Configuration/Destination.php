<?php

namespace SAML2\Configuration;

use SAML2\Exception\InvalidArgumentException;

declare(strict_types=1);

/**
 * Value Object representing the current destination
 */
class Destination
{
    /**
     * @var string
     */
    private $destination;

    /**
     * @param string $destination
     */
    public function __construct(string $destination)
    {
        $this->destination = $destination;
    }

    /**
     * @param \SAML2\Configuration\Destination $otherDestination
     *
     * @return bool
     */
    public function equals(Destination $otherDestination)
    {
        return $this->destination === $otherDestination->destination;
    }

    public function __toString()
    {
        return $this->destination;
    }
}
