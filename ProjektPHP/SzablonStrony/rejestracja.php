<!doctype html>
<?php
session_start();

 ?>

<html lang="pl">
  <head>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
    <h1><?php if (isset($_SESSION['udana'])) {
      echo $_SESSION['udana'];
      unset($_SESSION['udana']);
      header("refresh:2;url=logowanie.php");
    }else {
      echo "Zarejestruj się";
    } ?></h1>
      <form class="" action="php/rejestracja.php" method="post">



    <label for="email"><?php if (isset($_SESSION['blademail'])) {
      echo $_SESSION['blademail'];
      unset($_SESSION['blademail']);
    }else {
      echo "Podaj email";
    } ?></label>
    <input type="email" id="email" class="form-control" name="login" value="" placeholder="email">
    <label for="haslo"><?php if (isset($_SESSION['bladhaslad'])) {
      echo $_SESSION['bladhaslad'];
      unset($_SESSION['bladhaslad']);
    }else {
      echo "Podaj haslo";
    } ?></label>
    <input type="password" id="haslo" class="form-control" name="haslo" value="" placeholder="haslo">
    <label for="haslopowt"><?php if (isset($_SESSION['bladhasla'])) {
      echo $_SESSION['bladhasla'];
      unset($_SESSION['bladhasla']);
    }else {
      echo "Powtórz hasło";
    } ?></label>
    <input type="password" id="haslopowt" class="form-control" name="haslopowt" value="" placeholder="powtorzhaslo">
<br>
    <div class="custom-control custom-checkbox mr-sm-2">
        <input type="checkbox" class="custom-control-input" id="customControlAutosizing" name="regulamin">
        <label class="custom-control-label" for="customControlAutosizing"><?php if (isset($_SESSION['bladregulamin'])) {
          echo $_SESSION['bladregulamin'];
          unset($_SESSION['bladregulamin']);
        }else {
          echo "Akceptuję regulamin";
        } ?></label>
    </div>
    <br>
    <label for="captacha"><?php if (isset($_SESSION['bladcaptacha'])) {
      echo $_SESSION['bladcaptacha'];
      unset($_SESSION['bladcaptacha']);
    }?></label>
    <div id="captacha" class="g-recaptcha" data-sitekey="6LfrGdYUAAAAAIKzTtYMpzKB8OKnCo26MSenw9Qe"></div>
    <br>
    <input class="btn btn-primary ziel" type="submit" value="Zarejestruj">

        </form>
    <br>
    </div>

  </div>
  <div class="row">
      <div class="col-12 col-xl-12 przerywnik"></div>
  </div>
</div>
<div id="ikony">Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"             title="Flaticon">www.flaticon.com</a></div>
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
