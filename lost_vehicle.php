<?php

require("configureCity.php");
?>
<?php 
session_start();
if (!isset($_SESSION['username'])) {
     
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
  }
$name=$_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<link rel="stylesheet" href = "style1.css">

	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="populateCountry.js"></script>
<script src=lost_validation.js>     
 <script src="jquery-1.9.0.min.js"></script>
  		<title>Lost Register</title>
        
        
        <style>
            select {
                padding:3px;
                border-radius:5px;
                background: #f8f8f8;
                color:#000;
                border:1px solid #555;
                outline:none;
                display: inline-block;
                width:250px;
                cursor:pointer;
                text-align:left;
                font:inherit;
            }
        </style>
        
	</head>
	<body>
		<div class="container, content" >
                <head> <p>Welcome <strong><?php echo $name;?></strong></p>

		<h2>Missing Vehicle Information</h2>
		
			<p>Enter the information of <b>missing</b> Vehicle </p>
			
				<div class="row main" id="parentDiv">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	   <!--            		<h1 class="title">Company Name</h1>		-->
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form action="lost_vehicle_data.php" method="post" class="form-horizontal"  name='lost_reg' >
						
						<div class="form-group required">
							<label for="name" class="cols-sm-2 control-label">Registration / Vehicle Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name"   placeholder="Enter Registration / Vehicle Numbers" required="required" />
								</div>
							</div>
						</div>
						
												
						<div class="form-group required">
							<label for="chassisNo" class="cols-sm-2 control-label">Chassis Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="chassisNo"   placeholder="Enter Chassis Number" required="required"/>
								</div>
							</div>
						</div>

                        
                        <div class="form-group required">
							<label for="makeVehicle" class="cols-sm-2 control-label">Make of vehicle</label>
							<div class="cols-sm-10">
								<div class="input-group">
                                    <select id="makeVehicle" name="makeVehicle" onchange=" return populate(this.id,'model')">
                                        <option value=""></option>
                                        <option value="Yamaha">Yahama</option>
                                        <option value="Maruti Suzuki">Maruti Suzuki</option>
                                        <option value="Ford">Ford</option>
                                    </select>	
                                </div>
							</div>
						</div> 
                        
                        <div class="form-group required">
							<label for="model" class="cols-sm-2 control-label">Model</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<select id="model" name="model"></select>
                                    <script>
                                    function populate(s1,s2){
	                                    var s1 = document.getElementById(s1);
                                        var s2 = document.getElementById(s2);
                                        s2.innerHTML = "";
                                        if(s1.value == "Yamaha"){
                                            var optionArray = ["|","FZ S FI (V 2.0)|FZ S FI (V 2.0)","Fascino|Fascino","Yamaha YZF R15|Yamaha YZF R15"];
                                        } else if(s1.value == "Maruti Suzuki"){
                                            var optionArray = ["|","Ertiga|Ertiga","Baleno|Baleno","Swift VXI|Swift VXI","Swift Dzire ZDI|Swift Dzire VXI"];
                                        } else if(s1.value == "Ford"){
                                            var optionArray = ["|","mustang|Mustang","Figo|Figo","EcoSport|EcoSport"];
                                        }

                                        for(var option in optionArray){
                                            var pair = optionArray[option].split("|");
                                            var newOption = document.createElement("option");
                                            newOption.value = pair[0];
                                            newOption.innerHTML = pair[1];
                                            s2.options.add(newOption);
                                        }
}                                   </script>
								</div>
							</div>
						</div>
                        
                        
  
                        
       <!--                 
						<div class="form-group required">
							<label for="makeVehicle" class="cols-sm-2 control-label">Make of vehicle</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="makeVehicle"   placeholder="Enter Make of vehicle"/>
								</div>
							</div>
						</div>

						<div class="form-group required">
							<label for="model" class="cols-sm-2 control-label">Model</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="model"  placeholder="Enter Model No."/>
								</div>
							</div>
						</div>
