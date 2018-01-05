<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   BL
 * @package    BL_CustomGrid
 * @copyright  Copyright (c) 2012 Benoît Leulliette <benoit.leulliette@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

abstract class BL_CustomGrid_Model_Column_Renderer_Collection_Abstract
    extends BL_CustomGrid_Model_Column_Renderer_Abstract
{
    /**
    * Return values to be used for column configuration in grid block
    * 
    * @param string $index Column index
    * @param Mage_Core_Model_Store $store Current store
    * @param BL_CustomGrid_Model_Grid $grid Grid model
    * @return array
    */
    abstract public function getColumnGridValues($index, $store, $grid);
}