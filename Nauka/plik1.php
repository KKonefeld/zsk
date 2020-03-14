<?php
session_start();
$_SESSION['nazwa']= "LilPip";

setcookie('imie','Januszyslaw', time()+60*60*24);
 ?>

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <form name="f" method="post">
      <input type="text" name="ciastko" value="" placeholder="Podaj ulubione ciastko">
      <input type="submit" name="" value="Zatwierdz">
    </form>

<?php
// Uzytkownik laczy sie z baza danych i dodaje nowe rekordy
  if (!empty($_POST['ciastko'])) {
    $zmienna =  $_POST['ciastko'];
    $turbo = $_SESSION['nazwa'];
    
    $connect = mysqli_connect('localhost','root','','ciastka');
    $sql2 = "INSERT INTO marka(`nazwa`) VALUES ('$turbo')";

    $sql = "SELECT * FROM `marka`";
    $sql3 = "SELECT * FROM `smak`";
    mysqli_query($connect,$sql2);
    $result = mysqli_query($connect,$sql);
    $result3 = mysqli_query($connect,$sql3);

    while ($row =  mysqli_fetch_assoc($result)) {
      echo $row['nazwa'],"<br>";
    }
    while ($row =  mysqli_fetch_assoc($result3)) {
      echo $row['smak']," __ ",$row['cos_tam'],"<br>";
    }

    echo "<pre>";
    echo $_COOKIE['imie'];
    echo "</pre>";

    mysqli_close($connect);
  }

 ?>



  </body>
</html>
