<?php declare(strict_types=1);

namespace ApiClients\Client\WeatherUnderground\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyResponse")
 */
abstract class Response extends AbstractResource implements ResponseInterface
{
    /**
     * @var string
     */
    protected $version;

    /**
     * @var string
     */
    protected $termsofService;

    /**
     * @var array
     */
    protected $features;

    /**
     * @return string
     */
    public function version() : string
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function termsofService() : string
    {
        return $this->termsofService;
    }

    /**
     * @return array
     */
    public function features() : array
    {
        return $this->features;
    }
}
