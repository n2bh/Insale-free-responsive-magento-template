<?php
/*
 *  Created on Jan 10, 2012
 *  Author Ivan Proskuryakov - volgodark@gmail.com - ecommerceoffice.com
 *  Copyright Proskuryakov Ivan. ecommerceoffice.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php class Ip_Tabs_Helper_Data extends Mage_Core_Helper_Abstract {

    public function versionUseAdminTitle() {
        $info = explode('.', Mage::getVersion());
        if ($info[0] > 1) {
            return true;
        }
        if ($info[1] > 3) {
            return true;
        }
        return false;
    }

    public function versionUseWysiwig() {
        $info = explode('.', Mage::getVersion());
        if ($info[0] > 1) {
            return true;
        }
        if ($info[1] > 3) {
            return true;
        }
        return false;
    }

    public function numberArray($max,$text) {

        $items = array();
        for ($index = 1; $index <= $max; $index++) {
            $items[$index]=$text.' '.$index;
        }
        return $items;
    }
	
    public function getDummyContent()
    {
		$dummycontent = '
			<table border="0" width="100%">
<tbody>
<tr>
<td>
<h2 class="menu-content-header">Categories</h2>
<ul>
<li><a href="/mobile-phones/sim-free-phones/">Smartphones</a></li>
<li> <a href="/mobile-phones/pay-monthly-phones/">Phone Accessories</a> 
<ul>
<li><a href="/mobile-phones/payg-phones/">Cables and Connectivity</a></li>
<li><a href="/mobile-phones/sim-cards/">Cases and Covers</a></li>
<li><a href="/mobile-phones/mobile-broadband/">Cradles and Docking Stations</a></li>
<li><a href="/mobile-phones/iphone-accessories/">Power Adaptors and Batteries</a></li>
<li><a href="/mobile-phones/phone-accessories/">Screen Protectors and Cleaning</a> </li>
<li><a href="/mobile-phones/phone-accessories/">Styli and Pens</a> </li>
</ul>
</li>
</ul>
</td>
<td>
<h2 class="menu-content-header">Os</h2>
<ul>
<li><a href="/store/apple-iphone-4/">Apple iOS</a></li>
<li><a href="/blackberry-smartphones/">Blackberry</a></li>
<li><a href="/android-smartphones/">Google Android</a></li>
<li><a href="/windows-phone-7-smartphones/">Windows Phone 7</a></li>
</ul>
<h2 class="menu-content-header">Price</h2>
<ul class="price">
<li><a href="/mobile-phones/?filter=5|0|0-50">Under &pound;50</a></li>
<li><a href="/mobile-phones/?filter=5|0|50-100">&pound;50 - &pound;100</a></li>
<li><a href="/mobile-phones/?filter=5|0|100-200">&pound;100 - &pound;200</a></li>
<li><a href="/mobile-phones/?filter=5|0|200-300">&pound;200 - &pound;300</a></li>
<li><a href="/mobile-phones/?filter=5|0|300-400">&pound;300 - &pound;400</a></li>
<li><a href="/mobile-phones/?filter=5|0|400-500">&pound;400 - &pound;500</a></li>
<li><a href="/mobile-phones/?filter=5|0|600-0">&pound;600+</a></li>
</ul>
</td>
<td>
<h2 class="menu-content-header">Brands</h2>
<ul class="logo_grid">
<li><a href="/tablet-pcs+ipads/brand/apple/"><img title="Apple" src="http://i4.expansys.com/i/man/50x50/51.jpg" alt="Apple" width="50" height="50" /></a></li>
<li><a href="/tablet-pcs+ipads/brand/archos/"><img title="Archos" src="http://i4.expansys.com/i/man/50x50/55.jpg" alt="Archos" width="50" height="50" /></a></li>
<li><a href="/tablet-pcs+ipads/brand/asus/"><img title="ASUS" src="http://i4.expansys.com/i/man/50x50/64.jpg" alt="ASUS" width="50" height="50" /></a></li>
<li><a href="/tablet-pcs+ipads/brand/dell/"><img title="Dell" src="http://i4.expansys.com/i/man/50x50/232.jpg" alt="Dell" width="50" height="50" /></a></li>
<li><a href="/tablet-pcs+ipads/brand/hp/"><img title="HP" src="http://i4.expansys.com/i/man/50x50/396.jpg" alt="HP" width="50" height="50" /></a></li>
<li><a href="/tablet-pcs+ipads/brand/motorola/"><img title="Motorola" src="http://i4.expansys.com/i/man/50x50/565.jpg" alt="Motorola" width="50" height="50" /></a></li>
<li><a href="/tablet-pcs+ipads/brand/samsung/"><img title="Samsung" src="http://i4.expansys.com/i/man/50x50/783.jpg" alt="Samsung" width="50" height="50" /></a></li>
<li><a href="/tablet-pcs+ipads/brand/toshiba/"><img title="Toshiba" src="http://i4.expansys.com/i/man/50x50/935.jpg" alt="Toshiba" width="50" height="50" /></a></li>
<li><a href="/tablet-pcs+ipads/brand/viewsonic/"><img title="ViewSonic" src="http://i4.expansys.com/i/man/50x50/999.jpg" alt="ViewSonic" width="50" height="50" /></a></li>
</ul>
</td>
<td>
<h2 class="menu-content-header">Popular</h2>
{{block type="tabs/popular" categoryid="18" count="4"  template="ip_tabs/popular.phtml"}}</td>
</tr>
</tbody>
</table>
		';
		return $dummycontent;
    }
		
	
	
}
