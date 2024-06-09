<?php
    $nameArr = [ "Jack", "Chau", "123" ] ;
    $username = " jack chau " ;
    $phoneNum = '222-00022-0' ;
    //$username = strtoupper( $username ) ;
    //$username = strtolower( $username ) ;
    //$username = trim( $username ) ; //remove the write space before or after
    //$username = str_pad( $username, 20, '0' ) ;
    //$phoneNum = str_replace( "-", "", $phoneNum ) ;
    //$username = strrev( $username ) ;
    //$username = str_shuffle( $username ) ; //random alias
    //$equals = strcmp( $username, " jack chau " ) ; //string compare
    //$count = strlen( $phoneNum ) ;
    $index = strpos( $username, " " ) ;
    $firstNmae = substr( $username, 1, 5 ) ;
    $lastName = substr( $username, 6, 9 ) ;
    $fullname = explode( " ", $username ) ; // use " " to separate $username into array
    $nameArr = implode( "_", $nameArr ) ;
    echo $nameArr . "<br>" ;
    echo $firstNmae . $lastName . "<br>";
    foreach( $fullname as $name ){
        echo $name ;
    }
?>