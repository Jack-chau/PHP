<?php
    // function = write some code once, reuse when you need it
    //            type() after function name to invoke
    //            ex. add() subtract() multiply divide()

/*
    function happy_birthday( $Name ){
        echo "Happy Birthday to {$Name}<br>" ;
    }

    happy_birthday( "Jack Chau" ) ;
    happy_birthday( "Nora Leung" ) ;
*/
/*
    function is_even( $number ){
        $result = $number % 2 ;

        if( $result == 0 ){
            echo "is a even number" ;
        }
        else{
            echo "is not a even number" ;
        }
    }

    is_even( 2 ) ;
*/

    function hypotenuse( float $a, float $b ){
        $c = sqrt( $a ** 2 + $b ** 2 ) ;
        return $c ;
    }
    echo hypotenuse( 3, 4 ) ;
    echo "<br>" ;
    echo hypotenuse( 3, 3 ) ;
?>