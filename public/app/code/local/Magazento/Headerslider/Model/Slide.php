<?php
/*
 *  Created on Mar 16, 2011
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php
class Magazento_Headerslider_Model_Slide extends Mage_Core_Model_Abstract
{
    const CACHE_TAG     = 'headerslider_admin_slide';
    protected $_cacheTag= 'headerslider_admin_slide';
    protected function _construct()

    {
        $this->_init('headerslider/slide');
    }

}
