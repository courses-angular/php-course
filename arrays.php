<?php
   // Arrays

  /*
  *        - Indexed array    -  array('VALUE','VALUE','VALUE);
           - Associated array  - array('KEY' => 'VALUE');
           - Multi-dimensional array - array(
                                            array('John','Peter')
                                            )
  */

// ------------------------------------ Indexed array ------------------
    $people = array('John','Sarah','Joe');
    $ids = array(1,22,23);
    $cars = ['Honda','Ford','BMW'];
    $cars[3]= 'Porshe';
    $cars[] = 'Volvo';  // add to the end of the array

// ------------------------------------------------------------------------    

// ------------------------------------ Associated array ------------------
    $people = array('John'=> 33,'Yevgeny'=> 39,'Brad'=> 36);
    $ids =[0=> 'Brad',1=>'Joe',2=> 'Alex'];
    $people['Mia']= 5;
    // var_dump($people);
    // print_r($ids);


// ------------------------------------------------------------------------

// ------------------------------------ Multi-dimensional array ------------------
   $countries = array(
     array('Kiev','Tel-Aviv','Jerusalem'),
     array(0,1,2)
   );
   print_r($countries);
   print_r($countries[0][2]);
   print_r($countries[1][0]);
// ------------------------------------------------------------------------
    // echo $people[0];
    // echo $ids[2];
    // echo $cars[1]

    // echo count($cars); // like length in JS (size of an array)
    // print_r($cars); //Show array
    // var_dump($cars) //Show array with types in it

?>