<?php
@include 'connect.php';
if(isset($_POST['submit']))
{
    $usn=$_POST['usn'];
    $Name=$_POST['Name'];
    $Phone_no=$_POST['Phone_no'];
    $Father_name=$_POST['Father_name'];
    $Fphone_no=$_POST['Fphone_no'];
    $Address=$_POST['Address'];
    $room_no=$_POST['room_no'];
    $status=$_POST['status'];
    $fee_amount=$_POST['fee_amount'];
    $fee_month=$_POST['fee_month'];
    $course=$_POST['course'];
    $department=$_POST['department'];
    $sem=$_POST['sem'];

    
$sql="INSERT INTO student(usn,name,phone_no,father_name,fphone_no,address)
  VALUES('$usn','$Name','$Phone_no','$Father_name','$Fphone_no','$Address')";

  $sql1="INSERT INTO room_details(usn,room_no,status)
  VALUES('$usn','$room_no','$status')";

$sql2="INSERT INTO payment(usn,fee_amount,fee_month)
VALUES('$usn','$fee_amount','$fee_month')";

$sql3="INSERT INTO course_details(usn,course,department,sem)
VALUES('$usn','$course','$department','$sem')";

  $result=mysqli_query($con,$sql);
  $result1=mysqli_query($con,$sql1);
  $result2=mysqli_query($con,$sql2);
  $result3=mysqli_query($con,$sql3);
  if($result){
    //echo "data inserted successfully";
  
  header('location:thanku2.html');
   }else
   {
     die(mysqli_error($con));
 }
 if($result1){
  //echo "data inserted successfully";

header('location:thanku2.html');
 }else
 {
   die(mysqli_error($con));
}
if($result2){
  //echo "data inserted successfully";

header('location:thanku2.html');
 }else
 {
   die(mysqli_error($con));
}
if($result3){
  //echo "data inserted successfully";

header('location:thanku2.html');
 }else
 {
   die(mysqli_error($con));
}
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css">

    <title>student information</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label>usn</label>
    <input type="text" class="form-control"
    placeholder="enter your usn" name="usn" autocomplete="off">
</div>
<div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control"
    placeholder="enter your name" name="Name" autocomplete="off">
</div>
<div class="mb-3">
    <label>Phone_no</label>
    <input type="text" class="form-control"
    placeholder="enter your phone number" name="Phone_no" autocomplete="off">
</div>
<div class="mb-3">
    <label>Father_name</label>
    <input type="text" class="form-control"
    placeholder="enter your father name" name="Father_name" autocomplete="off">
</div>
<div class="mb-3">
    <label>Fphone_no</label>
    <input type="text" class="form-control"
    placeholder="enter your phone number" name="Fphone_no" autocomplete="off">
</div>
<div class="mb-3">
    <label>Address</label>
    <input type="text" class="form-control"
    placeholder="enter your address" name="Address" autocomplete="off">
</div>
<!-- <div class="mb-3">
    <label>Room_no</label>
    <input type="text" class="form-control"
    placeholder="enter room number" name="room" autocomplete="off">
</div> -->
<!-- <div class="mb-3">
    <label>Status</label>
    <input type="text" class="form-control"
    placeholder="enter room status" name="status" autocomplete="off">
</div> -->
<!-- <div class="mb-3">
    <label>Fee_amount</label>
    <input type="text" class="form-control"
    placeholder="enter the fees" name="fee_amount" autocomplete="off">
</div>
<div class="mb-3">
    <label>Fee_month</label>
    <input type="text" class="form-control"
    placeholder="enter the month of payment" name="fee_month" autocomplete="off">
</div> -->
<div class="mb-3">
    <label>Course</label>
    <input type="text" class="form-control"
    placeholder="enter the course" name="course" autocomplete="off">
</div>
<div class="mb-3">
    <label>Department</label>
    <input type="text" class="form-control"
    placeholder="enter the department" name="department" autocomplete="off">
</div>
<div class="mb-3">
    <label>Sem</label>
    <input type="text" class="form-control"
    placeholder="enter the semester" name="sem" autocomplete="off">
</div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>

    
  </body>
</html>