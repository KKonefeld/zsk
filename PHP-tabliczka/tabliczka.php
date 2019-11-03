<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      td{
        border: 1px solid black;
        width: 50px;
        height: 50px;
        text-align: center;
      }
      #zielone{
        background-color: #37f72d;
      }
      #czerwone{
        background-color: red;
      }
    </style>
  </head>
  <body>
<table id="xd">
 <?php
 $suma = 0;
 $rzad = 1;
echo "<th></th>";
 for ($i=1; $i <=10 ; $i++) {
     echo "<th>",$i,"</th>";
 }

 do {
   $linia = 1;

   echo "<tr>";
echo "<th>",$rzad,"</th>";

   do {
      if ($linia==$rzad) {
          echo '<td id="zielone">',$linia*$rzad,'</td>';
          $suma += $linia*$rzad;
      //    echo "<td>","*","</td>"; //<--- odkomentowac to beda gwiazki
      //    echo "<td>",$linia*$rzad,"</td>"; //odkomentowac <--- bez zielonego
    }elseif ($linia+$rzad==11) {
        echo '<td id="czerwone">',$linia*$rzad,'</td>';
          //    echo "<td>",$linia*$rzad,"</td>"; //odkomentowac <--- bez czerwonego
    }
      else {
          echo "<td>",$linia*$rzad,"</td>";
      }



      $linia++;
   } while ($linia <= 10);
   echo "</tr>";

   $rzad++;
 } while ($rzad <= 10);
  ?>
</table>

<?php

  echo "Suma przekatnej wynosi : ",$suma;

 ?>

  </body>
</html>
