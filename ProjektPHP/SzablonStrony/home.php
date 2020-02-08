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

    <link rel="stylesheet" href="style/home.css">
      <link rel="stylesheet" href="style/mainlayout.css">
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
      <hr id="ukrytenapc">
<!-- panel usera -->
      <div class="row">
        <div class="col-12 col-xl-6 rounded panel"> </div>
        <div class="col-12 col-xl-6 rounded panel">
          <p class="text-center powitanie rounded">Witaj :   <?php
            if ($_SESSION['uprawnienia']==1) {
                echo $_SESSION['login']."(A)";
            }else {
            echo $_SESSION['login']."(U)";
            }



            ?>

            <a href="php/logout.php" class="wyloguj">
              <span class="">&#128273; Wyloguj się!</span>
            </a>
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
                <a class="nav-link" href="#">Linux</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Windows</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">UTK</a>
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
                <a class="nav-link" href="#">Sieci</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Urzadzenia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Protokoly</a>
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
                <a class="nav-link" href="#">PHP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">WebDesign</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">BazyDanych</a>
              </li>
            </ul>
            <!-- Tu sie koncza podlinki -->
          </div>
        </nav>


      </div>

      <div class="col-0 col-xl-2">

      </div>

      <div class="col-12 col-xl-6 fiszka rounded">


          <p class="text-center naglowek">Wybrano kurs : </p>
          <hr>
          <p class="text-left">Jeżozwierz</p>
          <p class="text-left">/wymowa/</p>
          <label for="slowko">Podaj tłumaczenie</label>
          <input type="text" id="slowko " class="form-control" name="" value="" >
          <button type="button" class="niewiem btn">Nie wiem</button>
          <button type="button" class="sprawdz btn">Sprawdz</button>

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
  <div class="footer text-center py-3">Kamil Konefeld 4C
    <br> kamiskon@gmail.com
  </div>



</footer>
<!-- KONIEC STOPki -->

  </body>
</html>
