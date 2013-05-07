<?php
/*
 *  Created on Mar 16, 2011
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

$installer = $this;

$installer->startSetup();

$installer->run("

CREATE TABLE IF NOT EXISTS {$this->getTable('magazento_headerslider_slide')} (
  `slide_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `position` smallint(6) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `content` text,
  `from_time` datetime DEFAULT NULL,
  `to_time` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`slide_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

");

$installer->endSetup();



//INSERT INTO {$this->getTable('magazento_headerslider_slide')} (`slide_id`, `position`, `title`, `content`, `from_time`, `to_time`, `is_active`) VALUES
//(2, 1, 'Slide #1', '<p><img style=\"vertical-align: middle; border: 0pt none;\" src=\"/media/magazento_headerslider/slider1.jpg\" alt=\"\" /></p>', '2009-06-11 06:46:36', NULL, 1),
//(3, 3, 'Slide #3', '<p><img style=\"vertical-align: middle; border: 0pt none;\" src=\"/media/magazento_headerslider/slider111.jpg\" /></p>', '2009-06-11 10:46:36', NULL, 1),
//(4, 2, 'Slide #2', '<p><img style=\"vertical-align: middle; border: 0pt none;\" src=\"/media/magazento_headerslider/slider11.jpg\" alt=\"\" width=\"150\" height=\"100\" /></p>', '2009-06-11 10:46:36', NULL, 1),
//(5, 4, 'Slide #4', '<p><img style=\"vertical-align: middle; border: 0pt none;\" src=\"/media/magazento_headerslider/slider2.jpg\" alt=\"\" width=\"536\" height=\"100\" /></p>', '2011-02-10 17:05:30', NULL, 1),
//(6, 5, 'Slide #5', '<p><img style=\"vertical-align: middle; border: 0pt none;\" src=\"/media/magazento_headerslider/slider22.jpg\"  /></p>', '2011-02-10 17:06:40', NULL, 1),
//(7, 6, 'Slide #6', '<p><img style=\"vertical-align: middle; border: 0pt none;\" src=\"/media/magazento_headerslider/slider222.jpg\" /></p>', '2011-02-10 17:07:48', NULL, 1),
//(8, 7, 'Slide #7', '<p><img style=\"vertical-align: middle; border: 0pt none;\" src=\"/media/magazento_headerslider/slider4.jpg\" alt=\"\" /></p>', '2008-09-02 18:21:00', NULL, 1),
//(9, 8, 'Slide #8', '<p><img style=\"vertical-align: middle; border: 0pt none;\" src=\"/media/magazento_headerslider/slider44.jpg\" alt=\"\" /></p>', '2008-06-02 18:22:00', NULL, 1),
//(10, 9, 'Slide #9', '<p><img style=\"vertical-align: middle; border: 0pt none;\" src=\"/media/magazento_headerslider/slider444.jpg\" alt=\"\" /></p>', '2007-10-02 18:22:00', NULL, 1),
//(11, 11, 'Slide #11', '<p><img style=\"vertical-align: middle; border: 0pt none;\" src=\"/media/magazento_headerslider/slider33.jpg\" alt=\"\" /></p>', '2008-10-01 18:23:00', NULL, 1),
//(12, 10, 'Slide #10', '<p><img style=\"vertical-align: middle; border: 0pt none;\" src=\"/media/magazento_headerslider/slider3.jpg\" alt=\"\" width=\"201\" height=\"100\" /></p>', '2007-09-03 18:23:00', NULL, 1),
//(13, 12, 'Slide #12', '<p><img style=\"vertical-align: middle; border: 0pt none;\" src=\"/media/magazento_headerslider/slider333.jpg\" alt=\"\" /></p>', '2008-10-07 18:24:00', NULL, 1);


?>