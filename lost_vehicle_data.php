<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wt_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$reg_no = $_POST['name'];
$chassisNo = $_POST['chassisNo'];
$makeVehicle = $_POST['makeVehicle'];
$model = $_POST['model'];
$color = $_POST['color'];
$vlocation = $_POST['vlocation'];
$lostDate = $_POST['lostDate'];
$fir = $_POST['fir'];
$policestation = $_POST['policestation'];
$additionalInfo = $_POST['additionalInfo'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$addressRes = $_POST['addressRes'];
$addressComm = $_POST['addressComm'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$country = $_POST['country']; 
$contactNo = $_POST['contactNo'];
$email = $_POST['email'];
$username = $_POST['username'];
$password1 = $_POST['password1'];
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO lostvehicle_register(reg_no,chassis_no,makevehicle,model,color, vehiclelocation, lostdate, fir_no,police_station, additional_info, first_name, last_name, residential_address, communication_address, city, state, pincode, country, contact_no, email, username, password, status)
	VALUES ('$reg_no','$chassisNo','$makeVehicle','$model','$color', '$vlocation', '$lostDate', '$fir','$policestation', '$additionalInfo', '$firstName', '$lastName', '$addressRes', '$addressComm', '$city ', '$state', '$pincode', '$country', '$contactNo','$email','$username','$password1','pending')";

if ($conn->query($sql) === TRUE) {
    echo "lost vehicle registered successfully";
    echo "<br>";
    echo "<a href='homepage.php' >Click here to go to your profile</a>";
    
} else
{
    echo "Error". mysqli_error($conn);
}


$conn->close();
?>