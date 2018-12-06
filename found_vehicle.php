<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wt_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$reg_no = $_POST['name'];
$engine_no = $_POST['engineno'];
$chassisNo = $_POST['chassisNo'];
$makeVehicle = $_POST['makeVehicle'];
$model = $_POST['model'];
$color = $_POST['color'];
$vlocation = $_POST['vlocation'];
$contactNo = $_POST['contactno'];


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO foundvehicle_register(reg_no,engine_no,chassis_no,makevehicle,model,color, vehicle_location,contact_no)
	VALUES ('$reg_no','$engine_no','$chassisNo','$makeVehicle','$model','$color', '$vlocation','$contactNo')";

             
   



if ($conn->query($sql) === TRUE) {
    echo "found vehicle registered successfully";
} else
{
    echo "Error". mysqli_error($conn);
}

 $sql1 = "SELECT z.reg_no,z.chassis_no,z.makevehicle,z.model, x.reg_no,x.chassis_no,x.makevehicle,x.model FROM lostvehicle_register z, foundvehicle_register x WHERE z.reg_no = x.reg_no and z.chassis_no = x.chassis_no and z.makevehicle = x.makevehicle and z.model=x.model ";
   
       
    $result = $conn->query($sql1);



if($result -> num_rows > 0){
        while($row = $result->fetch_assoc()) {
             
           
            
            
            $regno = $row["reg_no"];
           $chassis = $row["chassis_no"];
           $makevehicle = $row["makevehicle"];
           $model = $row["model"];
            
            
    }
       
    }

$sql2 = "INSERT INTO tracedvehicles (reg_no, chassis_no, makevehicle, model) VALUES ('$regno','$chassis','$makevehicle', '$model')";
                $result = $conn->query($sql2) ;
                
 $sql3 = "UPDATE lostvehicle_register SET status = 'Your Vehicle Successfully found!!' WHERE reg_no='$regno'";
                $result = $conn->query($sql3) ;
             

echo "<a href='homepage.php'><br><button>Home</button></a>";

$conn->close();
?>