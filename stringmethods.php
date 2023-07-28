<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String methods</title>
</head>
<body>
   <?php 
   $name="Ajibade Abdulkabir Ade3151";
   echo strlen($name);
   echo"<br>";
   echo str_word_count($name);
   echo"<br>";
   echo strcmp($name, "Ajibade Kabir");
   echo"<br>";
   echo md5($name);
   echo"<br>";
   echo crypt($name,'lopalopabambina') ;
   echo"<br>";
   $a="2" + "100";
   $b="2" - 100;
   $c="2" * 100;
   $d="2" / 100;
   echo "here";
   $be="500";
   echo"<br>";
   echo var_dump($be);
   echo"<br>";
   echo is_numeric($be);
   echo"<br>";
echo var_dump($a);
echo"<br>";
echo is_int($a);
echo"<br>";
echo($b);
echo"<br>";
echo($c);
echo"<br>";
echo($d);
echo"<br>";
$conv=(int) $be;
echo var_dump ($conv);
echo"<br>";
echo pi();
echo"<br>";
echo floor (rand()/100000000);
echo"<br>";
echo rand(1,50);
echo"<br>";
// $arr=[];
$arr=explode(" ",$name);
print_r ($arr);
echo"<br>";
echo implode($arr);
echo"<br>";
echo $v=2 > 0 ?? "Free";
echo"<br>";
echo $v1=5 ?? "Free";
echo"<br>";
echo $v1=0 ?? "Free";
echo"<br>";
echo str_shuffle($name);
echo"<br>";
$date="04:30 am";
echo strtotime($date);
   ?> 
</body>
</html>