<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      function ShowArrayAssoc($tab)
      {
        foreach ($tab as $key => $value) {
          echo  $key, ' = > ',$value,' | ';
        }

      }


      //tablice asocjacyjne
      echo '<hr>';
      $data = array('name' => 'Janusz' , 'surname' => 'Nowak',
     'age' => 20 );

    ShowArrayAssoc($data);
    echo '<hr>';

    $student = array(
      array('Anna','Nowak',20),
      array('Tomasz'),
      array('Pawel','Nowak',20,'Poznan')
    );

    $xd = array('xd' =>dd, );

    $arrayName = array('xd' ,'xd' );

    function wyswietl($tab)
    {
      foreach ($tab as $key => $value) {
        foreach ($value as $indeks => $siala) {
          echo $siala,' ';
        }

      }
    }
    wyswietl($student);
    echo '<hr>';
    function forami($tab)
    {
      for ($i=0; $i <count($tab) ; $i++) {
          for ($j=0; $j <count($tab[$i]) ; $j++) {
              echo $tab[$i][$j];
          }
      }

    }
    forami($student);

    // funkcja wyswietlajaca tablice 3 wymiarowa

    // sortowanie

    echo "<hr><hr>";

    $tabliczka = array(10,5,11,3,2,6,7);
    ShowArrayAssoc($tabliczka);
    echo "<br>";
    //niemalejaco
    sort($tabliczka);
    ShowArrayAssoc($tabliczka);
    //nierosnace
    echo "<br>";
    rsort($tabliczka);
    ShowArrayAssoc($tabliczka);
echo "<hr><hr>";
    $tab2 = array("katarzyna","anna","zenon","pawel");
echo "<br>";
    ShowArrayAssoc($tab2);
    sort($tab2);
    echo "<br>";
      ShowArrayAssoc($tab2);

      //sortowanie tablicy asocjacyjne
  echo "<br>";  echo "<br>";  echo "<br>";
      $tabAssoc = array(
        "surname" => "Nowak",
        "name" => "Andżelik",
        "city" => "Poznan",
        "age" => 30
      );

      ShowArrayAssoc($tabAssoc);
      asort($tabAssoc);
        echo "<br>";  echo "<br>";
        ShowArrayAssoc($tabAssoc);
  echo "<br>";  echo "<br>";
arsort($tabAssoc);
ShowArrayAssoc($tabAssoc);
  echo "<br>";  echo "<br>";
  //wedlug klucza
  ksort($tabAssoc);
  ShowArrayAssoc($tabAssoc);
  echo "<br>";  echo "<br>";
  var_dump($tabAssoc);  echo "<br>";  echo "<br>";
  print_r($tabAssoc);
  echo '<pre>';
  print_r($tabAssoc);
  echo '</pre>';


     ?>



  </body>
</html>
