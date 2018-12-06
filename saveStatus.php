<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wt_project";

$conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_POST['id'];
    $status = $_POST['status'];
    
    
    
    $sql = "UPDATE lostvehicle_register SET status='$status' where id='$id' ";
    $result = $conn->query($sql);



if ($conn->query($sql) === TRUE) {
    echo "Status Changed successfully";
    echo "<br>";
    echo "<a href='homepageAdmin.php' ><button>Home</button></a>";
    
    
   
} else
{
    echo "Error". mysqli_error($conn);
}

    $conn->close();
        
?>
 