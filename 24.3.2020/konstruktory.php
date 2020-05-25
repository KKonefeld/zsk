<?php
  class Person{
    private $name;

    public function setName($value){
      $this->name = $value;
    }

    function __construct($name){
      $this->name = $name;
    }

    function echoName(){
      return $this->name;
    }


  }
  $osoba = new Person("Agnieksza");

  $osoba->setName("Janusz");

  echo $osoba->echoName();        ;




 ?>
