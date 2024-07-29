<?php
require_once('connection.php');
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = $_POST['lname'];
$email = $_POST['email'];
$number = $_POST['phone'];

$insert_query = mysqli_query("Insert into login(fname, lname, email, number") values($fname, $lname, $email, $number);

if(mysqli_query($conn, $insert_query)){
    echo "Inserted successfully";
    
}



