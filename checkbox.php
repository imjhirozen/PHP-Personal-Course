<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./checkbox.php" method="post">
        <input type="checkbox" id="pizza" name="foods[]" value="Pizza">
        <label for="pizza">Pizza</label> <br>
        <input type="checkbox" id="hamburger" name="foods[]" value="Hamburger">
        <label for="hamburger">Hamburger</label> <br>
        <input type="checkbox" id="hotdog" name="foods[]" value="Hotdog">
        <label for="hotdog">Hotdog</label> <br>
        <input type="checkbox" id="tacho" name="foods[]" value="Tacho">
        <label for="tacho">Tacho</label> <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    /* 
    if(isset($_POST["submit"])){
        if(isset($_POST["pizza"])) echo "You like pizza <br>";
        if(isset($_POST["hamburger"])) echo "You like hamburger <br>";
        if(isset($_POST["hotdog"])) echo "You like hotdog <br>";
        if(isset($_POST["tacho"])) echo "You like tacho <br>";
    } 
    */

    if(isset($_POST["submit"])){
        $foods = $_POST["foods"];

        foreach($foods as $food){
            echo $food . "<br>";
        }
    }

?>