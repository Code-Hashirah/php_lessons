<?php 
    require_once 'database.php';
    $sqlcmd="SELECT * FROM user";
    $selectQuery=mysqli_query($connect, $sqlcmd);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Profiles</title>
</head>
<body>
    <div class="row">


    <?php 
    while($result=mysqli_fetch_array($selectQuery)){
        ?>
   
    
    <div class="card col-4" >
      <img src="<?php echo $result['image'] ?>" class="card-img-top" alt="...">
      <div class="card-body">
       <span class="text-danger">Name</span> <h5 class="card-title"><?php echo $result['name'] ?></h5>
       <span class="text-danger">Email</span> <h6 class="card-subtitle mb-2 text-muted "><?php echo $result['email']?></h6>
       <span class="text-danger">Contact</span>  <p class="card-text"><?php echo $result['phone'] ?></p>
       <span class="text-danger">Gender</span>  <p class="card-text"><?php echo $result['gender'] ?></p>
       <span class="text-danger">Items bought</span> <p class="card-text"><?php echo $result['item'] ?></p>
       <span class="text-danger">Address</span> <p class="card-text"><?php echo $result['address'] ?></p>
       <span class="text-danger">Status</span>  <p class="card-text">Successful!</p>
      </div>
    </div>
    <?php
 };
?>
    </div>
  <link rel="stylesheet" href="css/bootstrap.bundle.min.js">
</body>
</html>