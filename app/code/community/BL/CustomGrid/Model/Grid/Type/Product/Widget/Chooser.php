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

class BL_CustomGrid_Model_Grid_Type_Product_Widget_Chooser
    extends BL_CustomGrid_Model_Grid_Type_Abstract
{
    public function isAppliableToGrid($type, $rewritingClassName)
    {
        return ($type == 'adminhtml/catalog_product_widget_chooser');
    }
    
    public function matchGridBlock($blockType, $blockId, $model)
    {
        /*
        Block ID seems to be too much varying to be able to rely on,
        so let's assume all choosers share the same config, and this should be OK
        (and at least, far better from creating as much customizations as widgets...)
        */
        return ($blockType == $model->getBlockType());
    }
}