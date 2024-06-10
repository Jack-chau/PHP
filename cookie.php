<?php
    //cookie = Information about a user stored in a user's web-browser,
    //         targeted advertisements, browsing perferences, and other non-sensitive data

    // setcookie( "key", "value", expire time (second), path ) ;
    setcookie( "fav_food", "pizza", time( ) + (86400 * 2), "/" ) ;
    setcookie( "fav_drink", "coffee", time( ) + (86400 * 3), "/" ) ;
    setcookie( "fav_dessert", "ice cream", time( ) - 0, "/" ) ; //delete cookie

    foreach( $_COOKIE as $key => $value ){
        echo $key . "=" . $value . "<br>" ;
    }

    if( isset( $_COOKIE[ "fav_food" ] ) ){
        echo "Buy some {$_COOKIE[ "fav_food"]}<br>" ;
    }else{
        echo "I don't know your favourite food!" ;
    }
?>