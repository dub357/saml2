<?php

namespace SAML2\Assertion\Transformer;

use SAML2\Assertion;

declare(strict_types=1);

interface Transformer
{
    /**
     * @param \SAML2\Assertion $assertion
     *
     * @return \SAML2\Assertion
     */
    public function transform(Assertion $assertion);
}
