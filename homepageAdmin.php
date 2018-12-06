
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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
  
</head>
<body>

<div class="container, content">
 <!--
<ul id=menu>
<li><a href="#Feedback">Feedback</a>

</ul>		-->

  <p>Welcome <strong><?php echo $name;?></strong></p>
    

    
	 <a href="index.php?logout='1'"> <h2><button id="loginBtn" class="btn btn-default btn-md", type="button", style="float:right" onclick ="myFunction()">Logout</button></h2></a>
    
    
    
    
	  <h1 font size="10"style="color:#0C8ECA" >Finder</h1>

	 <!-- <button class="button"type="button">Click Me!</button>	-->
	<ul>
	  <li><a class="active" href="#home">Home</a></li>

  <li><a href="lost_vehicle.php">Missing Vehicle</a></li>
   <li><a href="found_vehicle.html">Found Vehicle</a></li>
    <li><a href="contactUs.html">Contact Us</a></li>
	<li><a href="displayRequestDataAdmin.php">Requests received</a></li>
	<li><a href="viewTracedVehicles.php">View Traced Vehicles</a></li>
	
 <li style="float:right"><a href="#about">About</a></li>	
<!-- <li style="float:right"><button class="button", type="button", style="float:right">Sign In</button></li>	-->
</ul>
 
  <div class="container" style="margin-top:30px">
  <div class="row">
    
 

		 <div class="col-sm-3" style="border:ridge">
      <h2>Feedback</h2>
      <marquee direction = "up" scrollamount="2">A very good work - Sanket Gaikwad<span></span><br><br><br>
	  I found my vehicle using the website!! Thanks for the efforts - Mr.Aditya  <span></span><br><br><br>
	<b>  This site is very helpful - Police Commisioner Pune Region</marquee>
	  
	  <br>
        </div>
		
  </div>
</div>
<br><br>
<h2>About the Portal </h2>
<br>

<p>This portal is meant for tracing and providing a platform to find the missing and stolen vehicles. The site will gather information of found vehicles, so that the vehicle owners, Police department and the insurance companies settling the claims of missing vehicles can browse the information and the vehicles can be returned to their owners.</p>



<button type="button" class="btn btn-primary " id="menu" onclick ="div_show()" >Feedback</button>







</div>

	<script>
	function myFunction(){
		//document.getElementById("loginBtn").innerHTML = "Hello __Name";
		
		}
	</script>
	
	<script>
		function openPopup() {

            window.open("lost_vehicle.html", "_blank", "WIDTH=1080,HEIGHT=790,scrollbars=no, menubar=no,resizable=yes,directories=no,location=no");  
               
                }
	</script>

</body>
</html>
