<?php
/*
 *  Created on Jan 10, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - ecommerceoffice.com
 *  Copyright Proskuryakov Ivan. ecommerceoffice.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php
class Ip_Tabs_Block_Popular extends Mage_Catalog_Block_Product_Abstract {


	protected function _construct() {
		parent::_construct();
                
                $cat_id = $this->getData('categoryid');
		$this->addData(array(
                        'cache_lifetime' => 86400,
                        'cache_tags' => array("iptabs_popular" ."_".$cat_id.'_'.Mage::app()->getStore()->getId()),
                        'cache_key' => "iptabs_popular".'_'.$cat_id.'_'.Mage::app()->getStore()->getId(),                    
		));
                
                
	}
        
        protected function _beforeToHtml() {
    	
			//var_dump('-->>');
			// var_dump($this->getData('count'));
			// var_dump($this->getData('categoryid'));
			
            $storeId    = Mage::app()->getStore()->getId();
            $products = Mage::getResourceModel('reports/product_collection')
                        ->addOrderedQty()
                        ->addAttributeToSelect('*')
                        ->addAttributeToSelect(array('name', 'price', 'small_image')) //edit to suit tastes
                        ->setStoreId($storeId)
                        ->addStoreFilter($storeId)
                        ->addViewsCount();
						
						
            Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($products);
            Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($products);
            $products->setPageSize($this->getData('count'))->setCurPage(1);
			
			//category filter		
            if ($this->getData('categoryid')>0) {
                $category = Mage::getModel("catalog/category")->load($this->getData('categoryid'));
                $products->addCategoryFilter($category); 
            }
							
            $this->setProductCollection($products);
            return parent::_beforeToHtml();
	}
}
    






