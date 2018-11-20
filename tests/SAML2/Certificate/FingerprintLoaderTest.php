<?php

namespace SAML2\Certificate;

use SAML2\Certificate\Stub\ImplementsToString;
use SAML2\Configuration\ArrayAdapter;

class FingerprintLoaderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \SAML2\Certificate\FingerprintLoader
     */
    private $fingerprintLoader;

    /**
     * @var \Mockery\MockInterface
     */
    private $configurationMock;

    public function setUp()
    {
        $this->fingerprintLoader = new FingerprintLoader();
        $this->configurationMock = \Mockery::mock('SAML2\Configuration\CertificateProvider');
    }

    /**
     * @group certificate
     * @test
     *
     * @dataProvider invalidConfigurationProvider
     * @expectedException \SAML2\Exception\InvalidArgumentException
     */
    public function it_does_not_accept_invalid_configuration_values($configurationValue)
    {
        $this->configurationMock
            ->shouldReceive('getCertificateFingerprints')
            ->once()
            ->andReturn($configurationValue);

        $this->fingerprintLoader->loadFingerprints($this->configurationMock);
    }

    /**
     * @group        certificate
     * @test
     *
     * @dataProvider invalidConfigurationProvider
     * @expectedException \SAML2\Exception\InvalidArgumentException
     */
    public function it_correctly_parses_arrays_and_traversables($configurationValue)
    {
        $this->configurationMock
            ->shouldReceive('getCertificateFingerprints')
            ->once()
            ->andReturn($configurationValue);

        $result = $this->fingerprintLoader->loadFingerprints($this->configurationMock);
        $this->assertInstanceOf('\SAML2\Certificate\FingerprintCollection', $result);
        $this->assertCount(count($configurationValue), $result);
    }

    public function invalidConfigurationProvider()
    {
        return [
            'string'                             => [''],
            'null value'                         => [null],
            'non traversable'                    => [new \StdClass()],
            'traversable with non string values' => [new ArrayAdapter(['a', 1, null])],
            'array with non string value'        => [['b', true, false]]
        ];
    }

    public function validConfigurationProvider()
    {
        return [
            'array of strings'  => [
                ['a', 'b', 'c']
            ],
            'mixed array'       => [
                [
                    'a',
                    new ImplementsToString('b'),
                    'c',
                ]
            ],
            'mixed traversable' => [
                new ArrayAdapter([
                    'a',
                    'b',
                    new ImplementsToString('c')
                ])
            ],
        ];
    }
}
