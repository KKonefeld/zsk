<?php
  class Animal{
    private $name;
    private $age;


    public function setAge($value){
      $this->age = $value;
    }


  function __construct($name, $age)
    {
          $this->name = $name;
          $this->age=$age;
    }
  function echoName()
  {
          echo $this->name;

  }
  function echoAge()
  {
        echo $this->age;

  }

  }


 ?>
