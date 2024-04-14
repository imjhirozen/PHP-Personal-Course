<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./validation.php" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username"> <br>
        <label for="age">Age</label>
        <input type="text" id="age" name="age"> <br>
        <label for="email">Email</label>
        <input type="text" id="email" name="email"> <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>


<?php

// ---------------------------- FILTER ------------------------------------------------------------


if(isset($_POST["submit"])){
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    echo "HELLO {$username} <br>";
    echo "You are {$age} year old <br>";
    echo "Your email {$email} <br>";

}


// ---------------------------- VALIDATE ------------------------------------------------------------

if(isset($_POST["submit"])){

    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    echo "You are {$age} year old <br>";
    validate_email($email);

}

function validate_email ($email){
    if(empty($email)) echo"That email wasn't valid";
    else echo "your email is: {$email}";
}

?>