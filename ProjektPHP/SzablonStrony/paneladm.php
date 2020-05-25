<?php

require_once 'php/czyszczenie_sesji.php';
if ($_SESSION['uprawnienia']==1) {
}else {
header("Location: logowanie.php");
}

 ?>

<!DOCTYPE html>
<html lang="pl" dir="ltr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style/home.css">
    <link rel="stylesheet" href="style/mainlayout.css">
    <link rel="stylesheet" href="style/paneladm.css">
  <title>Quizletor</title>
</head>



  <body>
    <div class="container ">
      <!-- menu glowne -->
      <div class="row rowek static-top">
        <div class="col-6 col-xl-3">
          <button type="button" class="przyciskimenu btn btn-primary" >
            <img src="grafika/logo.png" alt="Logo">
          </button>
        </div>

        <div class="col-4 col-xl-3">
        <a href="home.php">  <button type="button" class="przyciskimenu btn btn-primary" >
            <img src="grafika/home.png" alt="Home">
          </button> </a>
        </div>
        <div class="col-4 col-xl-3">
            <a href="logowanie.php"> <button type="button" class="przyciskimenu btn btn-primary"><img src="grafika/login.png" alt="Logowanie"></button> </a>
        </div>
        <div class="col-4 col-xl-3">
          <a href="rejestracja.php">  <button type="button" class="przyciskimenu btn btn-primary"><img src="grafika/register.png" alt="Rejestracja" ></button> </a>
        </div>


      </div>


    <!--- menu admian -->
  <div class="row">
    <div class="col-12 col-xl-3 fiszka rounded">
        <h3>Co chcesz zrobic</h3>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Wyjdz z panelu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?zarzadzaj=continue">Zarządzaj użytkownikami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?wyswietldzial=continue">Wyswietl działy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?nowydzial=continue">Nowy dział</a>
          </li>

        </ul>
    </div>
    <div class="col-12 col-xl-2 ">

    </div>
    <div class="col-12 col-xl-6 wybor">

      <?php
      // co sie wyswietla bez klikania
      if(!isset($_GET['updateID']) && !isset($_GET['zarzadzaj']) && !isset($_GET['nowydzial']) && !isset($_GET['wyswietldzial']) && !isset($_GET['noweslowo']) && !isset($_GET['wyswietlslowka']) && !isset($_GET['nowetlumaczenie'])){
      echo '<blockquote class="blockquote text-center text-light bg-dark rounded">';
      echo '<p class="mb-0"> No cóż, mogło być gorzej, ale też mogło być dużo lepiej. </p>';
      echo ' <footer class="blockquote-footer">Biblo Baggins </footer>';
      echo "</blockquote>";
      echo '<a href="https://youtu.be/uFqPamPb96Q?t=15&#disablekb=1&controls=0" target="_blank"><img src="grafika/jezyk.png" alt="Logo" class="rounded mx-auto d-block "></a> ';
      }
// aktualizuj uzytkownikow
      if (isset($_GET['updateID'])) {
        require_once 'php/polaczenie.php';
        $connect = mysqli_connect($host, $db_user, $db_password, $db_name);
        $id = $_GET['updateID'];
        $sql = "SELECT * FROM `uzytkownik` where `id_uzytkownik`=$id";
        $result = mysqli_query($connect,$sql);
        $user = mysqli_fetch_assoc($result);
        mysqli_close($connect);
        $login = $user['login'];
        $czy_adm =$user['czy_administrator'];
        echo<<<UPDATE

        <table class="table table-striped table-dark rounded przesun" >
        <tr><td colspan="3"> <h3 class="text-light bg-dark text-center">Aktualizuj uzytkownika</h3> </td></tr>
        <tr>
        <th scope="col">Login</th>
        <th scope="col">Czy Administrator?</th>
        <th scope="col">Wykonaj</th>
        </tr>
        <tr>
        <form class="" action="paneladmina/aktualizuj.php" method="post">
                <input type="hidden" name="id" value="$id">
          <td> <input type="text" name="login" value="$login" class="form-control"> </td>
        <td>  <input type="text" name="czy_administrator" value="$czy_adm" class="form-control"> </td>

        <td>  <input type="submit" name="" value="Update" class="form-control"> </td>
        </form>
      </tr>

        </table>
UPDATE;
      }
      // sekcja uzytkownikow
