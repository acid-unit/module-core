<?php
/**
 * Copyright © Acid Unit (https://acid.7prism.com). All rights reserved.
 * See LICENSE file for license details.
 */

namespace AcidUnit\PageContentUpdate\Api;

interface PageContentUpdateInterface
{
    /**
     * Placeholder is rendered in the .phtml template which gets replaced by the content
     *
     * @return string
     */
    public function getPlaceholder(): string;

    /**
     * Get content
     *
     * @return string
     */
    public function getContent(): string;
}
