<?php
  session_start();
  if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['birthday'])) {

    require_once('../connect.php');

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $birthday = $_POST['birthday'];

    $sql = "INSERT INTO `user`(`name`, `surname`, `birthday`) VALUES ('$name','$surname','$birthday')";

    mysqli_query($conn,$sql);
    mysqli_close($conn);

  }
  else {
    $_SESSION['error'] = "Uzupelnij poprawnie dane";
  }
  header("Location: ../index.php");


 ?>
