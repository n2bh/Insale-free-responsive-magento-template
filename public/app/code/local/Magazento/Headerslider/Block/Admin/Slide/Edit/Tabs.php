<?php
/*
 *  Created on Mar 16, 2011
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?><?php

class Magazento_Headerslider_Block_Admin_Slide_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs {

    public function __construct() {
        parent::__construct();
        $this->setId('headerslider_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('headerslider')->__('Item Information'));
    }

    protected function _beforeToHtml() {
        $this->addTab('form_section', array(
            'label' => Mage::helper('headerslider')->__('Item Information'),
            'title' => Mage::helper('headerslider')->__('Item Information'),
            'content' => $this->getLayout()->createBlock('headerslider/admin_slide_edit_tab_form')->toHtml(),
        ));
//        $this->addTab('form_section_other', array(
//            'label' => Mage::helper('headerslider')->__('Item Information additional'),
//            'title' => Mage::helper('headerslider')->__('Item Information additional'),
//            'content' => $this->getLayout()->createBlock('headerslider/admin_slide_edit_tab_other')->toHtml(),
//        ));

        return parent::_beforeToHtml();
    }

}