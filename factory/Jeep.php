<?php
namespace Factory;

class Jeep implements CarInterface{

  function getPower(){
    return 156;
  }

  function getModel(){
    return "Jeep";
  }

  function turnOn(){
    return "Rammmmmm!";
  }
}

 ?>
