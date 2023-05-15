<?php

declare(strict_types=1);

namespace Salecto\PriceDecimal\Model\Plugin;

use Salecto\PriceDecimal\Model\ConfigInterface;
use Salecto\PriceDecimal\Model\PricePrecisionConfigTrait;

abstract class PriceFormatPluginAbstract
{

    use PricePrecisionConfigTrait;

    /** @var ConfigInterface  */
    protected $moduleConfig;

    /**
     * @param \Salecto\PriceDecimal\Model\ConfigInterface $moduleConfig
     */
    public function __construct(
        ConfigInterface $moduleConfig
    ) {
        $this->moduleConfig  = $moduleConfig;
    }
}
