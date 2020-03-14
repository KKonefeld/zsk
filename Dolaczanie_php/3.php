<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Document</title>
  </head>
  <body>
    <?php
//bool, int, float , string , array, object

$text ='123ssd';
$x=(int)$text;

$text1 = -1;
$x1 = (bool)$text1;

$text2 = 10;
$x2 = (unset)$text2;



//echo $x; //wyswietlenie int wyciagnietgo z string '123ssd'
//echo $x1;
//echo $x2;

echo PHP_INT_SIZE,"<br>"; // rozmiar INT

//kontorla typu zmiennych
$x = 10;

echo is_int($x);
echo is_string($x);
echo is_bool($x);
echo is_float($x);
echo is_null($x),'<hr>';

//zmienne superglobalne

//to one
//$_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER

echo $_SERVER['SERVER_PORT'],'<hr>'; // port
echo $_SERVER['SERVER_NAME'],'<hr>'; // nazwa
echo $_SERVER['SCRIPT_NAME'],'<hr>'; // SCIEZKA od htdocs
echo $_SERVER['SERVER_PROTOCOL'],'<hr>'; // JAKIES TAM COS
echo $_SERVER['DOCUMENT_ROOT'],'<hr>'; // CALA SCIEZKA OD DYSKU C


$lokalizacjaPliku = $_SERVER['DOCUMENT_ROOT'];
$lokalizacjaPliku .= $_SERVER['SCRIPT_NAME'];

echo $lokalizacjaPliku,'<hr>';


//stałe

define('NAZWISKO','Kowal<hr>');
echo NAZWISKO;

define('imie','Janusz<hr>');
echo imie;

define('WIEK',18,true); //do wersji 8 bedzie dzialac -  true wielkosc liter nie ma znaczenua
echo WIEK,'<hr>';

echo PHP_VERSION;
echo gettype(PHP_VERSION),'<hr>';

$ver = PHP_VERSION;
if($ver > 5.6)
{
  echo "nowy PHP",'<hr>';
}
else
{
  echo 'stary PHP','<hr>';
}

  ?>
  </body>
</html>
