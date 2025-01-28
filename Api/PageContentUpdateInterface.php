<?php
/**
 * Copyright © Acid Unit (https://acid.7prism.com). All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace AcidUnit\Core\Api;

/**
 * Interface for page content handlers
 *
 * @api
 */
interface PageContentUpdateInterface
{
    /**
     * Placeholder is rendered in the .phtml template in the middle of page render
     *
     * @return string
     */
    public function getPlaceholder(): string;

    /**
     * Content replaces the placeholder after full page is rendered
     *
     * @return string
     */
    public function getContent(): string;
}
