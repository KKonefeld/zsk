<?php
  class A{
    private $a;

    public function showA(){
      return "Funkcja z klasy A";
    }
    public function setA($a){
      $this->a=$a;
    }
    public function getA(){
      return $this->a;
    }

  }
  class B extends A{
    public function showB(){
      return "Funkcja z klasy b";
    }
  }

  $objA = new A();
  echo $objA->showA();
//  echo $objA->showB();

$objB = new B();
echo $objB->showB();
echo $objB->showA();
$objB->a = "Jan";
echo $objB->a;
 ?>
