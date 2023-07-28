<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $numbers=[12,23,24,56,67,80];
    echo $numbers[0];
    // array_push($numbers,'56');
    // array_push($numbers,'56','67','54');
    $numbers[count($numbers)]='Mala';
    print_r($numbers);
    ?>
</body>
</html>