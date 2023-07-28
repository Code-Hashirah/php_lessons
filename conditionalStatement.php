<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date time</title>
</head>
<body>
    <?php 
    $hour=date('H');
    echo $hour;
    if($hour >0 && $hour<12){
        echo "<br>";
        echo"Good morning";
    }
    elseif($hour >12 && $hour <16){
        echo "<br>";
        echo"Good afternoon";
    }
    else{
        echo "<br>";
        echo"Good evening";
    }

    $score=array(18,100,30);
    $len=count($score);
    $newArr=[];
    for( $i=0; $i<$len; $i++){
        // $score[i]-5;
        $newArr[$i]=$score[$i]-5;
    }
 
    echo "<br>";
    echo "Old array";
    print_r ($score);
    echo "<br>";
    echo "new array";
    print_r ($newArr);
    echo "<br>";

// echo "One to One thousand using while loop";
// echo "<br>";
// $k=1;
// $new="";
// while($k<=1000){
//     if($k%2 == 0){
//         // echo $k ."is an even number";
//         $new .= "$k is an even number <br/>";
//     }
//     else{
//         // echo $k ."is an odd number";
//         $new .= "$k is an odd number <br/>";
//     }
//     $k++;
// }
// echo $new;
$tab=1;
$mul="";
$x=0;
do{
$x=3*$tab;
$mul .= "3 X $tab = $x  <br/>";
$tab++;
}
while($tab<=12);
echo $mul;
    ?>
</body>
</html>