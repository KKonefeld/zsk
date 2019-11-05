<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function value($a)
      {
          if($a<0)
          {
            return 'ujemna';
          }elseif ($a==0)
          {
            return 'zero';
          }else
          {
            return 'dodatnia';
          }
    }
echo value(10);//dodatnia
function getvalue():int
{
  return 20.99;
}
echo getvalue();
            #######################################
//zasieg zmiennych
echo "<br><br>";
$x = 10;
function show1()
{
  global $x;
echo "wartosc zmiennej \$x wynosi: $x";
//$GLOBALS['x']
}
show1();
echo "<br><br>";echo "<br><br>";echo "<br><br>";
#############################

function sum(){
  static $number = 10;
  echo "\$number wynosi: $number<br>";
 $number +=10;


}

sum();//10
sum();//20

##############
//argumenty

function add($x, $y=1)
{
  return $x + $y;
}
echo add(2);
echo "<br><br>";
echo add(2,4);
echo "<br><br>";
#######################
// argumenty i typy danych
function multi(float $x, int $y)
{
  return $x*$y;
}
echo multi(2,5);



     ?>



  </body>
</html>
