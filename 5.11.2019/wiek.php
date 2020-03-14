<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" method="post">
      <label for="xd">Podaj liczbe czlonkow rodziny</label>
      <input class="xd" type="number" name="ilosc" value="">
      <input type="submit" name="wysylanie" value="Zatwierdz">
    </form>



    <?php
    function wypisz($i)
    {
      echo "<input type=\"number\" min=\"1\" name=\"$i\" placeholder=\"podaj wiek osoby ", $i+1, "\">";
    }
    if(isset($_POST["wysylanie"]))
    {
      $ilosc = $_POST["ilosc"];
      if ($ilosc<1 || $ilosc>70 )
      {
        echo "Liczba członków rodziny musi być w zakresie od 1-70";
      }
      else{
        echo "<form method='post'>";
        for($i=0;$i<$ilosc;$i++){
          wypisz($i);
        }
        echo "<input type='hidden' name='ilosc' value='$ilosc'>";
        echo "<input type='submit' name='wylicz' value='Zatwierdz'>";
      }
    }
    if (isset($_POST['wylicz'])) {
      $ilosc = $_POST["ilosc"];
      $minimalny = $_POST[0];
      $maksymalny = $_POST[0];
      $sumawieku = 0;
      for($i=0;$i<$ilosc;$i++){
        $obecny = $_POST["$i"];
        if ($obecny<$minimalny) {
          $minimalny = $obecny;
        }
        if($obecny>$maksymalny)
        {
          $maksymalny = $obecny;
        }
        $sumawieku += $obecny;
      }

      $srednia = $sumawieku/$ilosc;
      echo <<< PODSUMOWANIE
      <ul>
      <li>Średni wiek: $srednia lat</li>
      <li>Najmłodsza osoba ma $minimalny lat</li>
      <li>Najstarsza osoba ma $maksymalny lat</li>
      </ul>
      PODSUMOWANIE;

    }



  //  echo '</form>';
     ?>




  </body>
</html>
