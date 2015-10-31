<?php

class Li_Aftercreatednewproduct_IndexController extends Mage_Core_Controller_Front_Action {
    public function indexAction () {
        Mage::dispatchEvent('aftercreatednewproduct_register_visit', null, 'customEvent.log');
    }
}