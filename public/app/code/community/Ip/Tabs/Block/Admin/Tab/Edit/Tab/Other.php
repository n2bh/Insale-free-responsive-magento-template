<?php
/*
 *  Created on Jan 10, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - ecommerceoffice.com
 *  Copyright Proskuryakov Ivan. ecommerceoffice.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php
class Ip_Tabs_Block_Admin_Tab_Edit_Tab_Other extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $model = Mage::registry('tabs_tab');
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('additional_form', array('legend'=>Mage::helper('tabs')->__('Additional information ')));


        $fieldset->addField('css_class', 'text', array(
            'name' => 'css_class',
            'label' => Mage::helper('tabs')->__('CSS class (for tab)'),
            'title' => Mage::helper('tabs')->__('CSS class (for tab)'),
            'required' => false,
        ));
        $fieldset->addField('css_style', 'textarea', array(
            'name' => 'css_style',
            'label' => Mage::helper('tabs')->__('CSS styles (for tab)'),
            'title' => Mage::helper('tabs')->__('CSS styles (for tab)'),
            'required' => false,
        ));

        $fieldset->addField('css_class_content', 'text', array(
            'name' => 'css_class_content',
            'label' => Mage::helper('tabs')->__('CSS class (for tab content)'),
            'title' => Mage::helper('tabs')->__('CSS class (for tab content)'),
            'required' => false,
        ));
        $fieldset->addField('css_style_content', 'textarea', array(
            'name' => 'css_style_content',
            'label' => Mage::helper('tabs')->__('CSS styles (for tab content)'),
            'title' => Mage::helper('tabs')->__('CSS styles (for tab content)'),
            'required' => false,
        ));

//        $form->setUseContainer(true);
        $form->setValues($model->getData());
        $this->setForm($form);

      return parent::_prepareForm();
  }
}