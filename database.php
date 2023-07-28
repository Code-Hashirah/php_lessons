<?php 
define("server",'localhost');
define("user","root");
define("database",'school');
define("password",'');

$connect = mysqli_connect(server,user,password,database);
if(!$connect){
    echo "Unable to establish connection to Database". mysqli_connect_error($connect);
}
?>