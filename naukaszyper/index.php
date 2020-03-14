<!DOCTYPE html>

<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      #xd{
        border: 2px solid red;
      }
      #xdd{
        border: 2px dashed blue;
      }
    </style>
  </head>
  <body>
    <form method="post">
         <input type="text" name="login" >
         <input type="text" name="imie" >
         <input type="text" name="nazwisko" >
         <input type="submit" value="dodaj" name="klik">
       </form>
    <?php
        $polaczenie = mysqli_connect('localhost','root','','nauka');

    /*    if ($polaczenie) {
          $sql = "SELECT `id`, `login`, `imie`, `nazwisko` FROM `dane`";
          $result = mysqli_query($polaczenie,$sql);
            echo '<table id="xd">';
          while ($row =  mysqli_fetch_assoc($result))
          {
            echo "<tr>".'<td id="xdd">'.$row['login']."</td></tr>";
          }
            echo "</table>";
        } */

        if (isset($_POST['klik'])){
            if (isset($_POST['login'])) {
              $login = $_POST['login'];
              $imie = $_POST['imie'];
              $nazwisko = $_POST['nazwisko'];

              $sqldo = "INSERT INTO `dane`(`login`, `imie`, `nazwisko`) VALUES ('$login','$imie','$nazwisko')";
              mysqli_query($polaczenie,$sqldo);
              echo '<script type="text/javascript">
                alert("dodano");
              </script>';
              header('Location: index.php');
              exit();
            }

        }

        mysqli_close($polaczenie);

     ?>




  </body>
</html>
