<!-- 
    Write a program that takes an array of strings as input and outputs the longest string in the array.
-->
<?php
   $names = array("ehd", "steven", "Jaranilla");
   $len = array_map('strlen',$names);
   echo max($len);
?>