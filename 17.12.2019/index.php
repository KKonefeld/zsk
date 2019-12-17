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



mysqli_close($connect);
 ?>
 <form method="post">
   <select name="towar">
     <option value="Czekolada">Czekolada</option>
     <option value="Grześki">Grześki</option>
     <option value="Baton">Baton</option>
   </select>
   <input type="submit" name="button" value="WYBIERZ">
 </form>


<?php
//skrypt 2
if (isset($_POST["towar"])) {
$towar = $_POST["towar"];

$connect = mysqli_connect("localhost","root","","sklep");

mysqli_set_charset($connect,'utf8');

$sql = "SELECT `cena` FROM `towary` WHERE `nazwa`='$towar'";
$result = mysqli_query($connect, $sql);

$row = mysqli_fetch_assoc($result);

$promocja = round($row["cena"]*0.85,2);
echo $promocja;




}




 ?>



  </body>
</html>
