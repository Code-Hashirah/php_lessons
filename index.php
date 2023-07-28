<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction to php</title>
</head>
<body>
    <h1>Welcome to php </h1>
    <?php print"Hello php"
    ?>
    <br>
    <?php  echo "Konichiwa"?>
<br>
    <?php 
    $first_name="kabir";
    $last_name="Aji <br> ";
    echo $first_name." ". $last_name;
    $debt=null;
    $a=43;
    $b=0.51;
    echo var_dump($a);
       echo var_dump($b);
        echo var_dump($debt);
        $first_num=67;
        $second_num=5;
        $ans=$first_num/$second_num;
        echo $ans;
    ?>
</body>
</html>