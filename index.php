
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $my_string = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";

    $badword = $_GET["badword"];

    echo strlen($my_string);

    echo "<br>";
    echo $my_string;
    
    ?>

    <br/>

    <?php
    echo str_replace("adipisicing", "***", $my_string);
    

    
    ?>

    <br>
    <?php

    $my_new_string = str_replace($badword, "***", $my_string);

   
    ?>
</body>
</html>
