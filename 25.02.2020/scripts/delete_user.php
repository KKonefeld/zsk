<?php
  if (isset($_GET['id'])) {
    require_once('../connect.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM `user` WHERE `user`.`id` = '$id'";
    mysqli_query($conn, $sql);
  }
  header('location: ../');
 ?>
