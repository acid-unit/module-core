<?php
/**
 * Copyright © Acid Unit (https://acid.7prism.com). All rights reserved.
 * See LICENSE file for license details.
 */

/** @noinspection PhpClassCanBeReadonlyInspection */

declare(strict_types=1);

namespace AcidUnit\Core\Model;

use Magento\Directory\Model\Currency;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Store\Model\StoreManagerInterface;
use Psr\Log\LoggerInterface;

class Config
{
    /**
     * @param Currency $currency
     * @param StoreManagerInterface $storeManager
     * @param LoggerInterface $logger
     */
    public function __construct(
        private readonly Currency              $currency,
        private readonly StoreManagerInterface $storeManager,
        private readonly LoggerInterface       $logger
    ) {
    }

    /**
     * Get currency symbol
     *
     * @return string
     * @noinspection PhpCastIsUnnecessaryInspection
     */
    public function getCurrencySymbol(): string
    {
        $symbol = '';

        try {
            $store = $this->storeManager->getStore();
            $symbol = (string)$store->getBaseCurrency()->getCurrencySymbol(); // @phpstan-ignore-line
        } catch (NoSuchEntityException $e) {
            $this->logger->critical($e->getMessage());
        }

        return $symbol;
    }

    /**
     * Get currency code
     *
     * @return string
     */
    public function getBaseCurrencyCode(): string
    {
        $code = '';

        try {
            $store = $this->storeManager->getStore();
            $code = (string)$store->getBaseCurrencyCode(); // @phpstan-ignore-line
        } catch (NoSuchEntityException $e) {
            $this->logger->critical($e->getMessage());
        }

        return $code;
    }
}
