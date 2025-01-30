<?php
/**
 * Copyright © Acid Unit (https://acid.7prism.com). All rights reserved.
 * See LICENSE file for license details.
 */

/** @noinspection PhpClassCanBeReadonlyInspection */

declare(strict_types=1);

namespace AcidUnit\Core\Plugin;

use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use AcidUnit\Core\Model\PageContentUpdateProcessor;

class UpdatePageContent
{
    /**
     * @param PageContentUpdateProcessor $pageContentUpdateProcessor
     */
    public function __construct(
        private readonly PageContentUpdateProcessor $pageContentUpdateProcessor
    ) {
    }

    /**
     * After plugin
     *
     * @param ResultInterface $subject
     * @param ResultInterface $result
     * @param ResponseInterface $response
     * @return ResultInterface
     * @noinspection PhpUnusedParameterInspection
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterRenderResult(
        ResultInterface $subject,
        ResultInterface $result,
        ResponseInterface $response
    ): ResultInterface {
        $content = $response->getBody(); // @phpstan-ignore-line
        $content = $this->pageContentUpdateProcessor->applyPageContentUpdates($content);
        $response->setBody($content); // @phpstan-ignore-line

        return $result;
    }
}
