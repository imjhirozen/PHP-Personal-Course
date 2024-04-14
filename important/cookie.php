<?php

    // cookie = information about a user stored in a user's web-browser
    //          targeted advertisemeents, browsing preference, and
    //          other non-sensitive data

    //         KET         VALUE    EXPIRE-TIME           PATH
    //setcookie ("fav_food", "pizza", time() + (86400 * 2), "/");
    //setcookie ("fav_drinks", "coffee", time() + (86400 * 3), "/");
    //setcookie ("fav_dessert", "ice cream", time() + (86400 * 4), "/");


    // foreach($_COOKIE as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }

    // if(isset($_COOKIE["fav_food"])) echo "Buy some {$_COOKIE["fav_food"]}";
    // else echo"I don't know you fav food";

?>