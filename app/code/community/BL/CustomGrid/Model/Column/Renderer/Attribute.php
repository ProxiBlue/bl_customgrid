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

class BL_CustomGrid_Model_Column_Renderer_Attribute 
    extends BL_CustomGrid_Model_Column_Renderer
{   
    protected function _construct()
    {
        $this->_acceptParameters = true;
    }
    
    public function getConfigType()
    {
        return BL_CustomGrid_Model_Config::TYPE_COLUMN_RENDERERS_ATTRIBUTE;
    }
    
    public function getRenderersInstances()
    {
        $types = array();
        foreach ($this->getElementsArray() as $type) {
            $types[$type['code']] = $this->getElementInstanceByCode($type['code']);
        }
        return $types;
    }
}