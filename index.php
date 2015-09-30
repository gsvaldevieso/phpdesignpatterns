<?php
namespace Factory;

require('factory/Factory.php');
/*
* Welcome to PHP  - Learning Design Patterns is fun
*/

/* Let's test some factory */
$ftr = new Factory();
$car = $ftr->getCar();
/*$car = $ftr->getCar(0);
$car = $ftr->getCar(1);
$car = $ftr->getCar(2);*/
echo "Hello, i'm a ".$car->getModel()." and my noise is ".$car->turnOn()." and my horse powers are ".$car->getPower()."hp...";
/* Good factory */

 ?>
