<?php
/*
 *  Created on Jan 10, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - ecommerceoffice.com
 *  Copyright Proskuryakov Ivan. ecommerceoffice.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php
Class Ip_Tabs_Model_Data
{

    // protected function getItemModel() {
        // return Mage::getModel('tabs/item');
    // }
    // protected function getItemCollection($tab_id) {
        // $storeId = Mage::app()->getStore()->getId();
        // $collection = $this->getItemModel()->getCollection();
        // $collection->addFilter('is_active', 1);
        // $collection->addTabFilter($tab_id);		
        // $collection->addStoreFilter($storeId);
        // $collection->addOrder('position', 'ASC');				
// 		
        // return $collection;
    // }
    // public function getItems($tab_id) {
        // return $this->getItemCollection($tab_id);
    // }
// 	
// 	
// 
    // public function storeCategories4Form() {
//     	
// 		
		// $collection = Mage::getModel('catalog/category') 
	                    // ->getCollection()
	                    // ->addAttributeToSelect('*')
						// ->addAttributeToSelect('name')
	                    // ->addIsActiveFilter()
	                    // ->addOrderField('path','ASC');
		// $items = array();
		// foreach ($collection as $value) {
			// $level = $value['level']-2;
			// $label =  str_repeat("--", $level) . $value['name']; 
// 			
			// $v = array('label' => $label,
		               // 'value' => $value['entity_id']
						// ); 
		    // array_push($items,$v);	
		// }
		// return $items;
// 		
    // }	
// 		
	// public function getItems4Form() {
       // // $storeId = Mage::app()->getStore()->getId();
        // $collection = $this->getItemModel()->getCollection();
        // $collection->addFilter('is_active', 1);
       // // $collection->addStoreFilter($storeId);
        // $collection->addOrder('position', 'ASC');
// 		
		// $items = array();
		// foreach ($collection as $item) {
			// $v = array('label' => $item->getTitle(),
		               // 'value' => $item->getitemId()
						// ); 
	        // array_push($items,$v);
		// }
        // return $items;
    // }
	// public function getCatalog4Form() {
       // // $storeId = Mage::app()->getStore()->getId();
        // $collection = $this->getCatalogModel()->getCollection();
        // $collection->addFilter('is_active', 1);
       // // $collection->addStoreFilter($storeId);
        // $collection->addOrder('position', 'ASC');
// 		
		// $items = array();
		// foreach ($collection as $item) {
			// $v = array('label' => $item->getTitle(),
		               // 'value' => $item->getcategoryId()
						// ); 
	        // array_push($items,$v);
		// }
        // return $items;
    // }
// 
    // protected function getCatalogModel() {
        // return Mage::getModel('tabs/category');
    // }
    // protected function getCatalogCollection($tab_id) {
        // $storeId = Mage::app()->getStore()->getId();
        // $collection = $this->getCatalogModel()->getCollection();
        // $collection->addFilter('is_active', 1);
		// $collection->addTabFilter($tab_id);		
        // $collection->addStoreFilter($storeId);
        // $collection->addOrder('position', 'ASC');
        // return $collection;
    // }
    // public function getCatalog($tab_id) {
        // return $this->getCatalogCollection($tab_id);
    // }
	
    protected function getTabModel() {
        return Mage::getModel('tabs/tab');
    }
    protected function getTabCollection() {
        $storeId = Mage::app()->getStore()->getId();
        $collection = $this->getTabModel()->getCollection();
        $collection->addFilter('is_active', 1);
        $collection->addStoreFilter($storeId);
        $collection->addOrder('position', 'ASC');
        return $collection;
    }
    public function getTabs() {
        return $this->getTabCollection();
    }



}