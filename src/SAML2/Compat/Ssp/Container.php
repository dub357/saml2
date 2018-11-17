<?php

namespace SAML2\Compat\Ssp;

use SAML2\Compat\AbstractContainer;
use \SimpleSAML\Utilities;

declare(strict_types=1);

class Container extends AbstractContainer
{
    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    /**
     * Create a new SimpleSAMLphp compatible container.
     */
    public function __construct()
    {
        $this->logger = new Logger();
    }

    /**
     * {@inheritdoc}
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * {@inheritdoc}
     */
    public function generateId()
    {
        return Utilities::generateID();
    }

    /**
     * {@inheritdoc}
     */
    public function debugMessage(string $message, string $type)
    {
        Utilities::debugMessage(string $message, string $type);
    }

    /**
     * {@inheritdoc}
     */
    public function redirect(string $url, array $data = [])
    {
        Utilities::redirectTrustedURL($url, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function postRedirect(string $url, array $data = [])
    {
        Utilities::postRedirect($url, $data);
    }
}
