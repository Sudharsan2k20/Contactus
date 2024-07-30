<?php
require_once('connection.php');

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$number =$_POST['phone'];

$stmt = $conn->prepare("INSERT INTO contacts(first_name, last_name, email, phone) values(?,?,?,?)");
$stmt->bind_param("ssss", $fname, $lname, $email, $number);
if($stmt->execute()){
    echo "Inserted successfully";
}
else{
    echo "Error inserting values: " . $stmt->error;
}




