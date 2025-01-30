<?php
/**
 * Copyright © Acid Unit (https://acid.7prism.com). All rights reserved.
 * See LICENSE file for license details.
 */

/** @noinspection PhpPluralMixedCanBeReplacedWithArrayInspection */

declare(strict_types=1);

namespace AcidUnit\Core\Model;

use Magento\Directory\Model\Currency;
use Magento\Framework\DataObject;

class Config extends DataObject
{
    /**
     * @param Currency $currency
     * @param array<mixed> $data
     */
    public function __construct(
        private readonly Currency $currency,
        array                     $data = []
    ) {
        parent::__construct($data);
    }

    /**
     * Get store currency symbol
     *
     * @return string
     */
    public function getCurrencySymbol(): string
    {
        return $this->currency->getCurrencySymbol();
    }
}
