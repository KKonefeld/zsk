<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>


  </head>
  <body>
    <form method="post">
        <input type="text" name="name" placeholder="Podaj imie"></br> <br>
        <input type="number" name="age" placeholder="Podaj wiek"> <br> <br>
        <input type="submit" name="button" value="Zatwierdz">
    </form>

  </body>

  <?php
    if (!empty($_POST['name']) && !empty($_POST['age'])) {
      $name = $_POST['name'];
      $age = $_POST['age'];
//      echo $name,' ', $age;
      echo '<br>';
      $name1 = substr(substr(ucfirst($name),0,1).substr(strtolower($name),1),0,10);
      $name1 = str_replace(' ','',$name1);
      echo "Przed zamiana",'<br>';
      echo <<< TABELA
      <table>
        <tr>
          <th>Imie</th>
          <th>Wiek</th>
        </tr>
        <tr>
          <td>$name</td>
          <td>$age</td>
        </tr>
      </table>

      TABELA;
      echo '<br><br>',"Po zamianie: ",'<br>';
      echo <<< TABELA
      <table>
        <tr>
          <th>Imie</th>
          <th>Wiek</th>
        </tr>
        <tr>
          <td>$name1</td>
          <td>$age</td>
        </tr>
      </table>

      TABELA;

    }
    //Zapezpiecz formularz przed podaniem blednych danych takich jak biale znaki, ogranicz ilosc znakow do 10 dla imienia
    //litera w imieniu ma byc duza a pozostale male, wyswietl dane w formacie przed poprawą i po zmianie
    //dane poprawione wyswietl w tabeli z naglowkami o nazwach imie i wiek

   ?>

</html>
