<?php
        //session = SGB (super global variable) used to store information on a user to be used across multiple pages.
        //          A user is assigned a session-id ex. login credentials.

        session_start( ) ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>logIn</title>
</head>
<body>
        <form action="index.php" method="post">
                username:<br>
                <input type="text" name="username"><br>
                password:<br>
                <input type="text" name="password"><br>
                <input type="submit" name="login" value="Login">
        </form>
</body>
</html>

<?php
/*
        $_SESSION[ "username" ] = "Jack Chau" ;
        $_SESSION[ "password" ] = "Jack0303" ;

        echo $_SESSION[ "username" ] . "<br>" ;
        echo $_SESSION[ "password" ] . "<br>" ;
*/
        if( isset( $_POST[ "login" ] ) ){
                
                if( !empty( $_POST[ "username" ] ) && !empty( $_POST[ "password" ] ) ){
                        $_SESSION[ "username" ] = filter_input( INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS) ;
                        $_SESSION[ "password" ] = filter_input( INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS ) ;

                        echo "Username is {$_SESSION[ "username" ]}<br>" ;
                        echo "Password is {$_SESSION[ "password" ]}<br>" ;

                        header( "Location: home.php") ; // redirect to login page
                }
                else{
                        echo "missing username/password<br>" ;
                }

        }       
?>