<!-- 
    Write a program that takes an array of numbers as input and outputs the average of the numbers.
-->

<?php 
$num = array("1","2","3","4","5");
$average = array_sum($num)/ count($num);

echo $average;

?>