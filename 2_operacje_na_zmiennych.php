<?php
  $potega = 2**10;
  echo $potega,'<br>';

// operatory bitowe: and &, or |, not ~, xor ^, przesunięcie bitowe w prawo >>, w lewo <<

$x = 0b1010;
echo $x;
$x = $x >> 1; //101(2) 5
echo '<br>',$x;
$x = $x << 2; //10100(2) 20
echo '<br>',$x,'<hr>';

//porownywanie zmiennych
$x = 11;
$y = 1;
$wynik = $x <=> $y; //porownuje, jeśli po lewej jest większy to 1, a jak po prawej to -1, a jak oba takie same to 0
echo $wynik,'<hr>';

//gettype i sprawdzanie identycznosci
$x = 1;
$y = 1.0;
echo gettype($x),'<br>'; //integer
echo gettype($y),'<br>'; //double

if($x === $y) {
  echo "identyczne";
} else echo "różne";

// zadanko
$x = 2;
echo '<br>',$x++,'<br>'; //2
echo ++$x,'<br>'; //4
echo $x,'<br>'; //4
$y = $x++;
echo $y,'<br>'; //4
$y = ++$x;
echo $y,'<br>'; //6
echo ++$y,'<br>'; //7

//operatory rzutowania
//bool, int, float, string, array, object, unset
echo '<hr>';
$text = '42abc';
$text1 = -1;
$text2 = 20;
$x = (int)$text; //wyświetli tylko 42
$x1 = (bool)$text1; //wyświetla 1?
$x2 = (unset)$text2; //nic nie wyświetla ok
echo $x,'<br>';
echo $x1,'<br>';
echo $x2,'<br>';
echo gettype($x2); //unset robi null ok

//rozmiar typu integer
echo '<hr>',PHP_INT_SIZE;

//kontrola typu zmiennych
$w;
echo @gettype($w); //@ to operator ignorowania błędów
?>
