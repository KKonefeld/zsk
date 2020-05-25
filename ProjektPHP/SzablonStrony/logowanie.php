<!doctype html>
<?php
session_start();
if (isset($_SESSION['login'])) {
  header('Location:  home.php');
}
 ?>
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
    <link rel="stylesheet" href="style/logowanie.css">
    <link rel="stylesheet" href="style/mainlayout.css">
    <title>Quizletor</title>



  </head>
  <body>


    <div class="container ">

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
  <div class="row">
    <div class="col-xl-6 col-11 rounded">
    <h1>
      <?php
          if (!isset($_SESSION['blad'])) {
            echo "Zaloguj się!";
          }else{
            echo  $_SESSION['blad'];
            unset($_SESSION['blad']);
          }

       ?>
    </h1>
          <form class="" action="php/logowanie.php" method="post">


    <label for="email">Podaj e-mail</label>
    <input type="email" id="email" class="form-control" name="login" value="" placeholder="login">

    <label for="haslo">Podaj haslo</label>
    <input type="password" id="haslo" class="form-control" name="haslo" value="" placeholder="haslo">
    <br>

    <input class="btn btn-primary" type="submit" value="Zaloguj">

    <br>

          </form>

    </div>

  </div>
  <div class="row">
      <div class="col-12 col-xl-12 przerywnik"></div>
  </div>
</div>
<div id="ikony">Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"             title="Flaticon">www.flaticon.com</a></div>
<!-- stopka -->

<!-- stopka -->
<footer class="page-footer">

  <!-- zawartosc -->
  <div class="footer text-center py-3">Kamil Konefeld 4C © 2019-2020
    <br> kamiskon@gmail.com
  </div>



</footer>
<!-- KONIEC STOPki -->
  </body>
</html>
