<?php

namespace SAML2\Utilities;

declare(strict_types=1);

class Temporal
{
    /**
     * Getter for getting the current timestamp. Use this rather than time() calls directly as this can be mocked for
     * testing purposes.
     *
     * @return int
     */
    public static function getTime()
    {
        return time();
    }
}
