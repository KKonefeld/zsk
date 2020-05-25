<?php
  class Person{
    private $name;

    function __construct($name){
      echo "konstruktor";
      $this->name = $name;
    }
    function __destruct(){
      echo "destruktor";
    }
    echo "<br>test</br>";
    $obj = new Person("Jan");
    unset($obj);
    echo "<br>test<br>";


  }



 ?>
