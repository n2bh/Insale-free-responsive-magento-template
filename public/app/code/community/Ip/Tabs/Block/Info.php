<?php
/*
 *  Created on Jan 10, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - ecommerceoffice.com
 *  Copyright Proskuryakov Ivan. ecommerceoffice.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>

<?php

class Ip_Tabs_Block_Info extends Mage_Adminhtml_Block_System_Config_Form_Fieldset {

    public function __construct() {
        parent::__construct();
    }
    public function render(Varien_Data_Form_Element_Abstract $element) {
        $html = $this->_getHeaderHtml($element);
        $html.= $this->_getFieldHtml($element);
        $html .= $this->_getFooterHtml($element);
        return $html;
    }
    protected function _getFieldHtml($fieldset) {
        $content = 'This extension is developed by <a href="http://www.magazento.com/" target="_blank">www.magazento.com</a><br/>';
        $content.= 'Magento Store Setup, modules, data migration, templates, upgrades and much more!';
        return $content;
    }

}
