<?php
/*
 *  Created on Jan 10, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - ecommerceoffice.com
 *  Copyright Proskuryakov Ivan. ecommerceoffice.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php
class Ip_Tabs_Block_Navigation extends Mage_Catalog_Block_Navigation {

	
// -----------------------------------------------------------------------------
	public function drawTabsTabs() {
        $html = '';
        $data = Mage::getModel('tabs/data')->getTabs();
		$html='';
        $i=0;
        foreach ($data as $item) {
                $i++;
				$class="";$style="";	
                if ($i == (count($data))) $class= ' last';
                if ($i == 1 ) $class= ' first';
				if ($item->getcssClass()) $class = $class. ' '.$item->getcssClass(); 
				if ($item->getcssStyle()) $style = 'style="'.$item->getcssStyle().'"'; 
				
				if ($item->getType() == 1 ) 
					$html .= '<li id="tab'.$i.'" class="tab'. $class .' '.$item['align_tab'].'"><a onclick="return false" '.$style.' href="'.$item->getUrl().'">'.$item['title'].'</a></li>';
				if ($item->getType() == 0 ) 
					$html .= '<li id="tab'.$i.'" class="tab'. $class .' '.$item['align_tab'].'"><a  '.$style.' href="'.$item->getUrl().'">'.$item['title'].'</a></li>';

        }

        return $html;
    }
	
	public function drawTabsJs() {
		$html = '';
      	$data = Mage::getModel('tabs/data')->getTabs();		
		$i=0;
        foreach ($data as $item) {
        	$i++;
			$html.= "jQuery('#tab{$i}').mouseover(function(event) {";
			$html.= "	jQuery('#menu{$i}').show();";
			$html.= "	jQuery('#tab{$i} a').addClass('active');";
			$html.= "});";
			$html.= "jQuery('#tab{$i}').mouseout(function(event) {";
			$html.= "	jQuery('#menu{$i}').hide();";
			$html.= "	jQuery('#tab{$i} a').removeClass('active');";	  
			$html.= "});";
			$html.= "jQuery('#menu{$i}').mouseover(function(event) {";
			$html.= "	jQuery('#menu{$i}').show();";
			$html.= "	jQuery('#tab{$i} a').addClass('active');";
			$html.= "});";
			$html.= "jQuery('#menu{$i}').mouseout(function(event) {";
			$html.= "	jQuery('#menu{$i}').hide();";
			$html.= "	jQuery('#tab{$i} a').removeClass('active');";	 	  
			$html.= "});";		

        }
		$html ='<script type="text/javascript">'.$html.'</script>';
        return $html;
    }	
	
	public function drawTabsTabItems() {
		$html='';
      	$data = Mage::getModel('tabs/data')->getTabs();
		$i=0;
		$helper = Mage::helper('cms');
		$processor = $helper->getPageTemplateProcessor();
		
		
		foreach ($data as $item) {
			$i++;
     		$tab_id = $item->getId();
			if ($item->getType() == 1 ) {
						
				$footer = '<div class="menu-footer">';
				$footer.= '	<div class="footer-title"><a href="'.$item->getUrl().'">' . $item->getTitle().' '.Mage::helper('core')->__('index').'</a></div>';	
				$footer.= '</div>';						
				
				
				$class="";$style="";			
				if ($item->getcssClassContent()) $class = 'class="'.$item->getcssClassContent().'" '; 
				if ($item->getcssStyleContent()) $style = 'style="'.$item->getcssStyleContent().'" '; 	
				$display = '';
				$html.='<div style="display: none;" class="menuitem" id="menu'.$i.'" >
						<ul '.$class.$style.' id="menu">';
				$html.='<div class="menu-content">'.$processor->filter( $item->getContent() ).'</div>'.$footer;
				$html.= '</ul>';
				$html.= '</div> ';		
			}
		}		
		return $html;
	}			
	

}