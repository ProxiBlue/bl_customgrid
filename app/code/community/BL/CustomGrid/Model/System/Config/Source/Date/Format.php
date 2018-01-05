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

class BL_CustomGrid_Model_System_Config_Source_Date_Format
{
    public function toOptionArray()
    {
        $helper = Mage::helper('customgrid');
        return array(
            array('value' => Mage_Core_Model_Locale::FORMAT_TYPE_SHORT,  'label' => $helper->__('Short')),
            array('value' => Mage_Core_Model_Locale::FORMAT_TYPE_MEDIUM, 'label' => $helper->__('Medium')),
            array('value' => Mage_Core_Model_Locale::FORMAT_TYPE_LONG,   'label' => $helper->__('Long')),
            array('value' => Mage_Core_Model_Locale::FORMAT_TYPE_FULL,   'label' => $helper->__('Full')),
        );
    }
}