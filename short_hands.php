<?php

// -------------------------Ternary operator---------------------------
$loggedIn = true;

// if(!$loggedIn){
//     echo 'You\'re logged in<br>';
// }else{
//     echo 'You\'re not logged in <br>';
// }

($loggedIn) ? 'You\'re logged in':'You\'re not logged in'; // return 1
// echo $loggedIn;
$isRegistered = ($loggedIn)? true: false;
// echo $isRegistered;
// --------------------------------------------------------------------
$age = 12;
$score = 8;
echo 'Your score is '.($score > 10 ? ($age> 10?'Average':'Exceptional'): ($age > 10 ? 'Horrible':'Average'));
