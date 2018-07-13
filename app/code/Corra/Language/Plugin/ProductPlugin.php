<?php
/**
 * Copyright © CORRA. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Corra\Language\Plugin;

/**
 * Class ProductPlugin
 * @package Corra\Language\Plugin
 */
class ProductPlugin
{
    /**
     * @param \Magento\Catalog\Model\Product $subject
     * @param $name
     * @return string
     */
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $name)
    {
        return $name;
        return ' ' . $name;
    }
}