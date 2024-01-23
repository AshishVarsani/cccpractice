<!-- Write a PHP function to generate the Fibonacci sequence up to a specified number of terms. -->
<?php
// $num1=0;
// $num2=1;
// $number=7;
// echo "fibonacci series for $number terms" . "<br>" . $num1 . " " . $num2 . " ";
// for($i=0;$i<$number-2;$i++)
// {
//     $num3=$num1+$num2;
//     echo $num3 . " ";
//     $num1=$num2;
//     $num2=$num3;

// }




function fibonacci($number, $num1 = 0, $num2 = 1) {
    if($number == 0) {
        return;
    }
    echo $num1 . " ";
    $num3 = $num1 + $num2;
    fibonacci($number - 1, $num2, $num3);
}

$number = 7; 
echo "Fibonacci Series for $number terms: " . "<br>";
fibonacci($number);

?>