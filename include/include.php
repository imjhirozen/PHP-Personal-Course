<?php

//  include() = Copies the content of a file ( php / html / text )
//              and includes it in your php file
//              Sections of our website become reusable
//              Change only need to be made in one place


    include("header.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <p>Lorem, ipsum dolor sit amet consectetur <br>
        adipisicing elit. Quasi minus culpa vero consectetur <br>
        perspiciatis delectus ut perferendis ducimus fugiat quas <br>
        repellat, enim voluptatem recusandae veniam explicabo animi <br>
        sint quibusdam voluptatibus.</p>
</body>
</html>

<?php
     include("footer.html");
?>