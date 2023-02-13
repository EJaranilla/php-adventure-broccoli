<!-- 
    Write a program that takes a character as input and outputs whether it is a vowel or a consonant.
-->
<?php
    $vowels = array("a", "e", "i", "o", "u",);
    $input = 'e';

    if(in_array(strtolower($input), $vowels)){
        echo "letter"." ". $input." "."is a vowel";
    }
    else{
        echo "letter"." ". $input." "."is a consonant";    }


?>