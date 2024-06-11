<?php
    include( "database.php" ) ;

    /*
    /// INSERT INTO DATABASE
    $username = "Carmen Ng" ;
    $password = "CarmenNg1234" ;
    $hash = password_hash( $password, PASSWORD_DEFAULT ) ;

    $sql = "INSERT INTO users( user, password )
            VALUES ( '$username', '$hash' )" ;

    try{
        mysqli_query( $conn, $sql ) ;
        echo "User is now registered" ;
    }
    catch( mysqli_sql_exception ){
        echo "Could not register user" ;
    }
    */

    /// RETRIEVE DATA FROM DATABASE
    $sql = "SELECT * FROM users" ;
    $result = mysqli_query( $conn, $sql ) ;

    // return how many rows in $result
    $row = mysqli_fetch_assoc( $result ) ; 
        //return the next available row within our object
        if( mysqli_num_rows( $result ) > 0 ){
            while( $row = mysqli_fetch_assoc( $result ) ){
                echo $row[ 'id' ] . "<br>" ;
                echo $row[ "reg_date" ] . "<br>" ;
                echo $row[ "user" ] . "<br>" ;
            }
    }



    mysqli_close( $conn ) ;
?>