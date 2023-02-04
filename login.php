<?php
@include 'config.php';

session_start();
if(isset($_POST['submit']))
{

  $id = mysqli_real_escape_string($con,$_POST['usn']);
  $name = mysqli_real_escape_string($con,$_POST['name']);
  $pass =  mysqli_real_escape_string($con,$_POST['pass']);
  // $cpass =  mysqli_real_escape_string($con,$_POST['cpass']);
  $user_type = $_POST['user_type'];

  $select = " SELECT * FROM userinfo WHERE id = '$id' && password='$pass' ";

  $result = mysqli_query($con,$select);

  if(mysqli_num_rows($result) > 0)
  {
    $row = mysqli_fetch_array($result);

    if($row['user_type'] == 'admin')
    {
      $_SESSION['admin_name'] = $row['name'];
      header('location:display.php');
    }
    elseif($row['user_type'] == 'user')
    {
      $_SESSION['user_name'] = $row['name'];
      header('location:user.php');
    }
  }else
  {
    $error[] = 'Incorrect usn or password';
  }
};

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!-- css file -->
    <link rel="stylesheet" href="main1.css">
    

</head>
<body>
    <form  action=""  method="POST" autocomplete="off">  

       <h1>Login</h1>
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

        
        <div class="formdesign">
        <select name="user_type" id="">
            <option value="user"> User</option>
            <option value="admin"> Admin</option>
        </select><br>
        </div>

        
        <input type="submit" name="submit" value="Login" class="loginbtn" >
        <p>Don't have an account?<a href="registration.php">register</a></p>
        
      </form>
</body>
</html>
