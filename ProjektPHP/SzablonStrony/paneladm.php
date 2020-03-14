<?php
session_start();
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
            <a class="nav-link" href="paneladmina/aktualizuj.php">Aktualizuj uzytkownikow</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">BazyDanych</a>
          </li>
        </ul>
    </div>
    <div class="col-12 col-xl-2 ">

    </div>
    <div class="col-12 col-xl-6 fiszka rounded">
        Co bedziesz robic
    </div>

</div>
  </div>
  </body>
</html>
