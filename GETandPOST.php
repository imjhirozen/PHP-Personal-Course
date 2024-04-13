<?php

/* 
    $_GET, $_POST = special variable use to collect data from an html for
                    data is sent to the file in the action attrivute of <form>
                    <form action="some file.php" method="get">
*/

/* 
    $_GET = Data is appended to url
            NOT SECURE
            char limit
            Bookmark is possible w/ values
            GET request can be cached
            Better for search page
*/

/* 
    $_POST = Data is packaged inside the body of the HTTP request
             MORE SECURE
             No DATA limit
             Cannot bookmark
             GET request are not cached
             Better for submitting credentials
*/

    /* 
        echo $_GET["username"];
        echo $_GET["password"]; 
    */

    echo $_POST["username"];
    echo $_POST["password"]; 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>

    <form action="./GETandPOST.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username">
        <label for="password">Password</label>
        <input type="password" name="password">
        <input type="submit" value="log in">
    </form>
    <button id="btn1">CLICK ME</button>

    <script type="module" src="../assets/js/index.js"></script>
</body>
</html>