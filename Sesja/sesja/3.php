<?php
  session_start();
//  $_SESSION['name'] = "Janusz";
unset($_SESSION['name']);
session_destroy();

 ?>


<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Witamy <?php  echo $_SESSION['name'] ?> na stronie!
    <a href="1.php">Strona 1</a>
  </body>
</html>
