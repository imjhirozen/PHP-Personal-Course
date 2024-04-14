<?php

    // session = SGB used to store information on a user
    //           to be used across multiple pages.
    //           A user is assigned a session-id
    //           ex. Login credentials

    session_start();

    if(isset($_POST["submit"])){
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
            
            ob_start();
        
            // Redirect to the home page
            header("Location: sessionHomePage.php");
            
            ob_end_flush();
            exit;
        }else echo"somethings wrong";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="./session.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="submit">
    </form>
</body>
</html>