<?php
namespace Factory;

require_once('CarInterface.php');
require_once('Mustang.php');
require_once('Jeep.php');
require_once('Beatle.php');

class Factory{
  function getCar($car){
    switch($car){
      case 0:
        return new Mustang();
      break;
      case 1:
        return new Jeep();
      break;
      case 2:
        return new Beatle();
      break;
      default:
        return new Mustang();
      break;
    }
  }

}

 ?>
