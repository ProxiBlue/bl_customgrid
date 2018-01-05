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

class BL_CustomGrid_Model_Grid_Type_Order
    extends BL_CustomGrid_Model_Grid_Type_Sales_Abstract
{
    public function isAppliableToGrid($type, $rewritingClassName)
    {
        return ($type == 'adminhtml/sales_order_grid');
    }
    
    protected function _isOrdersGrid()
    {
        return true;
    }
    
    protected function _getItemsCustomColumnModel($customizable=false)
    {
        return 'customgrid/custom_column_order_items_'.($customizable ? 'custom' : 'default');
    }
}
