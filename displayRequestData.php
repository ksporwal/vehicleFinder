<?php 
session_start();
if (!isset($_SESSION['username'])) {
     
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
  }
$name=$_SESSION['username'];

if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }

?>

<html>
<head>
     <head> <p>Welcome <strong><?php echo $name;?></strong></p>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href = "style.css">
         
    <style>
        #content{
            
            border-collapse: collapse;
            width: 100%;
        }

        #content td, #content th {
            border: 5sspx solid #ddd;
            padding: 8px;
        }

        #content tr:nth-child(even){background-color: #f2f2f2;}

        #content tr:hover {background-color: #ddd;}

        #content th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #F9600E	;
            color: white;
        }

    </style>
</head>
<body>
<table id="content">
    <tr>
        <th>ID</th>
        <th>Registration No</th>
        <th>Chassis No</th>
        <th>Make of Vehicle</th>
        <th>Model of Vehicle</th>
        <th>Lost Date</th>
        <th>FIR No</th>
        <th>City</th>
        <th>Status</th>
    </tr>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wt_project";


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * from lostvehicle_register where username= '$name' ";
    $result = $conn->query($sql);

    if($result -> num_rows > 0){
        while($row = $result->fetch_assoc()) {

            echo "<tr>
                        <td>". $row["id"]."</td>
                        <td>". $row["reg_no"]."</td>
                        <td>". $row["chassis_no"]."</td>
                        <td>". $row["makevehicle"]."</td>
                        <td>". $row["model"]."</td>
                        <td>". $row["lostdate"]."</td>
                        <td>". $row["fir_no"]."</td>
                        <td>". $row["city"]."</td>
                        <td>". $row["status"]."</td>
                  </tr>";
    }
        echo "</table>";
    }

    else{
        echo "0 result";
    }

    $conn->close();
    ?>
</table>



</body>


</html>