<?php

Class Magazento_Headerslider_Block_Headerslider extends Mage_Core_Block_Template {

    public function getModel() {
        return Mage::getModel('headerslider/data');
    }

}