<!-- 
    Write a program that takes a string as input and outputs the string with all vowels removed.
-->
<?php
   $vowels = array("a", "e", "o", "u", "i", "A", "E", "I", "O", "U");
   $randomName= 'here i am';
   $len = strlen($randomName); 

   for ($i = 0; $i < $len; $i++)
   {
    if (in_array($randomName[$i], $vowels))
    {
        $results = $randomName[$i];
    }
   }
   if (strlen($results) > 0)
   {
    print "<b>Vowels:</b><br>";
    print $results."<br><br>";
   }
?>