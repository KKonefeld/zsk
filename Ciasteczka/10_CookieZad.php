<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="imie" placeholder="imie">
      <input type="text" name="nazwisko" placeholder="nazwisko">
      <input type="submit" name="Klik">
    </form>

<?php
session_start();
if(!empty($_POST["imie"]) && !empty($_POST["nazwisko"])){
$imie = $_POST["imie"];
$nazwisko = $_POST["nazwisko"];

  setcookie('imie', $imie, time()+60*60*48);
  $_SESSION["nazwisko"] = $nazwisko;

  echo "Imię: ".$_COOKIE['imie']."<br>";

  echo "Nazwisko: ".$_SESSION["nazwisko"];
}


//użytkownik podaje swoje imie i nazwisko w formularzu utwórz zmienną sesyjną w której będzie przechowywane imię oraz cookie dla nazwiska na 2 dni wyświetl dane pod formularzem pobierając je ze zmiennej sesyjnej i ciasteczka: Imie.. Nazwiska:
?>
</body>
</html>
