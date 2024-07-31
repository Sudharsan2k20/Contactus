<?php
require_once('connection.php');
$sql = "SELECT * from contacts";
$result = mysqli_query($conn, $sql);
?>

<<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <div class="container">
    <h1>Contact List</h1>
    <?php
        if(mysqli_num_rows($result)>0){
            echo "<table border='1'>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Number</th>
            </tr>";
            while($row=mysqli_fetch_assoc($result)){
                echo "<tr>
                    <td>".$row['first_name']."</td>
                    <td>".$row['last_name']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['phone']."</td>
        
                </tr>";
            }
            echo"</table>";
        }
        else{
            echo "0 results";
        }
    ?>  
    </div>
</body>
</html>




