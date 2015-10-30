<?php

class Li_Aftercreatednewproduct_Model_Observer {

    public function registerVisit (Varien_Event_Observer $observer) {
        Mage::log('catch the observer', null, 'customEvent.log');
        $product = $observer->getProduct();
        $category = $observer->getCategory();
        Mage::log($product->debug(), null, 'customEvent.log');
        Mage::log($category->debug(), null, 'customEvent.log');
    }

}