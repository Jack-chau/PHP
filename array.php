<?php
    //Array = "variable" which can hold more than one value at a time

    $food_1 = "Apple" ;
    $food_2 = "Orange" ;
    $food_3 = "Banana" ;
    $food_4 = "Coconut" ;

    $foods = [ "Apple", "Orange", "Banana", "Coconut" ] ;
    //$foods = array( "Apple", "Orange", "Banana", "Coconut" ) ;
    
    //echo $foods[ 1 ] . "<br>";

    //array_push( $foods, "pineapple", "kiwi" ) ; //Add element behind
    //array_pop( $foods ) ; //remove the last element inside the array
    //array_shift( $foods ) ; //remove the first element inside the array
    //echo $foods[ 0 ] . "<br>";
    $reversed_foods = array_reverse( $foods ) ;//reverse array elements

    foreach( $foods as $food ){
        echo $food . "<br>" ;
    }
    echo "<br>";
    foreach( $reversed_foods as $reversed_food ){
        echo $reversed_food . "<br>" ;
    }

    echo count( $foods ) ;
?>