-->						
						<div class="form-group required">
							<label for="color" class="cols-sm-2 control-label">Color</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="color"  placeholder="Enter Color of Vehicle"/>
								</div>
							</div>
						</div>
						
						<div class="form-group required">
							<label for="vlocation" class="cols-sm-2 control-label">Vehicle Lost Location</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="vlocation"   placeholder="Enter Vehicle Lost Location"/>
								</div>
							</div>
						</div>
						
						<div class="form-group required">
							<label for="lostDate" class="cols-sm-2 control-label">Lost Date</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="lostDate"   placeholder="Enter Lost Date"/>
								</div>
							</div>
						</div>
						
						<div class="form-group required">
							<label for="fir" class="cols-sm-2 control-label">FIR Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="fir"  placeholder="Enter FIR Number"/>
								</div>
							</div>
						</div>
						
						<div class="form-group required">
							<label for="policestation" class="cols-sm-2 control-label">Police Station</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="policestation"   placeholder="Police Station"/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="additionalInfo" class="cols-sm-2 control-label">Additional Information</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="additionalInfo"  placeholder="Additional Information"/>
								</div>
							</div>
						</div>
	<br>
						<label>Other Information</label>
		<br>	<br>				
				
					
						
						<div class="form-group required">
							<label for="firstName" class="cols-sm-2 control-label">First Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="firstName"   placeholder="First Name"/>
								</div>
							</div>
						</div>
						
						<div class="form-group required">
							<label for="lastName" class="cols-sm-2 control-label">Last Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="lastName"  placeholder="Last Name"/>
								</div>
							</div>
						</div>
						
						<div class="form-group required">
							<label for="addressRes" class="cols-sm-2 control-label">Residential Address</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="addressRes"  placeholder="Residential Address"/>
								</div>
							</div>
						</div>
						
						<div class="form-group required">
							<label for="addressComm" class="cols-sm-2 control-label">Communication Address</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="addressComm" placeholder="Communication Address"/>
								</div>
							</div>
						</div>
						
								
						
	<!--					
						
						<div class="form-group required">
							<label for="city" class="cols-sm-2 control-label">City</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="city"  placeholder="City"/>
								</div>
							</div>
						</div>
						
						<div class="form-group required">
							<label for="state" class="cols-sm-2 control-label">State</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="state"   placeholder="State"/>
								</div>
							</div>
						</div>
	-->					
						<div class="form-group required">
							<label for="pincode" class="cols-sm-2 control-label">Pincode</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="pincode"  placeholder="Pincode"/>
								</div>
							</div>
						</div>
						
                        <div class="form-group required">
						 <?php
                                $sql = "SELECT * FROM tbl_country ORDER BY country_name";
                                try {
                                    $stmt = $DB->prepare($sql);
                                    $stmt->execute();
                                    $results = $stmt->fetchAll();
                                } catch (Exception $ex) {
                                    echo($ex->getMessage());
                                }
                                ?>
                          <label for="country" class="cols-sm-2 control-label">Country</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <select name="country" onChange="showState(this);" required>
                                        <option value="">Please Select</option>
                                        <?php foreach ($results as $rs) { ?>
                                            <option value="<?php echo $rs["id"]; ?>"><?php echo $rs["country_name"]; ?></option>
                                        <?php } ?>
                                    </select>
                              
                          
                                    <div id="output1"></div> <div id="output2"></div> 
                                  </div>
                                </div>
                        </div>
                        
						
			<!--			<div class="form-group required">
							<label for="country" class="cols-sm-2 control-label">Country</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="country"   placeholder="Country"/>
								</div>
							</div>
						</div>
				-->		
						<div class="form-group required">
							<label for="contactNo" class="cols-sm-2 control-label">Contact Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="contactNo"   placeholder="Contact Number"/>
								</div>
							</div>
						</div>
						

						
						<div class="form-group required">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email"   placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group required">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username"   value=<?php echo $name ?> readonly/>
								</div>
							</div>
						</div>

						<div class="form-group required">
							<label for ="password1" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password1" placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						

						<div class="form-group ">
							<input type="submit"  class="btn btn-primary btn-lg btn-block login-button" onclick = "return formValidation()">
						</div>
						
					</form>
					
				</div>
			</div>
		</div>

        <script>
                    
        </script>
	
	</body>
</html>