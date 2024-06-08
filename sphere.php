<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sphere</title>
</head>
<body>
    <form action="sphere.php" method="post">
        <label>radius</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form>
</body>
</html>
<?php
    $radius = $_POST[ "radius" ] ;
    $circumference = null ;
    $area = null ;
    $volume = null ;

    $circumference = 2 * pi() * $radius ;
    $circumference = round( $circumference, 2 ) ;
    echo "circumference = {$circumference} cm <br>" ;
    
    $area = pi( ) * pow( $radius, 2 ) ;
    $area = round( $area , 2 ) ;
    echo "area = {$area} cm^2 <br>" ;
    
    $volume = 4/3 * pi() * pow( $radius, 3 ) ;
    $volume = round( $volume, 2 ) ;
    echo "volume = {$volume} cm^3 <br>" ;
    
?>