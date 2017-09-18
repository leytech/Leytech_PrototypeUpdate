<?php
/**
 * @package    Leytech_PrototypeUpdate
 * @author     Chris Nolan (chris@leytech.co.uk)
 * @copyright  Copyright (c) 2017 Leytech
 * @license    https://opensource.org/licenses/MIT  The MIT License  (MIT)
 */

class Leytech_PrototypeUpdate_Model_System_Config_Source_Version
{
	static function toOptionArray()
	{
		return array(
			array('value' => 'default',     'label' => 'Default Magento'),
			array('value' => '1.7.1.0',       'label' => '1.7.1'),
			array('value' => '1.7.2.0',       'label' => '1.7.2'),
			array('value' => '1.7.3.0',       'label' => '1.7.3 (Not recommended)'),
		);
	}
}