<?php
    // While Loop = Do some code infinitely while some condition remains true
/*
    $counter = 0 ;
    while( $counter < 10 ){
        $counter += 1 ;
        echo "{$counter}<br>" ;
    }
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop</title>
</head>
<body>
    <form action="whileLoop.php" method="post">
        <input type="submit" name="start" value="start">
        <input type="submit" name="stop" value="stop">

    </form>
</body>
</html>


<?php
    $seconds = 0 ;
    $running = true ;

    while( isset( $_POST[ "start" ] ) ){
        if( isset( $_POST[ "stop" ] ) ){
            $running = false ;
            break ;
        }
        elseif( $seconds< 5){
            $seconds += 1;
            echo $seconds ;
            sleep(1) ;
        }
        else{
            echo "<br>Time out!!" ;
            break;
        }
    }
?>