if(isset($_GET['zarzadzaj'])){
      $iduser =  $_SESSION['id_uzytkownik'];
      // wyswietlanie uzytkownikow
      require_once 'php/polaczenie.php';
      $connect = mysqli_connect($host, $db_user, $db_password, $db_name);
      $sql = "SELECT * FROM `uzytkownik` where  id_uzytkownik != $iduser";
      $result = mysqli_query($connect,$sql);
      echo<<<TABLE
      <table class="table table-striped table-dark rounded przesun" >
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Login</th>
          <th scope="col">Czy Administrator?</th>
          <th scope="col">Data utworzenia</th>
          <th scope="col">Usun użytkownika</th>
          <th scope="col">Aktualizuj użytkownika</th>
        </tr>

TABLE;
      while ($row = mysqli_fetch_assoc($result)) {
          echo<<<ROW
          <tr>
            <td>$row[id_uzytkownik]</td>
            <td>$row[login]</td>
            <td>$row[czy_administrator]</td>
            <td>$row[data_utworzenia]</td>
            <td><a href="paneladmina/usun.php?id_uzytkownik=$row[id_uzytkownik]">Usun</a></td>
            <td><a href="?updateID=$row[id_uzytkownik]">Aktualizuj</a></td>
          </tr>

ROW;
      }
      echo "</table>";
      mysqli_close($connect);

    }else if(isset($_GET['nowydzial'])) {

      require_once 'php/polaczenie.php';
      $connect = mysqli_connect($host, $db_user, $db_password, $db_name);



      echo<<<NOWYDZIAL
      <table class="table table-striped table-dark rounded przesun" >
      <tr><td colspan="3"> <h3 class="text-light bg-dark text-center">Dodaj nowy dział</h3> </td></tr>
      <tr>
      <th scope="col">Nazwa działu</th>
      <th scope="col">Do jakiego kursu nalezy</th>
      <th scope="col">Wykonaj</th>
      </tr>
      <tr>
      <form class="" action="paneladmina/nowy_dzial.php" method="post">

        <td>
            <input type="text" name="nazwa" value="" class="form-control">
        </td>
        <td>
            <select class="form-control" id="exampleFormControlSelect1" name="dzial">
NOWYDZIAL;
          // nazwy kursow
            $sql = "SELECT * FROM `kurs`";
            $result = mysqli_query($connect,$sql);
            while ( $row = mysqli_fetch_assoc($result)) {
              echo '<option value="'.$row['id_kursu'].'">'.$row['nazwa_kursu'].'</option>';
            }


echo<<<NOWYDZIAL
            </select>
        </td>

      <td>
          <input type="submit" name="" value="Dodaj" class="form-control">
      </td>
      </form>
    </tr>

      </table>
NOWYDZIAL;
}
if(isset($_GET['wyswietldzial'])){

      // wyswietlanie działow
      require_once 'php/polaczenie.php';
      $connect = mysqli_connect($host, $db_user, $db_password, $db_name);
      $sql = "SELECT `id_dzial`,`nazwa_dzialu`, `kurs`.`nazwa_kursu` FROM `dzial` INNER JOIN `kurs` ON `kurs`.`id_kursu`=`dzial`.`id_kursu`";
      $result = mysqli_query($connect,$sql);
      echo<<<TABLE
      <table class="table table-striped table-dark rounded przesun" >
        <tr>
          <th scope="col">Nazwa działu</th>
          <th scope="col">Nazwa kursu</th>
          <th scope="col" colspan="2" >Wykonaj</th>

        </tr>

TABLE;
      while ($row = mysqli_fetch_assoc($result)) {
          echo<<<ROW
          <tr>
            <td>$row[nazwa_dzialu]</td>
            <td>$row[nazwa_kursu]</td>
              <td><a href="?noweslowo=$row[id_dzial]">Dodaj słowo</a></td>
              <td><a href="?wyswietlslowka=$row[id_dzial]&nazwadzialu=$row[nazwa_dzialu]">Wyswietl słówka</a></td>
          </tr>

ROW;
      }
      echo "</table>";
      mysqli_close($connect);
}





