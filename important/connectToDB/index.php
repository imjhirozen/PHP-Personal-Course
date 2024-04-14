<?php
    include("./phpConnectToMysql.php"); // my sql connection


    // Create a query to insert to the database [username, password]
    $sql = "INSERT INTO users (username, password)
            VALUE ('ranielo', '123')";

    
    try{
        mysqli_query($conn, $sql);  // send data to the data base

    }catch(mysqli_sql_exception){   // e check ninya kung naay error sa pag send
        echo "Somethings Wrong";    // print something

    }

// -------------------------------------------------------------------------------------------------------------------------

    $selectSql = "SELECT * FROM users";             // Create a mysql script select all the users table
    $result = mysqli_query($conn, $selectSql);      // if naay makitan na data mo return siyag object

    if(mysqli_num_rows($result) > 0){               // check if the result > 0 = TRUE -> Found Data
                                                    // if <= 0 gani kay FALSE na siya -> no DATA found

        while($row = mysqli_fetch_assoc($result)){  // Loop rows until the end 
            echo $row["id"] . "<br>";               // Print the data
            echo $row["username"] . "<br>";
            echo $row["password"] . "<br>";
            echo $row["reg_date"] . "<br>";
        };
    }else echo "No user found";                     // if somethings wrong e print niya





    // close the connection mysql
    mysqli_close($conn);

    
?>