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
<!DOCTYPE html>
<html lang="en">
    
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<link rel="stylesheet" href = "style1.css">
<!--		 <script src="lost_validation.js"></script>       -->
		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href = "styleNotification.css">
   
  		<title>Status Update</title>
        
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


        
		<div class="container, content" >
            <p>Welcome <strong><?php echo $name;?></strong></p>
            <a href='homepageAdmin.php' ><button style="float:right">Home</button></a>
		<h2>View Traced Vehicles</h2>
        
            <table id="content">
    <tr>
        
        <th>Registration No</th>
        <th>Chassis No</th>
        <th>Make of Vehicle</th>
        <th>Model of Vehicle</th>
        
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

 $sql = "SELECT * from tracedvehicles ";
    $result = $conn->query($sql);

    if($result -> num_rows > 0){
        while($row = $result->fetch_assoc()) {

            echo "<tr>
                        
                        
                        <td>". $row["reg_no"]."</td>
                        <td>". $row["chassis_no"]."</td>
                        <td>". $row["makevehicle"]."</td>
                        <td>". $row["model"]."</td>
                        
                       
                  </tr>";
    }
        echo "</table>";
    }

    
    else{
        echo "0 result";
    }
 //   echo "<a href='homepageAdmin.php' >Go to Homepage</a>";
    
    $conn->close();
    ?>
         
         </div>
			</div>
		</div>

        
	
	</body>
</html>