<?php
/*
 *  Created on Jan 10, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - ecommerceoffice.com
 *  Copyright Proskuryakov Ivan. ecommerceoffice.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Ip_Tabs_Block_Admin_Tab extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    public function __construct()
    {
        $this->_controller = 'admin_tab';
        $this->_blockGroup = 'tabs';
        $this->_headerText = Mage::helper('tabs')->__('Tabs Tabs grid');
        $this->_addButtonLabel = Mage::helper('tabs')->__('Add New Tab');
        parent::__construct();
    }

}
