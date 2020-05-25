<?php
  if (isset($_GET['id_uzytkownik'])) {
    require_once '../php/polaczenie.php';
    $connect = mysqli_connect($host, $db_user, $db_password, $db_name);
    $id = $_GET['id_uzytkownik'];
    $sql = "DELETE FROM `uzytkownik` WHERE `uzytkownik`.`id_uzytkownik` = '$id'";
    mysqli_query($connect,$sql);
    mysqli_close($connect);

    echo "ulala";
  }
  header("Location: ../paneladm.php?zarzadzaj=continue");

 ?>
