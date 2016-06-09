<?php
$installer = Mage::getResourceModel('catalog/setup', 'catalog_setup');
$installer->startSetup();

$values = array(
    'type'          => 'varchar',
    'label'         => 'Delivery time',
    'text'          => 'default',
    'required'      => false
);

$installer->addAttribute(
    'catalog_product',
    'delivery_time',
    $values
);

$installer->endSetup();

$data = Mage::getModel('Demo_AddDeliveryTime/delivery_time');

$text = array(
    'text'          => rand(0,31)
);

$data->setData()->save();