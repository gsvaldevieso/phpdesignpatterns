<?php
namespace Factory;

class Beatle implements CarInterface{

  function getPower(){
    return 65;
  }

  function getModel(){
    return "Beatle";
  }

  function turnOn(){
    return "Zummmmmm!";
  }
}

 ?>
