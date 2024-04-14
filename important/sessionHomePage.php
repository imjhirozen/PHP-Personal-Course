<?php
    session_start();

    if(empty($_SESSION["username"])){
        header("Location: session.php");
        exit;
    }

    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: session.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
</head>
<body>
    <h1>Hello <?php echo" {$_SESSION["username"]} "; ?></h1>
    <h1>Password <?php echo" {$_SESSION["password"]} "; ?></h1>
    <form action="./sessionHomePage.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>