<?php
@include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Document</title>
    
</head>
<body>
    
<div class="container my-5">
    <form method="POST">
        <input type="text" placeholder="Search data" name="search">
        <button class="btn btn-dark btn-sm" name="submit">Search</button>
   </form>
   <div class="container my-5">
 
      <?php 
        if(isset($_POST['submit'])){
            $search=$_POST['search'];
            $sql= "SELECT * FROM `student` WHERE usn='$search' ";
            $sql1= "SELECT * FROM `payment` WHERE usn = '$search' ";
            $sql2= "SELECT * FROM `room_details` WHERE usn = '$search' ";
            $sql3= "SELECT * FROM `course_details` WHERE usn = '$search' ";

            $result= mysqli_query($con, $sql);
            $result1= mysqli_query($con, $sql1);
            $result2= mysqli_query($con, $sql2);
            $result3= mysqli_query($con, $sql3);

            if($result){
                
                if(mysqli_num_rows($result)>0)
                {
                    
                   while( $row = mysqli_fetch_assoc($result)){
                    echo '
                    <tbody>
                        <tr>
                            <td>'.$row['usn'].'</td><br><br>
                            <td>'.$row['name'].'</td><br><br>
                            <td>'.$row['phone_no'].'</td><br><br>
                            <td>'.$row['father_name'].'</td><br><br>
                            <td>'.$row['fphone_no'].'</td><br><br>
                            <td>'.$row['address'].'</td><br><br>
                        </tr>
                    </tbody>';
                }
            }

                else{
                    echo '<h2 class= text-danger> Data not Found</h2>';
                }

            }

        

            if($result1){
                
                if(mysqli_num_rows($result1)>0)
                {
                    
                    $row = mysqli_fetch_assoc($result1);
                    echo '
                    <tbody>
                        <tr>
                            
                            <td>'.$row['fee_amount'].'</td><br><br>
                            <td>'.$row['fee_month'].'</td><br><br>
                           
                        </tr>
                    </tbody>';
                }

            }


            if($result2){
                
                if(mysqli_num_rows($result2)>0)
                {
                    
                    $row = mysqli_fetch_assoc($result2);
                    echo '
                    <tbody>
                        <tr>
                           
                            <td>'.$row['room_no'].'</td><br><br>
                            <td>'.$row['status'].'</td><br><br>
                           
                        </tr>
                    </tbody>';
                }

            }


            if($result3){
                
                if(mysqli_num_rows($result3)>0)
                {
                    
                    $row = mysqli_fetch_assoc($result3);
                    echo '
                    <tbody>
                        <tr>
                            
                            <td>'.$row['course'].'</td><br><br>
                            <td>'.$row['department'].'</td><br><br>
                            <td>'.$row['sem'].'</td><br><br>
                            
                        </tr>
                    </tbody>';
                }

            }




        }



     ?>

     



     
   </div>
</div>

</body>
</html>