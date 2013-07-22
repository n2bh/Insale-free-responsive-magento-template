<?php
/**
 * 
 * @category  Magazento
 * @author    Ivan Proskuryakov http://www.magazento.com <volgodark@gmail.com>
 * @copyright Copyright (C)2013 Magazento
 *
 */

class Magazento_Insale_Block_Info extends Mage_Adminhtml_Block_System_Config_Form_Fieldset {

    public function render(Varien_Data_Form_Element_Abstract $element) {

        $html = $this->_getHeaderHtml($element);

        $html.= $this->_getFieldHtml($element);

        $html .= $this->_getFooterHtml($element);

        return $html;
    }

    protected function _getFieldHtml($fieldset) {
        $content = 'This theme is developed by <a href="http://www.magazento.com/" target="_blank">www.magazento.com</a><br/>';
        $content.= 'Magento Store Setup, modules, data migration, templates, upgrades and much more!<br/>';
        $content.= '<b>Note 1:</b> If you need any help using this theme (all services are paid), please visit the theme page, http://www.magazento.com/ and post your question there or email us at service@magazento.com.<br/>';
        $content.= '<b>Note 2:</b> This is Free Theme Package that goes without PSD Files, to order a developer licence please get in contact us.<br/>';
        return $content;
    }

}
