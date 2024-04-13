<?php

$grade = "B";

    switch($grade){
        case "A":
            echo"VERY NICE";
            break;
        case "B":
            echo"NICE";
            break;
        case "C":
            echo"OKAY";
            break;
        case "D":
            echo"BAD";
            break;
        default:
        echo "invalid input {$grade}";
    }

// ------------------------------------------------------------------------------------------------------------------------------------------

    for($i = 0; $i <= 5; $i++){
        echo"{$i} <br>";
    }

// ------------------------------------------------------------------------------------------------------------------------------------------


$status = true;
$count = 0;

    while($status){
        if($count == 10){
            $status = false;
        }
        echo"{$count}<br>";
        $count++;
    }
