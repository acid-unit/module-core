<?php
/**
 * Copyright © Acid Unit (https://acid.7prism.com). All rights reserved.
 * See LICENSE file for license details.
 */

/** @noinspection PhpClassCanBeReadonlyInspection */

declare(strict_types=1);

namespace AcidUnit\Core\ViewModel;

use AcidUnit\Core\Api\ConfigProviderInterface;
use Magento\Framework\Serialize\Serializer\Json;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class ConfigProvider implements ArgumentInterface
{
    /**
     * @param Json $serializer
     * @param ConfigProviderInterface $configProvider
     */
    public function __construct(
        private readonly Json                    $serializer,
        private readonly ConfigProviderInterface $configProvider
    ) {
    }

    /**
     * Get GTM config
     *
     * @return string
     */
    public function getSerializedCustomConfig(): string
    {
        return (string)$this->serializer->serialize($this->configProvider->getConfig());
    }
}
