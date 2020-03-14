<?php
  session_start();
  if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['birthday'])) {

    require_once('../connect.php');

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $birthday = $_POST['birthday'];
    $id =  $_POST['id'];

    $sql = "";

    mysqli_query($conn,$sql);
    mysqli_close($conn);

  }
  else {
    $_SESSION['error'] = "Uzupelnij poprawnie dane";
  }
  header("Location: ../index.php");


 ?>
