<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sanitize / Valid user input</title>
</head>
<body>
    <form action="sanitizeValidInput.php" method="post">
        username:<br>
        <input type="text" name="username">
        <br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php
    //<script>alert("You have a Virus!");</script)
    if( isset( $_POST[ "login" ] ) ){
        //$username = $_POST[ "username" ] ;
        $username = filter_input( INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS ) ; // filter fake input
    }
    echo "Hello {$username}<br>" ;
?>