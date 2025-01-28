<?php
/**
 * Copyright © Acid Unit (https://acid.7prism.com). All rights reserved.
 * See LICENSE file for license details.
 */

/** @noinspection PhpPluralMixedCanBeReplacedWithArrayInspection */

declare(strict_types=1);

namespace AcidUnit\Core\Api;

/**
 * Exact copy of \Magento\Checkout\Model\ConfigProviderInterface implementation but for Acid Unit modules
 *
 * @api
 */
interface ConfigProviderInterface
{
    /**
     * Get Config
     *
     * @return array<mixed>
     */
    public function getConfig(): array;
}
