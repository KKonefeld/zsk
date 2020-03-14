<?php
  require_once '../php/polaczenie.php';
  $connect = mysqli_connect($host, $db_user, $db_password, $db_name);

  $sql = "SELECT * FROM `uzytkownik`";
  $result = mysqli_query($connect,$sql);

  while ($row = mysqli_fetch_assoc($result)) {
      echo $row['id_uzytkownik'];
      echo $row['login'];
      echo $row['czy_administrator'];
      echo $row['data_utworzenia'];
      echo "<br>";

  }






  mysqli_close($connect);



 ?>
