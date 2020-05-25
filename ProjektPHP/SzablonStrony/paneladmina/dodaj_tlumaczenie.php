<?php
if ($_SESSION['uprawnienia']==1) {
}else {
header("Location: logowanie.php");
}
require_once '../php/polaczenie.php';
$connect = mysqli_connect($host, $db_user, $db_password, $db_name);
$id_slowo = $_POST['id_slowo'];
$tlumaczenie = $_POST['tlumaczenie'];
$id_jezyka = $_POST['id_jezyka'];

//potrzebne
$id_dzialu = $_POST['id_dzialu'];
$nazwa_dzialu = $_POST['nazwa_dzialu'];



$sql = "INSERT INTO `tlumaczenie`(`id_slowo`, `id_jezyka`, `tlumaczenie`) VALUES ('$id_slowo','$id_jezyka','$tlumaczenie')";
mysqli_query($connect,$sql);
mysqli_close($connect);
 header("Location: ../paneladm.php?wyswietlslowka=$id_dzialu&nazwadzialu=$nazwa_dzialu");
 ?>
