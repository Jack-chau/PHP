<?php
/*
    $temp = 25 ;
    $cloudy = true ;

    if( $temp < 0 || $temp > 30 ){
        echo "The weather is bad.<br>" ;
    }
    else{
        echo "The weather is good<br>" ;
    }

    if( !$cloudy ){
        echo "Is cloudy" ;
    }else{
        echo "Is Sunny" ;
    }
*/
/*
    $age = 19 ;
    $citizen = true ;
    if( $age >= 18 && $citizen ){
        echo "You can vote!" ;
    }
    else{
        echo "You cannot vote!" ;
    }
*/
    $child = false ;
    $senior = true ;
    $ticket = null ;

    if( $child || $senior ){
        $ticket = 10 ;
    }
    else{
        $ticket = 15 ;
    }

    echo "The ticket price is {$ticket}" ;
?>