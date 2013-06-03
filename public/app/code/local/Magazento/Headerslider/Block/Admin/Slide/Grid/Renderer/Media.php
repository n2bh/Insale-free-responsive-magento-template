<?php
/*
 *  Created on Mar 16, 2011
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?><?php


class Magazento_Headerslider_Block_Admin_Slide_Grid_Renderer_Media extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Action
{

    public function render(Varien_Object $row)
    {
        $html ='';
        if ($row->getData('image_filename')) {
            $html = '<img style="width:200px; border:1px solid #aaa;" src="'.Mage::helper('headerslider')->getImageFileHttp().DS.$row->getData('image_filename').'">';
        }
        return $html;
    }    
    
}
