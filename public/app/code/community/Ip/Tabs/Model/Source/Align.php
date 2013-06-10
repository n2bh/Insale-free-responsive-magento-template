<?php
/*
 *  Created on Jan 10, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - ecommerceoffice.com
 *  Copyright Proskuryakov Ivan. ecommerceoffice.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Ip_Tabs_Model_Source_Align {

    public function toOptionArray() {
        return array(
            array('value' => 'left', 'label' => Mage::helper('tabs')->__('Left')),
            array('value' => 'right','label' => Mage::helper('tabs')->__('Right')),

        );
    }

}