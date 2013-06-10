<?php
/*
 *  Created on Jan 10, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - ecommerceoffice.com
 *  Copyright Proskuryakov Ivan. ecommerceoffice.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Ip_Tabs_Model_Source_Menuskin {

    public function toOptionArray() {
        return array(
            array('value' => 'menuredtabs', 'label' => Mage::helper('tabs')->__('Redtabs')),
            array('value' => 'menured', 'label' => Mage::helper('tabs')->__('Red')),
            array('value' => 'menublue','label' => Mage::helper('tabs')->__('Blue')),
        );
    }

}