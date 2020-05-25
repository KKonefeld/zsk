<?php
session_start();
// przy zmianie kursu czyscimy sesje
$login = $_SESSION['login'];
$uprawnienia =$_SESSION['uprawnienia'];
$id_uzytkownik = $_SESSION['id_uzytkownik'];
session_unset();
$_SESSION['login'] = $login;
$_SESSION['uprawnienia'] = $uprawnienia;
$_SESSION['id_uzytkownik'] =$id_uzytkownik;
 ?>
