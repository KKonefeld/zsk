<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $name = 'Janusz';
    $surname = 'Kowalski';

    echo 'Siemaneczko '."$name".'!'; //kropki wolniejsze
    echo '<br> hej ',"$name","!"; // to jest szybsze ok


   //typ integer
     echo '<hr>';
     $calkowita = 10;
     $hex = 0xA; //0x oznacza, że liczba jest heksadecymalna, wyjdzie 10
     $oct = 021; //wyjdzie 17 (0 musi być na początku)
     $bin = 0b1010; //0b, bo binarna

       echo "$oct",'<br>',"$hex",'<br>',"$bin";

    //składnia heredoc
    echo '<hr>';
    echo <<< ETYKIETA
    Heredoc
    <br>Imię: $name<br>
    Nazwisko: $surname<br><br>
    ETYKIETA;

    $text = <<< ETYKIETA
    Heredoc2
    <br>Imię: $name<br>
    Nazwisko: $surname<br>
    ETYKIETA;

    echo "$text"; //ale wygibasy

  //składnia nowdoc (jak robisz 'ET' to interpretuje jako tekst wszystko)
    echo '<hr>';
    $textNowdoc = <<< 'ET'
    Nowdoc
    <br>Imię: $name<br>
    Nazwisko: $surname<br>
    ET;

    echo "$textNowdoc";

  //  echo phpinfo(), pokazuje info o php

    echo "<hr>Nazwa zmiennej: \$name wynosi: $name"; //triczek z backslashem
    echo '<br>Nazwa zmiennej: $name wynosi: ',"$name"; //działa tak samo

    ?>
  </body>
</html>
