<?php
@include 'config.php';

if(isset($_POST['submit'])){

  $id = mysqli_real_escape_string($con,$_POST['usn']);
  $name = mysqli_real_escape_string($con,$_POST['name']);
  $pass =  mysqli_real_escape_string($con,$_POST['pass']);
  $cpass =  mysqli_real_escape_string($con,$_POST['cpass']);
  // $user_type = $_POST['user_type'];

  $select = " SELECT * FROM userinfo WHERE id = '$id' && password='$pass' ";

  $result = mysqli_query($con,$select);

  if(mysqli_num_rows($result) > 0)
  {
    $error[] = 'user already exist.!';

  }
  else
  {
    if($pass != $cpass){
      $error[]= 'password not matched';
    }
    else
    {
      $insert = "INSERT INTO userinfo (id, name, password) VALUES ('$id','$name','$pass')";
      mysqli_query($con,$insert);
      header('location:login.php');
    }
  }

};

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
     <link rel="stylesheet" href="main1.css">
    
</head>
<body>
   
     <form class="register" action="" method="POST" autocomplete="off">
     
          <h1>Register</h1>
            
       <?php
       
        if(isset($error))
        {
         foreach($error as $error)
         {
             echo '<span class="error-msg">'.$error.'</span>';
         };
       
        };

        ?>
        
        <div class="formdesign">
          <input type="text" name="usn" placeholder="Enter USN">
        </div>

        <div class="formdesign">
          <input type="text" name="name" placeholder="Enter name">
        </div>

        <div  class="formdesign">
          <input type="password" name="pass"  placeholder ="Enter password">
        </div>

        <div  class="formdesign">
          <input type="password" name="cpass"  placeholder ="Confirm password">
        </div>
      

        <input type="submit" name="submit" value="Register now" class="loginbtn">
        <p>Already have an account?<a href="login.php">Login</a></p>


      </form>

       
</body>
</html>