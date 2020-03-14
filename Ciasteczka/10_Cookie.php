<?php
  setcookie("city", "Poznań", time()+60*60*24);
  setcookie("name", "Janusz", time()+60*60*24);
  echo $_COOKIE['city'],'<hr>';


function Show($cookie){
echo "<pre>";
  print_r($_COOKIE);
  echo "</pre>";
}

Show($_COOKIE);

setcookie("name", "", time()-1);
Show($_COOKIE);

echo "<script>alert(\"Janusz\");</script>";

 ?>
