<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Operators</title>
</head>
<body>
    <?php
    $a = 2 > 6?'Rahman': 23;
    // $sa=32?? 'error';
    echo $a;
    echo "<br>";
    // echo $sa;
    //array 
    $names=array('Dotun','Donut','Ibrahim');
    $nums=array(23,34,32,44,0);
    print_r($names + $nums);
    ?>
</body>
</html>