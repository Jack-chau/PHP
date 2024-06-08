
<?php
    /***Echo***
    // Variable 
    $name = "Jack Chau" ;
    $food = "pizza" ;
    $email = "fake@gmail.com" ;

    $age = 21 ;
    $users = 2 ;
    $quantity = 4 ;
    $price = 7.5 ;
    $total = null ;

    echo "{$name} <br>" ;
    echo "Hello {$name}<br>" ;
    echo "You like {$food}<br>" ;
    echo "Your email is {$email}<br>" ;
    echo "You are {$age} years old";
    echo "There are {$users} online<br>";
    echo "You would like to buy {$quantity} items<br>" ;
    echo "You have ordered {$quantity} of {$food}<br>" ;
    $total = $quantity * $price ;
    echo "The total price is: \${$total}" ;
    */

    /***Arithmetic operators***/
    /*
    // + - * / ** %

    $x = 10 ;
    $y = 2 ;
    $z = null ;

    $z = $x + $y ;
    $z = $x - $y ;
    $z = $x * $y ;
    $z = $x / $y ;
    $z = $x ** $y ;
    $z = $x % $y ;

    echo $z ;
    */

    // $_GET, $_POST = $_GET: special variables used to collect data from an HTML form data
    //                 $_POST: is sent to the file in the action attribute od <form>
    //                 <form action="some_file.php" method="get" or method="post">
    
    // $_GET = Data is appended to the url
    //         NOT SECURE
    //         CHAR LIMITED
    //         Bookmark is possible w/ values
    //         GET requests can be cached

    //$_POST = DATA is packaged inside the body od the HTTP request
    //         MORE SECURE
    //         No data limit
    //         Cannot bookmark
    //         GET request are not cached
?>