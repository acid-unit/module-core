<?php
/**
 * Copyright © Acid Unit (https://acid.7prism.com). All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace AcidUnit\Core\Model;

use AcidUnit\Core\Api\PageContentUpdateInterface;

class PageContentUpdateProcessor
{
    /**
     * @var PageContentUpdateInterface[]
     */
    protected array $updateHandlers = [];

    /**
     * Apply page content update changes
     *
     * @param string $htmlOutput
     * @return string
     */
    public function applyPageContentUpdates(string $htmlOutput): string
    {
        foreach ($this->updateHandlers as $updateHandler) {
            $htmlOutput = str_replace(
                $updateHandler->getPlaceholder(),
                $updateHandler->getContent(),
                $htmlOutput
            );
        }

        return $htmlOutput;
    }

    /**
     * Add update handler
     *
     * @param PageContentUpdateInterface $contentUpdate
     * @noinspection PhpUnused
     */
    public function addUpdateHandler(PageContentUpdateInterface $contentUpdate): void
    {
        $this->updateHandlers[] = $contentUpdate;
    }
}
