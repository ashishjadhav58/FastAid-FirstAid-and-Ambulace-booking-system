<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactinfo";

$name = $_POST['name'];
$mobile= $_POST['mobile'];
$message = $_POST['message'];
$email = $_POST['email'];
$country = $_POST['country'];
$city= $_POST['city'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS info (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
mobile VARCHAR(30) NOT NULL,
message VARCHAR(50),
email VARCHAR(30) NOT NULL,
country VARCHAR(50),
city VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
//query
if (mysqli_query($conn, $sql)) {
  echo "Table StudentAccount1 created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

$sql1 = "INSERT INTO info(name,mobile,message,email,country,city )
VALUES ('$name', '$mobile', '$message','$email','$country','$city')";

if (mysqli_query($conn, $sql1)) {
  header('Location: index.html');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>