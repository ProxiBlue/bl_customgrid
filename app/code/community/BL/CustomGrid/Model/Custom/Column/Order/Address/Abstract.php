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

abstract class BL_CustomGrid_Model_Custom_Column_Order_Address_Abstract
    extends BL_CustomGrid_Model_Custom_Column_Simple_Table
{
    public function initConfig()
    {
        parent::initConfig();
        $this->addExcludedVersions('1.4.0.*');
        return $this;
    }
    
    public function getAppliedFlagKey($alias, $params, $block, $collection, $table)
    {
        return $table.'/'.$this->getAddressType();
    }
    
    public function getTableName()
    {
        return 'sales/order_address';
    }
    
    public function getJoinConditionMainField()
    {
        return (($field = parent::getJoinConditionMainField()) ? $field : 'entity_id');
    }
    
    public function getJoinConditionTableField()
    {
        return (($field = parent::getJoinConditionTableField()) ? $field : 'parent_id');
    }
    
    public function getTableFieldName()
    {
        return $this->getModelParam('address_field');
    }
    
    abstract public function getAddressType();
    
    public function getAdditionalJoinConditions($alias, $params, $block, $collection, $mainAlias, $tableAlias)
    {
        list($adapter, $qi) = $this->_getCollectionAdapter($collection, true);
        return array($adapter->quoteInto($qi($tableAlias.'.address_type').' = ?', $this->getAddressType()));
    }
}