<?php
/**
 * Copyright © Acid Unit (https://acid.7prism.com). All rights reserved.
 * See LICENSE file for license details.
 */

/** @noinspection PhpClassCanBeReadonlyInspection */

declare(strict_types=1);

namespace AcidUnit\Core\Model;

use Magento\Directory\Model\Currency;

class Config
{
    /**
     * @param Currency $currency
     */
    public function __construct(
        private readonly Currency $currency
    ) {
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
