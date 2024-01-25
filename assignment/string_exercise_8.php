<!-- Write a PHP function to determine whether a given number is prime. -->
<?php 
$num =234;                 //readline("enter a number");
$value = check_primeornot($num);
if ($value == true)
   echo "It is a prime number";
else
   echo "It is a non-prime number";

function check_primeornot($num)
{
   if ($num == 1)
   return false;
   for ($i = 2; $i < $num; $i++)
   {
      if ($num%$i == 0)
    {
      return false;
    }
   }
   return true;
}

?>
