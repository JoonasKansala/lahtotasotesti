<?php
$installer = Mage::getResourceModel('catalog/setup', 'catalog_setup');
$installer->startSetup();

$installer->addAttribute(
    'catalog_product',
    'delivery_time',
    array(
        'type'          => 'varchar',
        'label'         => 'Delivery time',
        'text'          => rand(0,31),
        'required'      => false,
        'visible'       => true,
        'backend'       => '',
        'is_html_allowed_on_front' => false,
        'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL
    )
);

$installer->endSetup();

/*
 *
 * 'group'         => 'Vela Cash On Delivery',
    'input'         => 'boolean',
    'type'          => 'int',
    'label'         => 'Allow Cash On Delivery',
    'backend'       => '',
    'visible'       => true,
    'required'      => false,
    'user_defined' => false,
    'searchable' => false,
    'filterable' => false,
    //'comparable'  => 1,
    'visible_on_front' => false,
    'visible_in_advanced_search'  => false,
    'is_html_allowed_on_front' => false,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'unique'        => false
 *
 */