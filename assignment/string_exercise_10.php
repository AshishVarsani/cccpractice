<!-- Write a PHP function to calculate the factorial of a given number. -->

<?php
function factorial($number,$total=1)
{
    for($i=1;$i<=$number;$i++)
    {
        $total*=$i;
    }
    return $total;
}
$number=5;
$value=factorial($number);
echo "factorial of $number is $value";


?>