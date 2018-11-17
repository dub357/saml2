<?php

namespace SAML2\Configuration;

declare(strict_types=1);

/**
 * Interface \SAML2\Configuration\Queryable
 */
interface Queryable
{
    /**
     * Query for whether or not the configuration has a value for the key
     *
     * @param string $key
     * @return bool
     */
    public function has(string $key);

    /**
     * Query to get the value in the configuration for the given key. If no value is present the default value is
     * returned
     *
     * @param string     $key
     * @param null|mixed $default
     *
     * @return mixed
     */
    public function get(string $key, $default = null);
}
