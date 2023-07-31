<?php 
    require_once "database.php";
    $errors=[];
    $data=[];
    if(isset($_POST['Login'])){
        if(empty($_POST['Email'])){
            $errors['emailErr']="Your Email is Required";
        }
        else{
            $data['Email']=$_POST['Email'];
        }

        if(empty($_POST['Password'])){
            $errors['passwordErr']="Password is required";
        }
        else{
            $data['Password']=$_POST['Password'];
        }

        // simplifying inputs 
        $email=$_POST['Email'];
        $password=md5($_POST['Password']);
      
        // saving now 
        if(count($errors)==0){
              // Conditional selection in sql 
        $sqlcmd="SELECT * FROM user WHERE email= '$email'";
        $select=mysqli_query($connect, $sqlcmd);
        if(mysqli_num_rows($select)==0){
          $errors['loginErr']="Invalid username or password";
        }
        else{
            while($result=mysqli_fetch_array($select)){
                if($result['password']==$password){
                    echo "Login success";
                    header('Location:dashboard.php');
                    die();
                }
                else{
                    $errors['loginErr']="Password username or username";
                }
            }
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
    <title>Login</title>
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
      
      <form action="login.php" method="post">
        
      <div>
          <label for="email">Email</label> <br>
          <input  type="email" name="Email" value=" <?php echo array_key_exists('Email', $data)?$data['Email'] :" "?> ">

          <p style="color:red;">
            <?php echo array_key_exists('emailErr', $errors)? $errors['emailErr']:" ";
             echo array_key_exists('loginErr', $errors)? $errors['loginErr']:" ";
            ?>
        </p>
               </div>
    
      <div>
         <input type="password" name="Password" value="">
             <p style="color:red;">
            <?php echo array_key_exists('passwordErr', $errors)? $errors['passwordErr']:" ";
                echo array_key_exists('loginErr', $errors)? $errors['loginErr']:" ";
           ?>
            </p>
      </div>


      <div>
        <input type="submit" name="Login" value="Login" class="btn btn-outline-success mx-5 my-5">
        <button type="reset" class="btn btn-outline-warning mx-5 my-5">Clear</button>
</div>
    </form>
</div>

</main>
</body>
</html>