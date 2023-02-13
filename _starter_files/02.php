<!-- 
    Write a program that takes a string as input and outputs whether it is a palindrome.
-->
<?php
    $name = 'madam';
    $reverse = strrev($name);

    //echo $reverse;

    if ($reverse == $name)
    {
        echo $name." ". 'is a palindrome';
    }
    else
    {
        echo $name. " ". 'is not a palindrome';
    }
?>