<?php

    if (isset($_GET['dzial'])) {

        require_once '../php/polaczenie.php';
        $connect = mysqli_connect($host, $db_user, $db_password, $db_name);


      $nazwa_dzialu = $_GET['dzial'];


      $sql = "SELECT `id_dzial`, `kurs`.`nazwa_kursu` from `dzial` INNER JOIN `kurs` on `kurs`.`id_kursu`=`dzial`.`id_kursu` WHERE`dzial`.`nazwa_dzialu` like '$nazwa_dzialu'";
      $result = mysqli_query($connect,$sql);
      $row = mysqli_fetch_assoc($result);

      $id_dzial = $row['id_dzial'];
      $nazwa_kursu = $row['nazwa_kursu'];

      require_once '../php/czyszczenie_sesji.php';
      // przy zmianie kursu czyscimy sesje



   header("location: ../home.php?id_dzial=$id_dzial&nazwa_dzialu=$nazwa_dzialu&nazwa_kursu=$nazwa_kursu");
    }
 ?>
