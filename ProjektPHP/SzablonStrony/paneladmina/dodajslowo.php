<?php
if ($_SESSION['uprawnienia']==1) {
}else {
header("Location: logowanie.php");
}
require_once '../php/polaczenie.php';
$connect = mysqli_connect($host, $db_user, $db_password, $db_name);
$id_dzial = $_POST['id_dzial'];
$slowo = $_POST['slowo'];


$sql = "INSERT INTO `slowo`(`slowo`, `id_dzial`) VALUES ('$slowo','$id_dzial')";
mysqli_query($connect,$sql);
mysqli_close($connect);
 header("Location: ../paneladm.php?noweslowo=$id_dzial");
 ?>
