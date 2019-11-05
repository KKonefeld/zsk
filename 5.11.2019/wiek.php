<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" method="post">
      <label for="xd">Podaj liczbe czlonkow rodziny</label>
      <input class="xd" type="number" name="rodzina" value="">
      <input type="submit" name="" value="Zatwierdz">
    </form>



    <?php
      if (!empty($_POST['rodzina']))
      {
        $ilu = $_POST['rodzina'];
          echo '<form class="" method="post">';
          for ($i=0; $i <$ilu ; $i++)
          {
            echo "<input type=\"number\" name=\"rodzinax$i\"><br>";
          }
          echo '<input type="submit" value="Wyslij"><br>';
          echo '</form>';


            $suma = 0;

            for ($i=0; $i <$ilu ; $i++)
            {
              echo $_POST["rodzinax2"];
            }
            echo $suma;
echo $ilu;
      }
     ?>


  </body>
</html>
