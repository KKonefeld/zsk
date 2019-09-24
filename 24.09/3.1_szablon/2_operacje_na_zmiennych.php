<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
      //operacje bitowe and &, or | not ~, xor ^
      $x = 0b1010;
      echo $x.'<br>';

      $x = $x >> 1;
      echo $x.'<br>';

      $x = $x << 2;
      echo $x.'<br>';

      $a = 1;
      $b = 1.0;

      if ($a == $b){
        echo "identyczna".'<br>';
      }else{
        echo "rozne".'<br>';
      }

      echo(gettype($a).'<br>');
      echo(gettype($b).'<br>');

      $x = 1;
      $y = 2;
      $wynik = $x <=> $y;
      echo $wynik.'<hr>';

      //zadanko

      $x = 2;
      echo $x++; //2    x=3
      echo ++$x; //4    x=4
      echo $x; //4      x=4
      $y = $x++; //     y=4 x=5
      echo $y;  //4
      $y = ++$x; //     y=6
      echo $y; //6
      echo ++$y.'<hr>'; //7

      //==================================

      $text1 = '4ssd';
      $text2 = 'Drugi tekst';
      $text3 = '7';
      $num = 15;
      $j = -1;
      $c = 100;

      //operatory rzutowania

      //bool //int //float //string //object //array //unset
      $x =(int)$text1;
      echo $x.'<br>';

      $x = (bool)$j;
      echo $x.'<br>';

      $c = (unset)$c;
      echo $c;
      echo gettype($c);

      $l = (float)$num;
      echo gettype($l).'<br>';

      //rozmiar tyou integer

      echo PHP_INT_SIZE.'<br>'; //8B

      $w;
      echo @gettype($w);

    ?>
</body>
</html>
