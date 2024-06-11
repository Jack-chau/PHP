<?php
    $db_server = "localhost" ;
    $db_user = "root" ;
    $db_pw = "" ;
    $db_name = "businessdb" ;
    $conm = "" ;

    try{
        $conn = mysqli_connect( $db_server, 
                                $db_user, 
                                $db_pw, 
                                $db_name ) ;
    }
    catch( mysqli_sql_exception ){
        echo "Could not connect!<br>" ;
    }

    if( $conn ){
        echo "You are connected!<br>" ;
    }
/*
    else{
        "Could not connect!" ;
    }
*/
?>