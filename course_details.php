<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a href="http://localhost/student/display.php#" class="w3-bar-item w3-button">STUDENT_DETAILS</a>
  <a href="http://localhost/student/room.php#" class="w3-bar-item w3-button">ROOM</a>
  <a href="http://localhost/student/payment.php#" class="w3-bar-item w3-button" >PAYMENT</a>
  <a href="http://localhost/student/course_details.php#" class="w3-bar-item w3-button">COURSE_DETAILS</a>
</div>

<div>
  <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>

  <div class="w3-container">
    
  </div>
</div>

<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
     
</body>
</html>
<?php
@include 'connect.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css">

</head>
<body>
    <div class="container">
        
    <table class="table">
  <thead>
    <tr>


    
      <th scope="col">USN</th>
      <th scope="col">COURSE</th>
      <th scope="col">DEPARTMENT</th>
      <th scope="col">SEM</th>
    </tr>
  </thead>
  <tbody>
  
  <?PHP
$sql="SELECT * FROM course_details";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
   $usn=$row['usn'];
    $course=$row['course'];
    $department=$row['department'];
    $sem=$row['sem'];
    echo '<tr>
    <th scope="row">'.$usn.'</th>
    <td>'.$course.'</td>
    <td>'.$department.'</td>
    <td>'.$sem.'</td>
    
  
  
</tr>';

    }
}

?>

    
  </tbody>
</table>
</div>
    
</body>
