<?php
/*
    // associative array = An array made of key=value pairs

    $capitals = [ "USA" => "Washington D.C",
                  "Japan" => "Kyoyo",
                  "South Korea" => "Seoul", 
                  "India" => "New Delhi",
                ] ;

    // echo $capitals[ "Japan" ] ;
    $capitals[ "USA" ] = "Las Vegas" ;
    $capitals[ "China" ] = "Beijing" ;

    foreach( $capitals as $key => $value ){
        echo $key . ": " . $value . "<br>" ;
    }

    $keys = array_keys( $capitals ) ;
    foreach( $keys as $key ){
        echo $key . "<br>" ;
    }

    $values = array_values( $capitals ) ;
    foreach( $values as $value ){
        echo $value . "<br>" ;
    }

    // flip key and value
    $flipedCapitals = array_flip( $capitals ) ;
    foreach( $capitals as $key => $value){
        echo $key . " = " . $value . "<br>";
    }
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <form action="associativeArray.php" method="post">
        <label>Enter a country<br></label>
        <input type="text" name="country">
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php
    $capitals = [ "USA" => "Washington D.C",
    "Japan" => "Kyoyo",
    "South Korea" => "Seoul", 
    "India" => "New Delhi",
    ] ;
    $capital = $capitals[ $_POST["country"] ] ;
    echo "The capitals of {$_POST["country"]} is {$capital}" ;
?>