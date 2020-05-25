<?php
session_start();
require_once '../php/polaczenie.php';
$connect = mysqli_connect($host, $db_user, $db_password, $db_name);

$tlumaczenie_uzytkownika = $_POST['tlumaczenie_uzytkownika'];

$id_dzial =$_SESSION['iddzial'];
$nazwa_kursu = $_SESSION['nazwa_kursu'];
$nazwa_dzialu = $_SESSION['nazwa_dzialu'];

if ($_SESSION['tablica_slow'][$_SESSION['ktore_slowo']]['tlumaczenie'] == $tlumaczenie_uzytkownika) {
  $_SESSION['ktore_slowo']++;
  if (count($_SESSION['tablica_slow'])<=$_SESSION['ktore_slowo']) {
    $_SESSION['umiesz wszystkie'] = 1;
    $_SESSION['ktore_slowo']=0;
  }


  // dodawanie  tlumaczenia do zapamietania
  $idtlumaczenia = $_SESSION['tablica_slow'][$_SESSION['ktore_slowo']]['id_tlumaczenia'];
  $iduzytkownik = $_SESSION['id_uzytkownik'];
  // jezeli uzytkownik nauczyl sie juz slowka, pomija dodanie go do tablicy jako nowo nauczone
  $sql = "SELECT * FROM `tlumaczenieuzytkownik` WHERE `id_uzytkownik` = $iduzytkownik and `id_tlumaczenia` = $idtlumaczenia";
  $result = mysqli_query($connect,$sql);
  if (mysqli_num_rows($result) > 0) {
    // nic sie nie dzieje jezeli juz jest
  }else{
    // dodaje do bazy jako nowo nauczone
    $sql = "INSERT INTO `tlumaczenieuzytkownik`(`id_tlumaczenia`, `id_uzytkownik`, `czy_nauczone`) VALUES ('$idtlumaczenia','$iduzytkownik','1')";
    mysqli_query($connect,$sql);
  }



  //print_r($_SESSION['tlumaczenianauczone']);






 header("Location: ../home.php?id_dzial=$id_dzial&nazwa_kursu=$nazwa_kursu&nazwa_dzialu=$nazwa_dzialu");
}else {
  // blednie podane tlumaczenie
    header("Location: ../home.php?id_dzial=$id_dzial&nazwa_kursu=$nazwa_kursu&nazwa_dzialu=$nazwa_dzialu&bledne=tak");
}
  mysqli_close($connect);

 ?>
