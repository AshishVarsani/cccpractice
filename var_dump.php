<?php
/*
$integerVar = 42;
echo var_dump($integerVar) . "<br>";

$floatVar = 3.14;
echo var_dump($floatVar) . "<br>";

$stringVar = "Hello, PHP!";
echo var_dump($stringVar) . "<br>";

$arrayVar = array(1, 2, 3, "PHP");
echo var_dump($arrayVar) . "<br>";

$boolVar = true;
echo var_dump($boolVar) . "<br>";

$nullVar = null;
echo var_dump($nullVar) . "<br>";      */


   //Type casting
   /*
   
   echo (int) 30.14 . "<br>";

   echo (float) 2 . "<br>";
   echo (int)"1234". "<br>" ;

   $boolVar = false;
   $boolvar = (string)$boolVar;
   echo var_dump($boolvar) . "<br>";

   $stringVar="true";
   $stringVar = (bool)$stringVar;
   echo var_dump($stringVar) . "<br>";  

   $arrayVar="1,2,3";
   $arrayVar=(array)$arrayVar;
   echo var_dump($arrayVar);        */



   // php operator

   // arithmetic operator

   /* $a=3;
    $b=4;
    $sum=$a+$b;
    echo var_dump($sum) . "<br>";
   
    $a=35;
    $b="23.5";
    $sub=$a-$b;
    echo var_dump($b) . "<br>";   //in string numaric value can also be add in integer but non numaric string gave error

    $a=12;
    $b=22;
    $mul=$a*$b;
    echo var_dump($mul) . "<br>";

    $a=12;
    $b=22;
    $div=$a/$b;
    echo var_dump($div) . "<br>";

    $a=25;
    $b=4.5;
    $mod=$a%$b;
    echo var_dump($mod) . "<br>";

    $a=2;
    $b=6;
    $exp=$a**$b;
    echo var_dump($exp) . "<br>";     */

// Assignment Operators:
/*
$a=2;
$b=6;
$a=$b;
echo ($a) . "<br>";

$a=3;
$b=7;
$a+=$b;
echo ($a) . "<br>";

$a=5.5;
$b=4.5;
$a-=$b;
echo var_dump($a) . "<br>";

$a=2;
$b=6;
$a*=$b;
echo ($a) . "<br>";

$a=2;
$b=6;
$a/=$b;
echo ($a) . "<br>";

$a=2;
$b=6;
$a%=$b;
echo $a . "<br>";    */


  //Comparison Operators:

 /* $a=5;
  $b="5";
  $result= ($a==$b);   // == only check value is equal or not it doesn't check data type
  echo var_dump($result) . "<br>";

  $a=5;
  $b="5";
  $result= ($a===$b);  // === also check it's data type thats why it's false
  echo var_dump($result) . "<br>";

  $a="7";
  $b=7;
  if ($a !== $b) {
   echo "$a is not identical to $b";
} else {
   echo "$a is identical to $b";
}
   echo "<br>";

   $a=6;
   $b=9;
   if ($a <= $b) {
      echo "$a is less than or equal to $b";
  } else {
      echo "$a is greater than $b";
  }    */

  //Logical operator
 /* $age=22; 
  $student=true;
  if ($age <= 25 && $student) {
   echo "You are student.";
} else {
   echo "You are not a student.";
}  
   echo "<br>"; */

  // Increment and Decrement Operators:

//   $a=12;
//   $b=3;
//   $c=5;
//   echo ++$a . "<br>";
//   echo $b++ . "<br>";
//   echo --$c . "<br>";

  //String Operators:

   $a="how";
   $b=" are you";
  $result=$a . $b;   //concatenation
  echo $result;
  echo "<br>";

  $a="i am ";
   $b="ashish";
  $result=  ($a .=  $b);      // $a=$a+$b;
  echo $result;


  //  Ternary Operator

  $age = 12;
$Student = true;          //(condition) ? true_expression : false_expression;
$result = ($age <= 18 && $Student) ? "You are student." : "You are not a student.";
echo $result . "<br>";

 











?>