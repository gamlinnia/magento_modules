<?php

class Li_Prodcutcreatedaction_Model_Observer {

    public function refreshCache($observer) {
        foreach (array('block_html','collections','fpc') as $type) {
            Mage::app()->getCacheInstance()->cleanType($type);
            Mage::dispatchEvent('adminhtml_cache_refresh_type', array('type' => $type));
        }
        return $this;
    }

}