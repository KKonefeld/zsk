<?php
  session_start();
  if (isset($_POST['login'])) {
    $poprawne_dane = true;
    // email jest walidowany przez html5
    $email = $_POST['login'];

    //sprawdzanie poprawnosci hasla
    $haslo = $_POST['haslo'];
    $haslopowt = $_POST['haslopowt'];

    if (strlen($haslo)<8 || strlen($haslo)>25) {
      $poprawne_dane = false;
      $_SESSION['bladhaslad']='<span style="color:red">Haslo musi zawierac 8-20 znakow</span>';
    }
    if($haslopowt!=$haslo)
    {
      $poprawne_dane = false;
      $_SESSION['bladhasla']='<span style="color:red">Hasla nie są identyczne</span>';
    }

    $haslo_hash = password_hash($haslo, PASSWORD_DEFAULT);

    if (!isset($_POST['regulamin'])) {
      $poprawne_dane = false;
      $_SESSION['bladregulamin']='<span style="color:red">Musisz zaakceptować regulamin</span>';

    }



    //captacha
  //  $c_klucz = "6LfrGdYUAAAAANQWE4fRsM-vz4_1LowqP-rUACkR";

  //  if($google_response->success==false)
  //    {
    //    $poprawne_dane = false;
    //    $_SESSION['bladcaptacha']='<span style="color:red">Potwierdz ze nie jestes botem</span>';
  //    }


      // polaczenie z baza danych
      require_once 'polaczenie.php';
      mysqli_report(MYSQLI_REPORT_STRICT);

      try
        {
          $connect = new mysqli($host, $db_user, $db_password, $db_name);

          if ($connect->connect_errno!=0)
            {

              throw new Exception("Blad polaczenia z baza danych");

            }else
            {
              $email = htmlentities($email, ENT_QUOTES, "UTF-8");
              // sprawdzanie emailka
              $sql = sprintf("SELECT id_uzytkownik FROM uzytkownik where login='%s'",mysqli_real_escape_string($connect,$email));
              $result = mysqli_query($connect, $sql);
              // wyjatek
              if(!$result)
              {
                throw new Exception("Blad sql");

              }
              $same_email = $result->num_rows;
              if ($same_email>0)
              {
                $poprawne_dane = false;
                $_SESSION['blademail']='<span style="color:red">Ten email juz istnieje</span>';
              }

              // wpisywanie do bazy// blad
              if ($poprawne_dane)
                {



                  $today_date = date("Y-m-d");

                  $sql_dodawanie = sprintf("insert into uzytkownik(login, haslo, czy_administrator, data_utworzenia) values ('%s','%s',0,'$today_date')",mysqli_real_escape_string($connect,$email),mysqli_real_escape_string($connect,$haslo_hash));
                  if (mysqli_query($connect, $sql_dodawanie)) {
                    header('Location: ../rejestracja.php');
                    $_SESSION['udana'] = '<span style="color:red">Rejestracja udana</span>';
                  }else {

                    throw new Exception("Error Processing Request", 1);

                  }


                }else {
                  header('Location: ../rejestracja.php');
                }

              mysqli_close($connect);
            }

      } catch (Exception $e)
        {
          echo "Wystąpił błąd! Skontaktuj się z administratorem";
        
        }



  // przekierowania

  }



 ?>
