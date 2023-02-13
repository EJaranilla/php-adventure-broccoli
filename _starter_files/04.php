<!-- 
    Write a program that takes a number as input and outputs the sum of its digits.
-->

<?php
$num = 123456;
$sum = 0;
$num2 = 0;


for($i=0;$i<=strlen($num);$i++)
{
    $num2 = $num%10;
    $sum = $sum + $num2;
    $num = $num/10;
}
echo "Sum of digits is $sum"

?>