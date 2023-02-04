<?php
@include 'connect.php';

$usn=$_GET['updateusn'];

$sql0="SELECT * FROM student WHERE usn='$usn'";
$result0=mysqli_query($con,$sql0);
$row=mysqli_fetch_assoc($result0);
$Name=$row['name'];
$Phone_no=$row['phone_no'];
$Father_name=$row['father_name'];
$Fphone_no=$row['fphone_no'];
$Address=$row['address'];

$sql01="SELECT * FROM payment WHERE usn='$usn'";
$result01=mysqli_query($con,$sql01);
$row=mysqli_fetch_assoc($result01);
$fee_amount=$row['fee_amount'];
$fee_month=$row['fee_month'];


$sql02="SELECT * FROM room_details WHERE usn='$usn'";
$result02=mysqli_query($con,$sql02);
$row=mysqli_fetch_assoc($result02);
$room_no=$row['room_no'];
$status=$row['status'];


$sql03="SELECT * FROM course_details WHERE usn='$usn'";
$result03=mysqli_query($con,$sql03);
$row=mysqli_fetch_assoc($result03);
$course=$row['course'];
$department=$row['department'];
$sem=$row['sem'];


if(isset($_POST['update']))
{
    $Name= $_POST['Name'];
    $Phone_no= $_POST['Phone_no'];
    $Father_name= $_POST['Father_name'];
    $Fphone_no= $_POST['Fphone_no'];
    $Address= $_POST['Address'];
    $room_no=$_POST['room_no'];
    $status=$_POST['status'];
    $fee_amount=$_POST['fee_amount'];
    $fee_month=$_POST['fee_month'];
    $course=$_POST['course'];
    $department=$_POST['department'];
    $sem=$_POST['sem'];


$sql = " UPDATE student SET name ='$Name',phone_no ='$Phone_no',father_name ='$Father_name'
,fphone_no ='$Fphone_no',address ='$Address' WHERE usn ='$usn' ";

$sql1 = " UPDATE room_details SET room_no='$room_no',status ='$status' WHERE usn ='$usn' ";

$sql2 = " UPDATE payment SET fee_amount ='$fee_amount',fee_month ='$fee_month' WHERE usn ='$usn' ";

$sql3 = " UPDATE course_details SET course ='$course',department ='$department'
,sem ='$sem' WHERE usn ='$usn' ";
  
  $result = mysqli_query($con,$sql);
  $result1 = mysqli_query($con,$sql1);
  $result2 = mysqli_query($con,$sql2);
  $result3 = mysqli_query($con,$sql3);

  if($result){
    echo "updated successfully";
   header('location:display.php');
  }else
  {
    die(mysqli_error($con));
}

  if($result1){
    echo "updated successfully";
   header('location:display.php');
  }else
  {
    die(mysqli_error($con));
}

  if($result2){
    echo "updated successfully";
   header('location:display.php');
  }else
  {
    die(mysqli_error($con));
}

  if($result3){
    echo "updated successfully";
   header('location:display.php');
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
    <label>Name</label>
    <input type="text" class="form-control"
    placeholder="enter your name" name="Name" autocomplete="off" value=<?php echo $Name;?>>
</div>
<div class="mb-3">
    <label>Phone_no</label>
    <input type="text" class="form-control"
    placeholder="enter your phone number" name="Phone_no" autocomplete="off"  value=<?php echo $Phone_no;?>>
</div>
<div class="mb-3">
    <label>Father_name</label>
    <input type="text" class="form-control"
    placeholder="enter your father name" name="Father_name" autocomplete="off"  value=<?php echo $Father_name;?>>
</div>
<div class="mb-3">
    <label>Fphone_no</label>
    <input type="text" class="form-control"
    placeholder="enter your phone number" name="Fphone_no" autocomplete="off"  value=<?php echo $Fphone_no;?>>
</div>
<div class="mb-3">
    <label>Address</label>
    <input type="text" class="form-control"
    placeholder="enter your address" name="Address" autocomplete="off"  value=<?php echo $Address;?>>
</div>
<div class="mb-3">
    <label>Room_no</label>
    <input type="text" class="form-control"
    placeholder="enter room number" name="room_no" autocomplete="off" value=<?php echo $room_no;?>>
</div>
<div class="mb-3">
    <label>Status</label>
    <input type="text" class="form-control"
    placeholder="enter room status" name="status" autocomplete="off" value=<?php echo $status;?>>
</div>
<div class="mb-3">
    <label>Fee_amount</label>
    <input type="text" class="form-control"
    placeholder="enter the fees" name="fee_amount" autocomplete="off"  value=<?php echo $fee_amount;?>>
</div>
<div class="mb-3">
    <label>Fee_month</label>
    <input type="text" class="form-control"
    placeholder="enter the month of payment" name="fee_month" autocomplete="off"  value=<?php echo $fee_month;?>>
</div>
<div class="mb-3">
    <label>Course</label>
    <input type="text" class="form-control"
    placeholder="enter the course" name="course" autocomplete="off" value=<?php echo $course;?>>
</div>
<div class="mb-3">
    <label>Department</label>
    <input type="text" class="form-control"
    placeholder="enter the department" name="department" autocomplete="off" value=<?php echo $department;?>>
</div>
<div class="mb-3">
    <label>Sem</label>
    <input type="text" class="form-control"
    placeholder="enter the semester" name="sem" autocomplete="off" value=<?php echo $sem;?>>
</div>
  <button type="update" class="btn btn-primary" name="update">update</button>
</form>
</div>

    
  </body>
</html>