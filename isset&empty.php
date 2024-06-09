<?php
/*
    // isset() = Returns TRUE if a variable is declared and not null
    // empty() = Returns TRUE if a variable is not declared, false, null, ""

    $username = "Jack" ;
    $girlFriend = "Nora" ;
    //$girlFriends = "Nicole chen" ;
    echo isset( $username ) ;  //return 1, is means true
    echo isset( $girlFriend ) ; //return empty

    if( isset( $girlFriend ) ) {
        echo "<br>Jack has girl friend!<br>Yea!!!!" ;
    }else{
        echo "<br>Jack is single<br>Sad!" ;
    }

    if( empty( $girlFriends ) ) {
        echo "<br>Jack has no other girl friends!" ;
    }else{
        echo "<br>which girl friend jack like the most?" ;
    }
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset&empty</title>
</head>
<body>
    <form action="isset&empty.php" method="post">
        <label>UserName:</label>
        <input type="text" name="username"><br>
        <label>Password:</label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php
    foreach( $_POST as $key => $value ){
        echo "{$key} = {$value}<br>" ;
    }
/*
    if( isset( $_POST[ "login" ] ) ){
        $username = $_POST[ "username" ] ;
        $password = $_POST[ "password" ] ;

        if( empty( $username ) ){
            echo "Username is missing" ;
        }
        elseif( empty( $password ) ){
            echo "password is missing" ;
        }
        else{
            echo "Hello {$username}" ;
        }
    }
*/
?>