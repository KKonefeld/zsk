<?php
if ($_SESSION['uprawnienia']==1) {
}else {
header("Location: logowanie.php");
}
  if (isset($_GET['id_slowo'])) {
    require_once '../php/polaczenie.php';
    $connect = mysqli_connect($host, $db_user, $db_password, $db_name);
    $id = $_GET['id_slowo'];
    $sql = "DELETE FROM `slowo` WHERE `slowo`.`id_slowo` = '$id'";
    $sql2 = "DELETE FROM `tlumaczenie` WHERE `tlumaczenie`.`id_slowo` = '$id'";

    mysqli_query($connect,$sql);
      mysqli_query($connect,$sql2);
    mysqli_close($connect);
    $id_dzialu = $_GET['id_dzialu'];
    $nazwa_dzialu = $_GET['nazwa_dzialu'];
    echo "ulala";
  }
header("Location: ../paneladm.php?wyswietlslowka=$id_dzialu&nazwadzialu=$nazwa_dzialu");

 ?>
