<?php
    session_start() ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>home</title>
</head>
<body>
    This is the home page
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>

<?php
    echo $_SESSION[ "username" ] . "<br>" ; // calling a session variable from index page
    echo $_SESSION[ "password" ] . "<br>" ;

    if( isset( $_POST[ "logout" ] ) ){
        session_destroy() ;
        header( "Location: index.php" ) ;
    }
?>