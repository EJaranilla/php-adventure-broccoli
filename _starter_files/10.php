<!-- 
    Write a program that takes an array of numbers as input and outputs the median of the numbers.
-->

<?php
    $number = array("1","60","2","4","5", "3","6");
    $num1 = count($number);
    $num2 = $num1/2;
    $mid = (int) $num2;
    $median = $number[$mid];
    echo $median;
?>