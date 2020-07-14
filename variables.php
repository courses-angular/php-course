<?php

// Variables 

# numbers

/*
   - prefix  - $;
   - start with letters or underscore;
   - case sensitive;

   #DATA TYPES

   - String
   - Integers
   - Floats
   - Booleans
   - Arrays
   - Objects
   - NULL
   - Resource

*/
$num1 = 1;
$num2= 10;
$string = 'Hello php';
$string3 = 'They\'re';
$string4 = "They're";
$float = 4.2;
$bool = true;
$sum = $number+ $num2;
$result = $string.' '.'from Yevgeny';
$result2 = "$string from Yevgeny";
/*
   const in php - define('KEY','VALUE',casesensitive: boolean);
*/

define('GREETING','Hello Yevgeny from PHP',true);


// echo $sum;
// echo $result;
// echo $result2;
echo GREETING;
?>