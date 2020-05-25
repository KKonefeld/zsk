<?php
session_start();

if (!isset($_SESSION['login'])) {
  header('Location:  logowanie.php');

}

 ?>

<!doctype html>
<html lang="pl">
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
  <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <link rel="stylesheet" href="style/home.css">
      <link rel="stylesheet" href="style/mainlayout.css">
    <title>Quizletor</title>

    <script>
    $(document).ready(function(){
      $('[data-toggle="popover"]').popover();
    });
    </script>


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
      <hr id="ukrytenapc">
<!-- panel usera -->
      <div class="row">

        <div class="col-12 col-xl-6 rounded panel"> </div>
        <div class="col-12 col-xl-6 rounded panel">
          <p class="text-center powitanie rounded">Witaj :   <?php
            if ($_SESSION['uprawnienia']==1) {
                echo $_SESSION['login']."<a href='paneladm.php'>(A)</a>";
            }else {
            echo $_SESSION['login']."(U)";
            }



            ?>

            <a href="php/logout.php" class="wyloguj">
              <span class="">&#128273; Wyloguj się!</span>
            </a>
            <!--  <label for="exampleFormControlSelect1">Wybierz język nauki</label>
          <select class="form-control-sm rounded" id="exampleFormControlSelect1">
              <option>Angielski</option>
              <option>Hiszpanski</option>
            </select> -->

          </p>
        </div>
      </div>

  <div class="row">
      <div class="kursmenu col-12 col-xl-4  rounded">

        <!-- inicjacja hamburger menu -->
        <nav class="navbar wyborkursu rounded">

          <!-- Tytul listy rozwijanej -->
          <a class="navbar-brand" href="#">E12</a>

          <!-- Strzalka od rozwijania -->
          <img src="grafika/strzalka.png" alt="" data-toggle="collapse" data-target="#navbarSupportedContent1">

          <!-- Ukryte, rozwijane warstwy menu -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent1">

            <!-- Podlinki -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="obslugaslowek/wybordzialu.php?dzial=Linux">Linux</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="obslugaslowek/wybordzialu.php?dzial=Windows">Windows</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="obslugaslowek/wybordzialu.php?dzial=UTK">UTK</a>
              </li>
            </ul>
            <!-- Tu sie koncza podlinki -->
          </div>
        </nav>
        <!-- inicjacja hamburger menu -->
        <nav class="navbar wyborkursu rounded">

          <!-- Tytul listy rozwijanej -->
          <a class="navbar-brand" href="#">E13</a>

          <!-- Strzalka od rozwijania -->
          <img src="grafika/strzalka.png" alt="" data-toggle="collapse" data-target="#navbarSupportedContent2">

          <!-- Ukryte, rozwijane warstwy menu -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent2">

            <!-- Podlinki -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link"  href="obslugaslowek/wybordzialu.php?dzial=Sieci">Sieci</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="obslugaslowek/wybordzialu.php?dzial=Urzadzenia">Urzadzenia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="obslugaslowek/wybordzialu.php?dzial=Protokoly">Protokoly</a>
              </li>
            </ul>
            <!-- Tu sie koncza podlinki -->
          </div>
        </nav>
        <!-- inicjacja hamburger menu -->
        <nav class="navbar wyborkursu rounded">

          <!-- Tytul listy rozwijanej -->
          <a class="navbar-brand" href="#">E14</a>

          <!-- Strzalka od rozwijania -->
          <img src="grafika/strzalka.png" alt="" data-toggle="collapse" data-target="#navbarSupportedContent3">

          <!-- Ukryte, rozwijane warstwy menu -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent3">

            <!-- Podlinki -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="obslugaslowek/wybordzialu.php?dzial=PHP">PHP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="obslugaslowek/wybordzialu.php?dzial=WebDesign">WebDesign</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="obslugaslowek/wybordzialu.php?dzial=BazyDanych">BazyDanych</a>
              </li>
            </ul>
            <!-- Tu sie koncza podlinki -->
          </div>
        </nav>


      </div>

      <div class="col-0 col-xl-2">

      </div>

      <div class="col-12 col-xl-6 fiszka rounded">



          <p class="text-center naglowek"><?php if (isset($_GET['nazwa_kursu'])) { $_SESSION['nazwa_kursu'] = $_GET['nazwa_kursu']; $_SESSION['nazwa_dzialu'] = $_GET['nazwa_dzialu'];
            echo "Wybrano kurs :".$_GET['nazwa_kursu']."/".$_GET['nazwa_dzialu'];

          }else {
            echo "Nie wybrano kursu";
          }
          if (isset($_SESSION['umiesz wszystkie']) &&   $_SESSION['umiesz wszystkie'] = 1) {
            echo '<p class="text-center text-danger bg-dark rounded"  >Umiesz wszystkie slowka! z działu '.$_GET['nazwa_dzialu'].'</p>';
          }
           ?></p>
          <hr>
          <?php if (isset($_GET['nazwadzialku'])){
          echo "twoja stara";
        }
          ?>
          <?php
            if (isset($_GET['id_dzial']) && !isset($_SESSION['ktore_slowo']))
            {

            $id_dzial = $_GET['id_dzial'];
            $_SESSION['iddzial'] = $id_dzial;
            require_once 'php/polaczenie.php';
            $connect = mysqli_connect($host, $db_user, $db_password, $db_name);
            $sql = "SELECT `slowo`.`id_slowo`, `slowo`.`slowo`, `tlumaczenie`.`tlumaczenie`, `tlumaczenie`.`id_tlumaczenia` FROM `slowo` inner join `tlumaczenie` on `tlumaczenie`.`id_slowo`= `slowo`.`id_slowo` WHERE `id_dzial` like $id_dzial ";
            $result =  mysqli_query($connect,$sql);
            $_SESSION['tablica_slow'] = array();

            while ($row = mysqli_fetch_assoc($result)){

              array_push($_SESSION['tablica_slow'],$row);
            }
             $_SESSION['ktore_slowo']=0;
            //print_r($_SESSION['tablica_slow']);
            }
           ?>

          <p class="text-left"><?php
          error_reporting(0);
          if (isset($_SESSION['tablica_slow'])) {
            echo $_SESSION['tablica_slow'][$_SESSION['ktore_slowo']]['slowo'];
          }else {
            echo "Mamy aktualnie problemy! Wróć później!";
          } ?></p>

          <form class="" action="obslugaslowek/sprawdzslowko.php" method="post">

          <p class="text-left text-danger"><?php try {


          if (isset($_GET['bledne'])) {
            echo "Podales bledne tlumaczenie, postaraj sie   ";
            echo '<button type="button" class="btn btn-warning btn-sm" data-toggle="popover" title="Tlumaczenie" data-content="'.$_SESSION['tablica_slow'][$_SESSION['ktore_slowo']]['tlumaczenie'].'"> Podpowiedz</button>';

          } if (isset($_GET['poprawnetlumaczenie'])) {
            echo $_SESSION['tablica_slow'][$_SESSION['ktore_slowo']]['tlumaczenie'];
            echo $_SESSION['ktore_slowo'];
          }

        } catch(Exception $e){
          echo "Mamy aktualnie problemy! Wróć później!";
        }?>

        </p>
          <label for="slowko">Podaj tłumaczenie</label>
          <input type="text" id="slowko " class="form-control" name="tlumaczenie_uzytkownika" value="" >


            <input type="submit" class="sprawdz btn" value="Przeslij">
          </form>


      </div>



  </div>
<div class="row">
    <div class="col-12 col-xl-12 przerywnik"></div>
</div>

</div>
<div id="ikony">Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"             title="Flaticon">www.flaticon.com</a></div>

<!-- stopka -->
<footer class="page-footer ">

  <!-- zawartosc -->
  <div class="footer text-center py-3">Kamil Konefeld 4C © 2019-2020
    <br> kamiskon@gmail.com
  </div>



</footer>
<!-- KONIEC STOPki -->

  </body>
</html>
