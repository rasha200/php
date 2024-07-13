<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>hello php</header>

<?php
//basice syntex
//PHP => Case-Sensitive
?>

<?
echo"not recommended"
?>


<?php
//echo 
echo "rasha";//to output one or more strings
echo "<br>";
echo "Hello ", "world!";//multiple parameters
echo "<br>";
echo ("fisrt line");
echo"<h1>header one inside the php code</h1>";

?>

<?php
//print statement
print "print statment "; //to output one string 
print "how parameter?";//can only take one parameter
//"echo" is faster than "print" because it doesn't return a value but print return a value=1
?>


<?php
// variables 
// يجب ان يبدا بحرف او (_) و يمكن ان يحتوي على ارقام بعدالحرف الاول 
echo "<br>";

$name = "rasha yaseen";
$age = 19;
$name2 = "nejar yaseen";
$age2 = 17;

echo "<br>";
echo "name:$name " ;
echo "<br>";
echo " age:".$age;
echo "<br>";

echo $name2;
echo $age2;

$fullname = $name;
echo "<br>";
echo $fullname
?>

<?php
//operators
echo "<br>";

$num1 = 10;
$num2 = 5;


echo "<br>";
echo "sum: ".($num1+$num2);
//او
$sum = $num1 + $num2;
echo "<br>";
echo "sum: ". $sum;

echo "<br>";
echo $num1- $num2;

echo "<br>";
echo $num1 * $num2;

echo "<br>";
echo $num1 / $num2;

echo "<br>";
echo $num1+$num2*10;

//$num1=$num1+4
$num1+=4;
echo "<br>";
echo $num1;

//$num1=$num1+1
$num1++;
echo "<br>";
echo $num1;

//$num1=$num1-1
$num1--;
echo "<br>";
echo $num1;
?>

<?php
//++ قبل او بعد العدد
echo "<br>";

$number1 = 4;
$number2 = 6;
$result=(++$number1+$number2)*3;
echo "<br>";
echo $result;


$number1 = 4;
$result2=($number1+++$number2)*3;
echo "<br>";
echo $result2;

echo "<br>";
echo $number1 + 2;
echo "<br>";
?>


<?php
//data types
echo "<br>";

$type1 = "string type";
echo "<br>";
echo gettype($type1);
echo "<br>";
Var_Dump($type1);
echo "<br>";

$type2 = 44;
echo "<br>";
echo gettype($type2);
echo "<br>";
Var_Dump($type2);
echo "<br>";


$type3 = 44.4; //float or double
echo "<br>";
echo gettype($type3);
echo "<br>";
Var_Dump($type3);
echo "<br>";

$type4= true;
echo "<br>";
echo gettype($type4);
echo "<br>";
Var_Dump($type4);
echo "<br>";

$type5 = array(1, 2, 3, 4, 5);
echo "<br>";
echo gettype($type5);
echo "<br>";
Var_Dump($type5);
echo "<br>";

$arreyy = [4, 8, 12, 16, 5];
echo "<br>";
echo gettype($arreyy);
echo "<br>";
Var_Dump($arreyy);
echo "<br>";

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }

  $type6 = new Car("red", "Volvo");
  var_dump($type6);
  echo "<br>";
  
  $type7 = "Hello ";
  $type7 = null;
  var_dump($type7);


?>


</body>
</html>