<?php 
    require_once "database.php";
    $errors=[];
    $data=[];
    if(isset($_POST['Register'])){
        if(empty($_POST['Name'])){
            $errors['nameErr']="Your name is required";
        }
        else{
            $data['Name']=$_POST['Name'];
        }

        if(empty($_POST['Email'])){
            $errors['emailErr']="Your Email is Required";
        }
        else{
            $data['Email']=$_POST['Email'];
        }

        if(empty($_POST['Phone'])){
            $errors['phoneErr']="Your phone is Required";
        }
        else{
            $data['Phone']=$_POST['Phone'];
        }

        if(empty($_POST['Gender'])){
            $errors['genderErr']="Choose your gender";
        }
        else{
            $data['Gender']=$_POST['Gender'];
        }

        if(empty($_POST['Item'])){
            $errors['itemErr']="Choose at least one item";
        }
        else{
            $data['Item']=$_POST['Item'];
        }
        
        if(empty($_POST['Address'])){
            $errors['addressErr']="Address is required";
        }
        else{
            $data['Address']=$_POST['Address'];
        }

        if(empty($_POST['Password'])){
            $errors['passwordErr']="Password is required";
        }
        else{
            $data['Password']=$_POST['Password'];
        }

        if(empty($_POST['Image'])){
            $errors['imageErr']="Image is required";
        }
        else{
            $data['Image']=$_POST['Image'];
        }
        // simplifying inputs 
        $name=$_POST['Name'];
        $email=$_POST['Email'];
        $phone=$_POST['Phone'];
        $gender=$_POST['Gender'];
        $item=implode(",",$_POST['Item']);
        $address=$_POST['Address'];
        $password=md5($_POST['Password']);
        $image=$_POST['Image'];
        // saving now 
        if(count($errors)==0){
            $sqlcmd="INSERT INTO user(name,email,phone,gender,item,address,password,image) VALUES('$name','$email','$phone','$gender','$item','$address', '$password','$image')";
            if(mysqli_query($connect, $sqlcmd)){
                echo "Data Submitted Successfuly";
            }
            else{
                echo "Unable to save data";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Form Array</title>
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
    </style>
</head>
<body>
<main id= "main">

<div class="form">
   <div>
    <h2>Dashboard</h2>
   <span>Name</span> <p><?php echo array_key_exists('Name',$data)? $data['Name']: " " ?></p>
      <span>Email</span>  <p><?php echo array_key_exists('Email',$data)? $data['Email']: " " ?></p>
    <span>Phone</span>    <p><?php echo array_key_exists('Phone',$data)? $data['Phone']: " " ?></p>
    <span>Gender</span>    <p><?php echo array_key_exists('Gender',$data)? $data['Gender']: " " ?></p>
     <span>Item</span>   <p><?php echo array_key_exists('Item',$data)?implode(",", $data['Item']): " " ?></p>
    <span>Address</span>    <p><?php echo array_key_exists('Address',$data)? $data['Address']: " " ?></p>
    <p>Image</p> <img width="200px" height="200px" src="<?php echo array_key_exists('Image',$data)? $data['Image']: " " ?>" alt="image">
   
    </div>
</div>

<div class="form">
      
      <form action="formArray.php" method="post">
        
      <div>
          <label for="email">Name</label> <br>
          <input  type="text" name="Name" value=" <?php echo array_key_exists('Name',$data)? $data['Name'] : " "
           ?> ">
           <p style="color:red;">
            <?php echo array_key_exists('nameErr', $errors)? $errors['nameErr']:" "
             ?>
           </p>
         
      </div>
      <div>
          <label for="email">Email</label> <br>
          <input  type="email" name="Email" value=" <?php echo array_key_exists('Email', $data)?$data['Email'] :" "?> ">

          <p style="color:red;">
            <?php echo array_key_exists('emailErr', $errors)? $errors['emailErr']:" "
            ?>
        </p>
               </div>
      <div>
          <label for="phone">Phone Number</label> <br>
          <input  type="text" name="Phone" value=" <?php echo array_key_exists('Phone', $data)? $data['Phone']: " " ?> ">
          <p style="color:red;">
            <?php echo array_key_exists('phoneErr', $errors)? $errors['phoneErr']:" "
            ?>
            </p>
            
      <div>
          <label for="gender"><b>Gender</b> </label> <br>
        <p> Male <input  type="radio" name="Gender" value="Male"></p>
         <p>Female <input  type="radio" name="Gender" value="Female"></p>
         <p style="color:red;">
            <?php echo array_key_exists('genderErr', $errors)? $errors['genderErr']:" "
            ?>
            </p>
      <div>
        <label for="items"><b>Items</b> </label> 
     <p>TV <input type="checkbox" name="Item[]" value="Television"></p>
      <p>Microwave <input type="checkbox" name="Item[]" value="Microwave"></p> 
      <p>Freezer  <input  type="checkbox" name="Item[]" value="Freezer"></p> 
      <p style="color:red;">
            <?php echo array_key_exists('itemErr', $errors)? $errors['itemErr']:" "
            ?>
            </p>
      <div>
        <textarea name="Address" id="" cols="50" rows="5" value="<?php echo array_key_exists('Address', $data)? $data['Address']:" " ?>" ></textarea>
        <p style="color:red;">
            <?php echo array_key_exists('addressErr', $errors)? $errors['addressErr']:" "
            ?>
            </p>
    </div>

      <div>
        <input type="password" name="Password" value="">
        <p style="color:red;">
            <?php echo array_key_exists('passwordErr', $errors)? $errors['passwordErr']:" "
            ?>
            </p>
      </div>

      <div>
        <input type="text" name="Image" value="">
        <p style="color:red;">
            <?php echo array_key_exists('imageErr', $errors)? $errors['phoneErr']:" "
            ?>
            </p>
      </div>

      <div>
        <input type="submit" name="Register" value="Register" class="btn btn-outline-success mx-5 my-5">
        <button type="reset" class="btn btn-outline-warning mx-5 my-5">Clear</button>
    </form>
</div>

</main>
</body>
</html>