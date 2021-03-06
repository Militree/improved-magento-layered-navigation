<?php

/**
 * Catalin Ciobanu
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License (MIT)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/MIT
 *
 * @package     Catalin_Seo
 * @copyright   Copyright (c) 2013 Catalin Ciobanu
 * @license     https://opensource.org/licenses/MIT  MIT License (MIT)
 */
class Catalin_SEO_Block_Enterprise_CatalogSearch_Layer_Filter_Attribute extends Catalin_SEO_Block_Enterprise_Catalog_Layer_Filter_Attribute
{

    /**
     * Set filter model name
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->_filterModelName = 'enterprise_search/catalog_layer_filter_attribute';
    }

}
