<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HELLO</title>
</head>
<body>
    <form action="./array.php" method="post">
        <label for="country">Enter a Country</label>
        <input type="text" name="country">
        <input type="Submit">
    </form>

</body>
</html>

<?php


$food = array("apple", "orange", "banana", "coconut");

// $food[0] = "nice";
// array_push($food, "nice", "goods");
// array_pop($food);
// array_shift($food);
// $reverse_array = array_reverse($food);
// echo count($food);

/* foreach($food as $foods){
    echo $foods . "<br>";
}; */


$capitals = array(
    "USA" => "WASHINGTON D.C",
    "JAPAN" => "KYOTO",
    "SOUTH KOREA" => "SEOUL",
    "INDIA" => "NEW DELHI"
);

$country = $capitals[$_POST["country"]];

echo $country;

/* 
    $capitals["USA"] = "LAS Vegas";
    $capitals["China"] = "Beijing";
    array_pop($capitals);
    array_shift($capitals);
    $key = array_keys($capitals);
    $value = array_values($capitals);
    $capitals = array_flip($capitals);
    $capitals = array_reverse($capitals);
    echo count($capitals);
*/

    /* foreach($capitals as $key => $value){
        echo "{$key} = {$value} <br>";
    } */

?>