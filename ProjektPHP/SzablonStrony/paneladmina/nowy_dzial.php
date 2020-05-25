<?php
if ($_SESSION['uprawnienia']==1) {
}else {
header("Location: logowanie.php");
}
  require_once '../php/polaczenie.php';
  $connect = mysqli_connect($host, $db_user, $db_password, $db_name);
  $nazwa = $_POST['nazwa'];
  $dzial = $_POST['dzial'];


//echo $nazwa." ".$dzial."<br>";


 $sql= "INSERT INTO `dzial`(`nazwa_dzialu`, `id_kursu`) VALUES ('$nazwa','$dzial')";
  mysqli_query($connect,$sql);
  mysqli_close($connect);

   header("Location: ../paneladm.php?nowydzial=continue");

 ?>