// dodawanie nowego slowa do dzialu
if(isset($_GET['noweslowo'])){
  $id_dzial = $_GET['noweslowo'];

  echo<<<NOWESLOWO
  <table class="table table-striped table-dark rounded przesun" >
  <tr><td colspan="1"> <h3 class="text-light bg-dark text-center">Dodaj nowe słowo</h3><td><a href="?wyswietldzial=tak">Cofnij </a> </td> </td></tr>
  <tr>
    <th scope="col">Słowo</th>
    <th scope="col">Wykonaj</th>
  </tr>
  <form class="" action="paneladmina/dodajslowo.php" method="post">
      <input type="hidden" name="id_dzial" value="$id_dzial">
    <td>
        <input type="text" name="slowo" value="" class="form-control">
    </td>
    <td>
      <input type="submit" name="" value="Dodaj" class="form-control">
    </td>
    </tr>
    </form>
    </table>
NOWESLOWO;
}
// wyswietlanei slowek
if(isset($_GET['wyswietlslowka'])){

$id_dzialu = $_GET['wyswietlslowka'];
//echo $id_dzialu;
$nazwa_dzialu = $_GET['nazwadzialu'];
require_once 'php/polaczenie.php';
$connect = mysqli_connect($host, $db_user, $db_password, $db_name);

$sql = "SELECT `slowo`.`id_slowo`, `slowo`, `tlumaczenie`.`tlumaczenie`, `jezyki`.`nazwa_jezyka`  FROM `slowo` LEFT JOIN `tlumaczenie` on `tlumaczenie`.`id_slowo` = `slowo`.`id_slowo` LEFT JOIN `jezyki` on `jezyki`.`id_jezyka`=`tlumaczenie`.`id_jezyka` where `id_dzial` like $id_dzialu";
$result = mysqli_query($connect,$sql);

echo<<<WYSWIETLANIESLOWEK
<table class="table table-striped table-dark rounded przesun" >
<tr><td colspan="5"> <h3 class="text-light bg-dark text-center">$nazwa_dzialu</h3></td> <td><a href="?wyswietldzial=tak">Cofnij </a> </td></tr>
<tr>
  <th scope="col">ID Słowa</th>
  <th scope="col">Słowo</th>
  <th scope="col">Dodaj tłumaczenie</th>
  <th scope="col">Tłumaczenie</th>
  <th scope="col">Język</th>
  <th scope="col">Akcja</th>
</tr>
WYSWIETLANIESLOWEK;
while ($row=mysqli_fetch_assoc($result)) {
  echo "<tr>";
    echo "<td>".$row['id_slowo']."</td>";
    echo "<td>".$row['slowo']."</td>";
echo<<<TLUMACZENIE
      <td><a href="?nowetlumaczenie=$row[id_slowo]&slowo=$row[slowo]&id_dzialu=$id_dzialu&nazwa_dzialu=$nazwa_dzialu">Dodaj tłumaczenie</a></td>

      <td>$row[tlumaczenie]</td>
      <td>$row[nazwa_jezyka]</td>

      <td><a href="paneladmina/usunslowo.php?id_slowo=$row[id_slowo]&slowo=$row[slowo]&id_dzialu=$id_dzialu&nazwa_dzialu=$nazwa_dzialu">Usun</a></td>
TLUMACZENIE;
  echo "</tr>";
}
echo "</table>";
}

if(isset($_GET['nowetlumaczenie'])){

  require_once 'php/polaczenie.php';
  $connect = mysqli_connect($host, $db_user, $db_password, $db_name);
// potrzebne mi
$id_dzialu = $_GET['id_dzialu'];
$nazwa_dzialu = $_GET['nazwa_dzialu'];
//

  $id_slowo = $_GET['nowetlumaczenie'];
  $slowo = $_GET['slowo'];
  echo<<<NOWETLUMACZENIE
  <table class="table table-striped table-dark rounded przesun" >
  <tr><td colspan="3"> <h3 class="text-light bg-dark text-center">$slowo</h3> </td></tr>
  <tr>
    <th scope="col">Tłumaczenie</th>
    <th scope="col">Jezyk tlumaczenia</th>
    <th scope="col">Wykonaj</th>
  </tr>
  <form class="" action="paneladmina/dodaj_tlumaczenie.php" method="post">
      <input type="hidden" name="id_dzialu" value="$id_dzialu">
      <input type="hidden" name="nazwa_dzialu" value="$nazwa_dzialu">

      <input type="hidden" name="id_slowo" value="$id_slowo">
    <td>
        <input type="text" name="tlumaczenie" value="" class="form-control">
    </td>
    <td>
      <select class="form-control" id="exampleFormControlSelect1" name="id_jezyka">
NOWETLUMACZENIE;
    // jezyk tlumaczenia


    $sql = "SELECT * FROM `jezyki`";
    $result = mysqli_query($connect,$sql);
    while ( $row = mysqli_fetch_assoc($result)) {
      echo '<option value="'.$row['id_jezyka'].'">'.$row['nazwa_jezyka'].'</option>';
    }
    echo<<<NOWETLUMACZENIE
    </select>
    </td>
    <td>
      <input type="submit" name="" value="Dodaj" class="form-control">
    </td>
    </tr>
    </form>
    </table>
NOWETLUMACZENIE;
mysqli_close($connect);
}
?>




    </div>

</div>
  </div>
  </body>
</html>
