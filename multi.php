<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname ="mydb";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Myguests (LastName,FirstName,email)
VALUE ('chowrai','john','john@mail.com')";
$sql = "INSERT INTO Myguests (LastName,FirstName,email)
VALUE ('maary','john','maary@mail.com')";
$sql = "INSERT INTO Myguests (LastName,FirstName,email)
VALUE ('julie','john','julie@mail.com')";



if ($conn->query($sql)==TRUE){
	echo "new multi record  created successfully";	
}else{
	echo "Error creating database: " . $conn->error;
}
$conn->close();
?>