<?php
/**
 * Created by PhpStorm.
 * User: joonaskansala
 * Date: 9.6.2016
 * Time: 11.10
 */

$model = Mage::getModel('catalog/product')->load(27);
$deliveryTime = $model->getDeliveryTime();
$deliveryTime == rand(0,31);
$model->setDeliveryTime($deliveryTime)->setSku(rand());
$model->save();