<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotto Baba Ijebu</title>
</head>
<body>
  <?php
//   declaring static input 
  $user_guess="23,43,57";
//   declaring an empty array for the random numbers generated
  $rand_array=[];
  for($i=1; $i<7; $i++){
    $random_guess=rand(1,100);
    array_push($rand_array,$random_guess);
  }
  print_r($rand_array);
  echo "<br/>";
//   $arr=[];
  $arr=explode(",",$user_guess);
  echo "<br/>";
  print_r($arr);
  $text="cats, are, cute";
  $output=explode(",",$text);
  print_r($output);
  // declaring indicator 
$indicator=0;
foreach($rand_array as $pcnum){
    foreach($arr as $usernum){
        if($pcnum==$usernum){
            $indicator++;
        }
    }
}
echo "<br/>";
echo $indicator."match";
if($indicator==2){
    echo "Two sure";
    echo "<br/>";
}
elseif($indicator==3){
    echo "Three direct";
}
else{
    echo "<br/>";
    echo"Sorry try again ";
}


  ?>
</body>
</html>