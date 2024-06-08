<?php
// switch = replacement to using many elseif statements
        //  more efficiency, less code to write.
    
    $grade = "CD" ;

    switch( $grade ){
        case "A" :
            echo "You did great!" ;
            break ;
        case "B" :
            echo "You did good!" ;
            break ;
        case "C" :
            echo "Keep working bro" ;
            break;
        case "D" :
            echo "You have to work harder!" ;
            break ;
        case "E" :
            echo "You are not doing very well, but don't give up!!!" ;
            break ;
        default :
            echo "{$grade} is not valid" ;
        
      }
      $date = date("l") ;
      echo $date ;
?>