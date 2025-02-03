<?php
/**
 * Copyright © Acid Unit (https://acid.7prism.com). All rights reserved.
 * See LICENSE file for license details.
 */

/** @noinspection PhpUnused */
/** @noinspection PhpClassCanBeReadonlyInspection */
/** @noinspection PhpPluralMixedCanBeReplacedWithArrayInspection */

declare(strict_types=1);

namespace AcidUnit\Core\Model;

use AcidUnit\Core\Api\ConfigProviderInterface;

class GeneralConfigProvider implements ConfigProviderInterface
{
    /**
     * @param Config $config
     */
    public function __construct(
        private readonly Config $config
    ) {
    }

    /**
     * Get general config
     *
     * @return array<mixed>
     */
    public function getConfig(): array
    {
        return [
            'currency' => [
                'symbol' => $this->config->getCurrencySymbol(),
                'code' => $this->config->getBaseCurrencyCode()
            ]
        ];
    }
}
