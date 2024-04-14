<?php
    // hashing = transforming sensitive data [password]
    //           into letters, numbers, and/or symbol
    //           via a mathematical process. (similar to encryption)
    //           Hide the original data from 3rd parties

    $password = "imjhirozen";

    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    if(password_verify("imjhirozen", $hash)) 
        echo "true";
    else 
        echo "false";

    
    
?>