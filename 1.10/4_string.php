
      <?php
        $text = <<< TEKST
        zsk - Zespół
        Szkół
        komunikacji
      TEKST;


        echo "Przed wywołaniem funkcji nl2br: <br> $text";
        echo "Po wywołaniu funkcji nl2br: <br>";
        echo nl2br($text);


        //zamiana na male litery

        echo strtolower($text),'<br>';

        // zamiana na duze
        echo strtoupper($text),'<br>';

        //zamiana pierwszej litery na duza

        $text = 'anna AgnieSZka tomasz';
        echo ucfirst($text);
        // zamiana wszystkich slow na 1 duze
        echo '<br>';
        echo ucwords($text);

        /////////////////////////////////////////

        $lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
        echo '<hr>';

        $kolumna = wordwrap($lorem,40,'<hr>');

        echo $kolumna;
            echo '<hr>';

        //usuwanie bialych znakow

        $name = 'Kasia';
        $name1 = '  Kasia ';
        ob_clean();
        echo 'Dlugosc zmiennej \$name <br>';
        echo strlen($name);//5
        echo '<br>';
        echo 'Dlugosc zmiennej \$name1 <br>';
        echo strlen($name1);//8

        echo '<hr>';
        echo strlen(ltrim($name1));  echo '<br>';
        echo strlen(rtrim($name1));  echo '<br>';
        echo strlen(trim($name1));  echo '<hr>';

        /// przeszukiwanie ciagow znakow

        $adress = 'Poznan, ul. Fredry 13, tel. (61) 445-44-58';
        $search = strstr($adress, 'tel');
        echo $search,'<hr>';

        $adress1 = 'Poznan, ul. Fredry 13, tel. (61) 445-44-58';
        $search1 = strstr($adress1, 'tel',true); // do znaku
        echo $search1,'<hr>';

        $adress3 = 'Poznan, ul. Fredry 13, tel. (61) 445-44-58';
        $search3 = stristr($adress3, 'Tel');
        echo $search3,'<hr>';


        $mail = strstr('zsk@gmail.com','@');
        echo $mail,'<br>'; //gmail.com
        $mail = strstr('zsk@gmail.com',64);
        echo $mail,'<br>'; //gmail.com w ascii


        ////////////////////////////////////////

        $ciag1 = 'a';
        $ciag2 = 'aa';
        echo strcmp($ciag1,$ciag2); //-1
        echo '<br>';
        echo strcmp('zzz','zzz'); //0
        echo '<br>';
        echo strcmp('zzz','zza'); //1
        echo '<hr>';
        //pozycja
        $poz = strpos('abcdefg','cde');
        echo $poz; // 2 - pierwszy ciag ktory napotka

        //zad.1
        $text1 = 'abcdabcd';
        $text2 = 'ab';
        echo '<hr>';
        if(strpos($text1, $text2,true)==true)
        {
          echo "Znajduje sie";
        }else {
          echo 'Nie znaleziono';
        }
        //przetwarzanie ciagow znakow
        echo '<hr>';

        $replace = str_replace('%name%','Janusz','Mam na imie: %name%');
        echo $replace,'<hr>';

        $surname = substr('Janusz Kowalski',2);
        echo $surname,'<br>';


        $surname = substr('Janusz Kowalski',7,5);
        echo $surname,'<hr>';

        //// zamiana polskich znakow

        $login = 'bączek';
        $censore = array('ą','ę','ż','ć','ó','ł','ń','ś','ź');
        $replace = array('a','e','z','c','o','l','n','s','z');

        $new_login = str_replace($censore, $replace, $login);
        echo $new_login;
        echo '<hr>';

        // zad2 napisz kod cenzurujacy zdanie podane przez uzytkownika. Uzytkownik podaje DomainException
        //w formularzu
        echo <<< FORM
        <form method="post">
            <input type="text" name="dane" placeholder="Wpisz dane">
            <br><br>
            <input type="submit" name="" value="">
        </form>
        FORM;

        if (isset($_POST["dane"])) {
          $data = $_POST["dane"];
          echo $data,'<br>';
        }

        $niedozwolone =  array('czarny','bialy');
        $zamiana = ' #### ';
        $poprawna = str_ireplace($niedozwolone,$zamiana,$data);
        echo $poprawna;


      ?>
