<?php
if ($_SESSION['uprawnienia']==1) {
}else {
header("Location: logowanie.php");
}
  require_once '../php/polaczenie.php';
  $connect = mysqli_connect($host, $db_user, $db_password, $db_name);
$id = $_POST['id'];
  $login = $_POST['login'];
  $czy_adm =$_POST['czy_administrator'];


  $sql = "UPDATE `uzytkownik` SET `login`='$login', `czy_administrator`='$czy_adm' WHERE `uzytkownik`.`id_uzytkownik` = '$id'";
  mysqli_query($connect,$sql);
  mysqli_close($connect);

   header("Location: ../paneladm.php?zarzadzaj=continue");

 ?>
