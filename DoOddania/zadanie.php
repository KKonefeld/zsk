<?php
  require_once 'animal.php';
  $pies = new Animal("Buldog","7");
  $tur = new Animal("Pepa","4");

  $pies->echoName();
  echo " lat ";
  $pies->echoAge();
  echo "<br>";

  $tur->setAge("8");
  $tur->echoName();
  echo " lat ";
  $tur->echoAge();



 ?>
