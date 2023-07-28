<?php 
// print_r($_POST);
$name=$email=$phone=$gender=$address=$item="";
$nameErr=$emailErr=$phoneErr=$genderErr=$addressErr=$itemErr="";
if(isset($_POST['Register'])){
    
    if(empty($_POST['Name'])){
        $nameErr= "Name is required";
    }
    else{
        $name = $_POST['Name'];
    }

    if(empty($_POST['Email'])){
        $emailErr= "Email is required";
    }
    else{
        $email = $_POST['Email'];
    }
    if(empty($_POST['Phone'])){
        $phoneErr= "Phone number is required";
    }
    else{
         $phone = $_POST['Phone'];
    }
    if(empty($_POST['Gender'])){
        $genderErr= "Choose a gender";
    }
    else{
         $gender =$_POST['Gender'];
    }

    if(empty($_POST['Address'])){
        $addressErr= "Address is required";
    }
    else{
        $address = $_POST['Address'];
    }
    
    if(! array_key_exists('Item', $_POST)){
        $itemErr= "Select at least one item";
    }
    else{
        $item = implode(",",$_POST['Item']) ;
    }
   
   
    
    // echo"Done";
    // print_r($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Forms</title>
    <style>
        .form{
    display: flex;
    justify-content: center;
    border: 1px groove crimson;
    border-radius: 10px;
    padding: 20px;
    width: 50%;
    color:white;
}

.form-body input{
border: none;
border-bottom: 2px solid crimson;
width: 80%;
outline: none;
}
.form-body div{
    margin-bottom:10px;
}

#main{
    background-color:rgb(0,0,0);
    color:white;
    display:flex;
}
span{
    display:block;
}
    </style>
</head>
<body>
<main id= "main">

<div class="form">
   <div>
    <h2>Dashboard</h2>
   <span>Name</span> <p><?php echo $name ?></p>
      <span>Email</span>  <p><?php echo $email ?></p>
    <span>Phone</span>    <p><?php echo $phone ?></p>
    <span>Gender</span>    <p><?php echo $gender ?></p>
     <span>Item</span>   <p> <?php echo $item ?></p>
    <span>Address</span>    <p><?php echo $address ?></p>
   
    </div>
</div>

<div class="form">
      
      <form action="forms.php" method="post">
        
      <div>
          <label for="email">Name</label> <br>
          <input  type="text" name="Name">
          <span style="color:red;"> <?php echo $nameErr ?> </span>
      </div>
      <div>
          <label for="email">Email</label> <br>
          <input  type="text" name="Email">
          <span style="color:red;"> <?php echo $emailErr ?> </span>
      </div>
      <div>
          <label for="phone">Phone Number</label> <br>
          <input  type="text" name="Phone">
          <span style="color:red;"> <?php echo $phoneErr ?> </span>
      </div>
      <div>
          <label for="gender"><b>Gender</b> </label> <br>
        <p> Male <input  type="radio" name="Gender" value="Male"></p>
         <p>Female <input  type="radio" name="Gender" value="Female"></p>
         <span style="color:red;"> <?php echo $genderErr ?> </span>
      </div>
      <div>
        <label for="items"><b>Items</b> </label> 
     <p>TV <input type="checkbox" name="Item[]" value="Television"></p>
      <p>Microwave <input type="checkbox" name="Item[]" value="Microwave"></p> 
      <p>Freezer  <input  type="checkbox" name="Item[]" value="Freezer"></p> 
      <span style="color:red;"> <?php echo $itemErr ?> </span>
      </div>
      <div>
        <textarea name="Address" id="" cols="50" rows="5"></textarea>
        <span style= "color:red"> <?php echo $addressErr ?> </span>
      </div>
      <div>
        <input type="submit" name="Register" value="Register" class="btn btn-outline-success mx-5 my-5">
     </form>
</div>

</main>

     

      

      <script src="/css/bootstrap.bundle.min.js"></script>
</body>
</html>