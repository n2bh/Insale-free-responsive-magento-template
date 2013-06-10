<?php
/*
 *  Created on Mar 16, 2011
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Magazento_Insale_Helper_Data extends Mage_Core_Helper_Abstract {

    function getPromoLabels($_product) {
        $today =  time();
        $_promo_sale='';
        $specialprice = Mage::getModel('catalog/product')->load($_product->getId())->getSpecialPrice(); 
        $specialPriceFromDate = Mage::getModel('catalog/product')->load($_product->getId())->getSpecialFromDate();
        $specialPriceToDate = Mage::getModel('catalog/product')->load($_product->getId())->getSpecialToDate();

        if ($specialprice):
            if($today >= strtotime( $specialPriceFromDate) && $today <= strtotime($specialPriceToDate) 
                    || $today >= strtotime( $specialPriceFromDate) && is_null($specialPriceToDate)):
                $_promo_sale = '<div class="promo-sale">'.Mage::helper('core')->__('sale').'</div>';
            endif;
        endif;     

        $_promo_new='';
        $newFromDate = $_product->getData('news_from_date');
        $newToDate = $_product->getData('news_to_date');
        if ($newFromDate):

            if($today >= strtotime( $newFromDate) && $today <= strtotime($newToDate) 
                    || $today >= strtotime( $newFromDate) && is_null($newToDate)):
                $_promo_new = '<div class="promo-new"> '.Mage::helper('core')->__('new').'</div>';
            endif;
        endif;     
        
        $array = array('new'=>$_promo_new,'sale'=>$_promo_sale);
        return $array;
    }
}
