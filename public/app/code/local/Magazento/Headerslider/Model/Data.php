<?php
/*
 *  Created on Mar 16, 2011
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php
Class Magazento_Headerslider_Model_Data {

    
    protected function getSlideModel() {
        return Mage::getModel('headerslider/slide');
    }

    protected function getItemCollection() {
        $collection = $this->getSlideModel()->getCollection();
        $collection->addFilter('is_active', 1);
        $collection->addNowFilter();
        $collection->addOrder('position', 'ASC');
        return $collection;
    }

    public function getItems() {
        return $this->getItemCollection();
    }

    public function hasItems() {

        return $this->getItemCollection()->count();
    }

}