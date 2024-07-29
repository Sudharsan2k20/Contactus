<?php

$conn = new mysqli("localhost", "root", "", "login")
if($conn->connect_error){
    die("Connection Error");
}
else{
    echo "Connected";
}

?>