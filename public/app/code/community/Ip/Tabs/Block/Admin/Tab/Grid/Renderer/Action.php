<?php
/*
 *  Created on Jan 10, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - ecommerceoffice.com
 *  Copyright Proskuryakov Ivan. ecommerceoffice.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php


class Ip_Tabs_Block_Admin_Tab_Grid_Renderer_Action extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Action
{
	    public function render(Varien_Object $row)
	    {
	
	        $actions[] = array(
	        	'url' => $this->getUrl('*/*/edit', array('tab_id' => $row->getId())),
	        	'caption' => Mage::helper('tabs')->__('Edit')
	         );
		     
	         $actions[] = array(
	        	'url' => $this->getUrl('*/*/delete', array('tab_id' => $row->getId())),
	        	'caption' => Mage::helper('tabs')->__('Delete'),
	        	'confirm' => Mage::helper('tabs')->__('Are you sure you want to delete this tab ?')
	         );
	
	        $this->getColumn()->setActions($actions);
	
	        return parent::render($row);
	    }
}
