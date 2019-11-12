<?php
  session_start();
  $_SESSION['name'] = "Janusz";


 ?>


<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Witamy <?php  echo $_SESSION['name'] ?> na stronie!
    <a href="2.php">Strona 2</a>
  </body>
</html>
