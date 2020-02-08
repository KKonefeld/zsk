<?php
 session_start();
  require_once 'polaczenie.php';

  $connect = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($connect->connect_errno!=0) {
      echo "Blad polaczenia z baza danych. Skontaktuj sie z administratorem";
    }else {

      $login = $_POST['login'];
      $password = $_POST['haslo'];

      $login = htmlentities($login, ENT_QUOTES, "UTF-8");



    //  $sql = "SELECT * FROM `uzytkownik` WHERE login='$login' && haslo='$password'";

      if ($result = @$connect->query(sprintf("SELECT * FROM `uzytkownik` WHERE login='%s'",
      mysqli_real_escape_string($connect,$login)
      ))) {
//$2y$10$gmsPmXsSc9K3lGdfSvzbmucAXtD84s1JwpIZKtoaIlvfZbVFmpaLK
          if ($result->num_rows>0) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['haslo'])) {




              $_SESSION['login'] = $row['login'];
              $_SESSION['uprawnienia'] = $row['czy_administrator'];
              header('Location: ../home.php');


                $result->close();
              }else {
                $_SESSION['blad']= '<span style="color:red">Blędny login lub hasło</span>';
                header('Location: ../logowanie.php');
              }

          }else {
            $_SESSION['blad']= '<span style="color:red">Blędny login lub hasło</span>';
            header('Location: ../logowanie.php');
          }


      }


      mysqli_close($connect);
    }




 ?>
