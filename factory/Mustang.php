<?php
namespace Factory;

class Mustang implements CarInterface{

  function getPower(){
    return 100;
  }

  function getModel(){
    return "Mustang";
  }

  function turnOn(){
    return "Vrummmmmmmm!";
  }
}

 ?>
