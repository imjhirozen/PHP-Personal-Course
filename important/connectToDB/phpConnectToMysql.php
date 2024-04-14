<?php
    
    $db_server = "localhost";   // default [localhost or 172.0.0.1]
    $db_user = "root";          // default 
    $db_pass = "";              // default in XAMPP but mysql-Workbench have passworde depend if you put a password
    $db_name = "testdb";        // schema name or database name
    

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);   // connect to DB

    }catch(mysqli_sql_exception){   // cathch the error if the connection failed
        echo "somethings wrong";
    }
    
    if(!$conn) echo "somethings wrong";     // cathch the error if the connection failed
    else echo "connected";                  // print if the connection is okay
        
?>
