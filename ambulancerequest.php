<?php
$conn = new mysqli('localhost','root','','ambulance requests');

if(isset($_POST['book'])){
    $pname = $_POST['pname'];
    $age = $_POST['age'];
    $mobile = $_POST['numbers'];
    $pickup = $_POST['pickuppoint'];
    $drop = $_POST['droppoint'];
    $ambulancetype = $_POST['ambulancetype'];
$sql="CREATE TABLE IF NOT EXISTS request (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,patientname varchar(100),age int,mobileno BIGINT,pickuplocation varchar(500),droplocation  varchar(500),ambulancetype varchar(200),reg_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
if (mysqli_query($conn, $sql)) {
  echo "Table StudentAccount1 created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}
$sql1="insert into `request`(patientname,age,mobileno,pickuplocation,droplocation,ambulancetype)
values('$pname','$age','$mobile','$pickup','$drop','$ambulancetype')";
$result = mysqli_query($conn,$sql1);
header('Location:successful.html');
if(!$result)
{
  die(mysqli_error($conn));
}
  
}


?>