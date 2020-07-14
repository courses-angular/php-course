<?php
// ------------------------------------ Functions ------------------
    echo 'Function-1';
    echo '<br>';
    echo '---------------------------------------------------------';
    echo '<br>';
    function sumFunction1($num1,$num2){
        echo $num1 + $num2;
    }
    sumFunction1(5,10);
    echo '<br>';
    echo '---------------------------------------------------------';
    echo '<br>';
    // ----------------------------------------------------------------
    echo 'Function-2';
    echo '<br>';
    echo '---------------------------------------------------------';
    echo '<br>';

     function sumFunction2($num1 = 0,$num2 = 0){
        echo $num1 + $num2;
    }
    sumFunction2(4);
    echo '<br>';
    echo '---------------------------------------------------------';
    echo '<br>';
// ----------------------------------------------------------------
echo 'Function-3';
echo '<br>';
echo '---------------------------------------------------------';
echo '<br>';
     function sumFunction3($num1,$num2){
        return $num1 + $num2;
    }
    echo sumFunction3(3,4)

?>