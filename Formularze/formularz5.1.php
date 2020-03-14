<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
          if (!empty($_GET['country'])) {
            echo "ok";
          }else {
            ?>

      <form method="get">
        <input type="text" name="country" value="" placeholder="Podaj Kraj">
        <input type="submit" name="" value="Zatwierdz">
      </form>
  
  <?php
    }


   ?>
</body>

</html>
