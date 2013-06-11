<?php
/*
 *  Created on Jan 10, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - ecommerceoffice.com
 *  Copyright Proskuryakov Ivan. ecommerceoffice.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php
class Ip_Tabs_Block_Category extends Mage_Core_Block_Template {

        public function __construct()
        {
            parent::__construct();
            $this->setTemplate('ip_tabs/category.phtml');
        }    
        
        
        public function drawNestedMenus($children, $level=1,$morehref ='') {
            $html = '<ul>';
            $i=0;
            foreach ($children as $child) {

                    $_category = Mage::getModel("catalog/category")->load($child);

                    $html .= '<li class="level' . $level . '">';
                    $html .= '<a class="category-item-icon " href="' . $_category->getUrl() . '"><span class="level' . $level . '">' . $this->htmlEscape($_category->getName()) . '</span></a>';
                    $activeChildren = $this->getChildren($child);
                    if (sizeof($activeChildren) > 0) {
                        $html .= $this->drawNestedMenus($activeChildren, $level + 1,$_category->getUrl() );
                    }
                    $i++;
                    $html .= '</li>';
            }
            $html .= '</ul>';
            return $html;
        }

    
}