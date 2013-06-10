<?php
/*
 *  Created on Jan 10, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - ecommerceoffice.com
 *  Copyright Proskuryakov Ivan. ecommerceoffice.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php
class Ip_Tabs_Model_Tab extends Mage_Core_Model_Abstract
{
    const CACHE_TAG     = 'tabs_admin_tab';
    protected $_cacheTag= 'tabs_admin_tab';

    protected function _construct()
    {
        $this->_init('tabs/tab');


    }

}
