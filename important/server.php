<?php

    // $_SERVER  = SGB that contains headers, path, and script location.
    //             tha entries in this array are created by the web server.
    //             Shows nearly everything you need to know about the current web page env.


    if($_SERVER["REQUEST_METHOD"] == "POST") {
        echo strtoupper($_POST["username"]);
        echo "<br> HELLO THIS IS POST REQUEST";
    
    }else {
        echo "REQUEST IS NOT POST";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username">
        <input type="submit" name="submit">
    </form>
</body>
</html>

