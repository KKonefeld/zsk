<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Bazy - uprawnienia</title>
    <style media="screen">
      .red{
        color: red;
      }

    </style>


  </head>
  <body>
    <?php
      require_once("./connect.php");

      //$sql = "select * from user";
      $sql = "select id, name, surname, birthday from user";

      if ($result = mysqli_query($conn, $sql)) {
        //echo "prawidłowe zapytanie";


      echo <<<TABLE
      <table>
        <tr>
          <th>Imię</th>
          <th>Nazwisko</th>
          <th>Data urodzenia</th>
          <th>Rok urodzenia</th>
          <th>Usuń użytkownika</th>
          <th>Aktualizuj użytkownika</th>
        </tr>
TABLE;

      while ($row = mysqli_fetch_assoc($result)) {
        $year = substr($row['birthday'],0,4);
        echo <<<ROW
        <tr>
          <td>$row[name]</td>
          <td>$row[surname]</td>
          <td>$row[birthday]</td>
          <td>$year</td>
          <td><a href="./scripts/delete_user.php?id=$row[id]">Usuń</a></td>
          <td><a href=".?updateId=$row[id]">Aktualizuj</a></td>
        </tr>
ROW;
      }
      echo "</table>";
      if (isset($_SESSION['error'])) {
        echo '<p class="red">'.$_SESSION['error'].'</p>';
        unset($_SESSION['error']);

      }

      echo<<<FORMADDUSER
      <h3>Dodawanie uzytkownika </h3>
      <form class="" action="scripts/add_user.php" method="post">
        <input type="text" name="name" value="" placeholder="imie"><br>
        <input type="text" name="surname" value="" placeholder="nazwisko"><br>
        <input type="date" name="birthday" value=""><br>
        <input type="submit" name="button" value="Dodaj uzytkownika">
      </form>
    FORMADDUSER;

      if (isset($_GET['updateId'])) {

        $id = $_GET['updateId'];
        $sql = "SELECT * FROM user where id='$id'";
        $result =  mysqli_query($conn,$sql);
        $user = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        $name = $user['name'];
        $surname = $user['surname'];
        $birthday = $user['birthday'];
        echo<<<FORMUPDATEUSER
        <h3>Aktualizacja użytkownia</h3>
        <form class="" action="scripts/update_user.php" method="post">
        <input type="text" name="name" value="$name"><br>
        <input type="text" name="surname" value="$surname"><br>
        <input type="date" name="birthday" value="$birthday"><br>
        <input type="hidden" name="id" value="$id"><br>
        <input type="submit" name="button" value="Aktualizuj uzytkownika">
        </form>
        FORMUPDATEUSER;
      }

      }else {
        echo "błędne zapytanie";
      }
     ?>



  </body>
</html>
