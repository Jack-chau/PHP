<?php
/*
    // for loop = repeat some code a certain # of times
    for( $i = 10 ; $i > 0; $i-=2 ){
        echo "{$i} Hello<br>" ;
    }
    */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="forLoop.php" method="post">
        <label>Enter a number to down to:</label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>
</body>
</html>

<?php
    $counter = $_POST[ "counter" ] ;

    for( $i = $counter; $i >= 0 ; $i-=2 ){
        echo "{$i}<br>" ;
    }
?>