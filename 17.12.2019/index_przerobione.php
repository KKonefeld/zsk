<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sklep papierniczy</title>
  </head>
  <body>


<?php
//skrypt 1
$connect = mysqli_connect("localhost","root","","sklep");

mysqli_set_charset($connect,'utf8');
$sql = "SELECT nazwa FROM towary WHERE promocja=1";

$result = mysqli_query($connect, $sql);
echo "<ul>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<li>",$row["nazwa"],"</li>";
}
echo "</ul>";




 ?>
 <form method="post">
   <select name="towar">
    <?php

    $sql = "SELECT `nazwa` FROM `towary`";
    $result = mysqli_query($connect,$sql);

    while ($option = mysqli_fetch_assoc($result)) {

      echo "<option value=\"$option[nazwa]\">$option[nazwa]</option>";
    }



    mysqli_close($connect);
     ?>
   </select>
   <input type="submit" name="button" value="WYBIERZ">
 </form>


<?php
//skrypt 2
if (isset($_POST["towar"])) {
$towar = $_POST["towar"];

$connect = mysqli_connect("localhost","root","","sklep");

mysqli_set_charset($connect,'utf8');

$sql = "SELECT * FROM `towary` WHERE `nazwa`='$towar'";
$result = mysqli_query($connect, $sql);

$row = mysqli_fetch_assoc($result);


$promocja = round($row["cena"]*0.85,2);
echo $promocja;

mysqli_close($connect);

/////////////////////////////


$connect = mysqli_connect("localhost","root","","sklep");

$connect2 = mysqli_connect("localhost","root","","sklep");
mysqli_set_charset($connect,'utf8');
mysqli_set_charset($connect2,'utf8');
$sql = "SELECT * FROM `towary`";
$sql2 = "SELECT * FROM `dostawcy`";

$result = mysqli_query($connect,$sql);
$result2 = mysqli_query($connect2,$sql2);
echo "<table>";
echo "<tr>";
echo "<th>Nazwa</th><th>Cena</th><th>Cena promocja</th><th>Dostawca</th>";
echo "</tr>";

while ($option = mysqli_fetch_assoc($result)) {

  $cenapro = null;
  if ($option['promocja'] == 1) {
    $cenapro = round($option["cena"]*0.85,2);
  }




  echo "<tr>";

    echo "<td>";
      echo $option['nazwa'];
    echo "</td>";
    echo "<td>";
      echo $option['cena'];
    echo "</td>";
    echo "<td>";
      echo $cenapro;
    echo "</td>";
    echo "<td>";
      echo $dostawcanazwa;
    echo "</td>";

  echo "</tr>";

}


echo "</table>";




}




 ?>




  </body>
</html>
