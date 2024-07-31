<?php
require_once('connection.php');
$sql = "SELECT * from contacts";
$result = mysqli_query($conn, $sql);

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