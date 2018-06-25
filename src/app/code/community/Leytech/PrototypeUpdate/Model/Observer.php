<?php
/**
 * @package    Leytech_PrototypeUpdate
 * @author     Chris Nolan (chris@leytech.co.uk)
 * @copyright  Copyright (c) 2017 Leytech
 * @license    https://opensource.org/licenses/MIT  The MIT License  (MIT)
 */

class Leytech_PrototypeUpdate_Model_Observer
{

    public function replacePrototypeLibrary() {

        $helper = Mage::helper('leytech_prototypeupdate');

        // Do nothing if module is not active
        if (!$helper->isEnabled()) {
            return $this;
        }

        // Get head block
        $head = Mage::app()->getLayout()->getBlock('head');

        // Do nothing if head block doesn't exist
        if (!$head) {
            return $this;
        }
        
        // Get head items
        $headItems = $head->getData('items');

        // Configured prototype.js version
        $version = $helper->getPrototypeVersion();

        // Replace library if configured version is valid
        if (isset($headItems['js/prototype/prototype.js']) && $helper->isVersionValid($version)) {
            $headItems['js/prototype/prototype.js']['name'] = 'leytech' . DS . 'prototype' . DS . $version . DS . 'prototype.js';
            $head->setData('items', $headItems);
        }

        return $this;

    }

}
