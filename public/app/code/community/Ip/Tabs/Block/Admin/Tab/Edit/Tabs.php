<?php
/*
 *  Created on Jan 10, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - ecommerceoffice.com
 *  Copyright Proskuryakov Ivan. ecommerceoffice.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Ip_Tabs_Block_Admin_Tab_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs {

    public function __construct() {
        parent::__construct();
        $this->setId('tabs_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('tabs')->__('Tab Information'));
    }

    protected function _beforeToHtml() {
        $this->addTab('form_section_tab', array(
            'label' => Mage::helper('tabs')->__('Tab Information'),
            'title' => Mage::helper('tabs')->__('Tab Information'),
            'content' => $this->getLayout()->createBlock('tabs/admin_tab_edit_tab_form')->toHtml(),
        ));
       $this->addTab('form_section_other', array(
           'label' => Mage::helper('tabs')->__('CSS & DESIGN'),
           'title' => Mage::helper('tabs')->__('CSS & DESIGN'),
           'content' => $this->getLayout()->createBlock('tabs/admin_tab_edit_tab_other')->toHtml(),
       ));

        return parent::_beforeToHtml();
    }

}