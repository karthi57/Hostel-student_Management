<?php
@include 'connect.php';

if(isset($_GET['deleteusn']))
{
    $usn=$_GET['deleteusn'];
   $sql="DELETE FROM student WHERE usn='$usn'";
   $result=mysqli_query($con,$sql);
   if($result){
    header('location:display.php');
   }
    else{
        die(mysqli_error($con));
    }

    $sql="DELETE FROM payment WHERE usn='$usn'";
   $result=mysqli_query($con,$sql);
   if($result){
    header('location:display.php');
   }
    else{
        die(mysqli_error($con));
    }


    $sql="DELETE FROM room_details WHERE usn='$usn'";
   $result=mysqli_query($con,$sql);
   if($result){
    header('location:display.php');
   }
    else{
        die(mysqli_error($con));
    }


    $sql="DELETE FROM course_details WHERE usn='$usn'";
   $result=mysqli_query($con,$sql);
   if($result){
    header('location:display.php');
   }
    else{
        die(mysqli_error($con));
    }


   }


?>