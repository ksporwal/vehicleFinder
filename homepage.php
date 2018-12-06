
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
<html>
<head>

 <link rel="stylesheet" href = "style1.css">
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href = styleNotification.css>
    
  
</head>
<body onload="myFunc()">

<div class="container, content">
 <!--
<ul id=menu>
<li><a href="#Feedback">Feedback</a>

</ul>		-->

  <p>Welcome <strong><?php echo $name;?></strong></p>
    

    
	 <a href="index.php?logout='1'"> <h2><button id="loginBtn" class="btn btn-default btn-md", type="button", style="float:right" onclick ="myFunction()">Logout</button></h2></a>
    
    
    
    
	  <h1 font size="10"style="color:#0C8ECA" >Finder</h1>
    
     <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wt_project";


    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    
    $sql = "SELECT * from lostvehicle_register where username='$name' ";
    $result = $conn->query($sql);

    if($result -> num_rows > 0){
        while($row = $result->fetch_assoc()) {

            $status = $row["status"];
            echo "<ol>
                        
                        
                        
                  </ol>            
            <div class='alert info'>
  <span class='closebtn'>&times;</span>  
  <strong class='blinking'>New Notification!! </strong>Req.ID&nbsp". $row["id"]."&nbsp". $row["status"]."
</div>";
    }
        
    }

    
    else{
        echo "No New Notification";
    }

    
    
    $conn->close();
    ?>

	 <!-- <button class="button"type="button">Click Me!</button>	-->
	<ul>
	  <li><a class="active" href="homepage.php">Home</a></li>

  <li><a href="lost_vehicle.php">Missing Vehicle</a></li>
   <li><a href="found_vehicle.html">Found Vehicle</a></li>
    <li><a href="contactUs.html">Contact Us</a></li>
	<li><a href="displayRequestData.php">Your Requests</a></li>
	<li><a href="map.html" id="map" data-toggle="tooltip" title="Locate Your vehicle on Map">
         <i class="material-icons" style="font-size:22px">my_location</i>
        </a></li>
        <script>
            function myFunc()
            {
                var status = "<?php echo $status; ?>";
           
                if(status != "Your Vehicle Successfully found!!")
                    {
                   // alert("success");
                    document.getElementById("map").style.visibility = "hidden";    
                    }
            }
        </script>
	
 <li style="float:right"><a href="#about">About</a></li>	
<!-- <li style="float:right"><button class="button", type="button", style="float:right">Sign In</button></li>	-->
</ul>
 <h1>About the Portal </h1>
<br>

    <p><b>This portal is meant for tracing and providing a platform to find the missing and stolen vehicles. The site will gather information of found vehicles, so that the vehicle owners, Police department and the insurance companies settling the claims of missing vehicles can browse the information and the vehicles can be returned to their owners.</b></p>


  <div class="container" style="margin-top:30px">
      
  <div class="row">
    
  <!--
<form action="login.php" method="post" name='login'>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
	
  </div>
  <br>
  <a href="#forgetPassword" style="float:right">Forgot Password?</a>
  <br><br>
  <button type="button" class="btn btn-primary" style="float:right">Login</button>
  <br>  <br>


</form>
    -->


		 <div class="col-sm-4" style="border:ridge">
      <h2>Feedback</h2>
      <marquee direction = "up" scrollamount="2">A very good work - Sanket Gaikwad<span></span><br><br><br>
	  I found my vehicle using the website!! Thanks for the efforts - Mr.Aditya  <span></span><br><br><br>
	<b>  This site is very helpful - Police Commisioner Pune Region</marquee>
	  
	  <br>
        </div>
            
        <div class="col-sm-4" style="border:ridge">
      <h2>Traced Successfully</h2>
      <marquee direction = "up" scrollamount="2">MH12NK1941<span></span><br><br><br>
	  HP09UY5676  <span></span><br><br><br>
	 MP89AP1000</marquee>
	  <br><br>
	  <br>
        </div>
             
            
		
  </div>
</div>
<br><br>


<button type="button" class="btn btn-primary " id="menu" onclick ="div_show()" >Feedback</button>







</div>

	
	
	<script>
		function openPopup() {

            window.open("lost_vehicle.html", "_blank", "WIDTH=1080,HEIGHT=790,scrollbars=no, menubar=no,resizable=yes,directories=no,location=no");  
               
                }
	</script>
    
    
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}
</script>

</body>
</html>
