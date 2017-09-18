<?php
/**
 * @package    Leytech_PrototypeUpdate
 * @author     Chris Nolan (chris@leytech.co.uk)
 * @copyright  Copyright (c) 2017 Leytech
 * @license    https://opensource.org/licenses/MIT  The MIT License  (MIT)
 */

class Leytech_PrototypeUpdate_Helper_Data extends Mage_Core_Helper_Abstract
{

    const XML_PATH_IS_ENABLED = 'leytech_prototypeupdate/settings/enabled';
    const XML_PATH_PROTOTYPE_VERSION = 'leytech_prototypeupdate/settings/prototype_version';

    const VALID_VERSIONS = ['1.7.1.0', '1.7.2.0', '1.7.3.0'];

    public function isEnabled() {
        return (bool) Mage::getStoreConfig(self::XML_PATH_IS_ENABLED);
    }

    public function getPrototypeVersion() {
        return (string) Mage::getStoreConfig(self::XML_PATH_PROTOTYPE_VERSION);
    }

    public function isVersionValid($version) {
        if (in_array($version, self::VALID_VERSIONS)) {
            return true;
        }
        return false;
    }

}