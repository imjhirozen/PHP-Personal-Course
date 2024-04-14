<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio</title>
</head>
<body>
    <form action="./radio.php" method="post">
        <input type="radio" name="credit_card" value="Visa">
        Visa <br>
        <input type="radio" name="credit_card" value="Mastercard">
        Mastercard <br>
        <input type="radio" name="credit_card" value="Ameracan Express">
        Ameracan Express <br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>

<?php 

    if(isset($_POST["confirm"])){
        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
            
            switch($credit_card){
                case "Visa":
                    echo"You Select {$credit_card}";
                    break;
                case "Mastercard":
                    echo"You Select {$credit_card}";
                    break;
                case "Ameracan Express":
                    echo"You Select {$credit_card}";
                    break;
                default:
                    echo"Invalid Input";
            }
                
        }
        else echo "<h1>Please make a SELECTION</h1>";
        
        
    }

?>