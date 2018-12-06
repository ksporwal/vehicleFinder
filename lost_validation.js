function formValidation()
{
	
	var reg_no = document.lost_reg.name;
	var chassisNo = document.lost_reg.chassisNo;
	var makeVehicle = document.lost_reg.makeVehicle;
	var model = document.lost_reg.model;
	var color = document.lost_reg.color;
	var vlocation = document.lost_reg.vlocation;
	var lostDate = document.lost_reg.lostDate;
	var fir = document.lost_reg.fir;
	var policestation = document.lost_reg.policestation;

	var firstName = document.lost_reg.firstName;
	var lastName = document.lost_reg.lastName;
	var addressRes = document.lost_reg.addressRes;
	var addressComm = document.lost_reg.addressComm;
/*	var city = document.lost_reg.city;
	var state = document.lost_reg.state;
*/	var pincode = document.lost_reg.pincode;
/*	var country = document.lost_reg.country;         */
	var mobile = document.lost_reg.contactNo;
	var email = document.lost_reg.email;
	
	var password1 = document.lost_reg.password1;
	
	
	
if(reg_no_validation(reg_no))
{
if(chassisNo_validation(chassisNo))
{
if(makeVehicle_validation(makeVehicle))
{
if(model_validation(model))
{
if(color_validation(color))
{
if(vlocation_validation(vlocation))
{
if(lostDate_validation(lostDate))
{
if(fir_validation(fir))
{
if(policestation_validation(policestation))
{
if(firstName_validation(firstName))
{
if(lastName_validation(lastName))
{
if(addressRes_validation(addressRes))
{
if(addressComm_validation(addressComm))
{
if(pincode_validation(pincode))
{
if(mobile_validation(mobile))
{
if(email_validation(email))
{
if(password_validation(password1))
{
	
	document.getElementById('lost_reg').submit;
}	
	
}	
}		
}	
}	
}	
}	
}	
}	
}	
}	
}
}	
}	
}	
}	
}
return false;

}

function reg_no_validation(reg_no)
{
	var len = reg_no.value.length;
	
	if(len <9 || len >11)
	{   
		alert("Enter correct Registration number");
		reg_no.focus();
		return false;
	}
		return true;

	
}

function chassisNo_validation(chassisNo)
{
//	var len = chassisNo1.length;
	
	if(chassisNo.value.length != 17)
	{
		alert("Enter correct 17digit Chassis number");
		chassisNo.focus();
		return false;
	}
		return true;
	
}

function makeVehicle_validation(makeVehicle)
{
	
	if(makeVehicle.value.length < 3)
	{
		alert("Enter correct make of vehicle");
		makeVehicle.focus();
		return false;
	}
		return true;
}

function model_validation(model)
{
	if(model.value.length < 2)
	{
		alert("Enter model of vehicle");
		model.focus();
		return false;
	}
		return true;
}

function color_validation(color)
{
	if(color.value.length < 2)
	{
		alert("Enter color of vehicle");
		color.focus();
		return false;
	}
		return true;
}

function vlocation_validation(vlocation)
{
	if(vlocation.value.length < 2)
	{
		alert("Enter last location of vehicle");
		vlocation.focus();
		return false;
	}
		return true;
}

function lostDate_validation(lostDate)
{
	if(lostDate.value.length != 10)
	{
		alert("Enter lost Date of vehicle");
		lostDate.focus();
		return false;
	}
		return true;
}

function fir_validation(fir)
{
	if(fir.value.length <2)
	{
		alert("Enter FIR details");
		fir.focus();
		return false;
	}
		return true;
}

function policestation_validation(policestation)
{
	if(policestation.value.length <2)
	{
		alert("Enter Nearest policestation");
		policestation.focus();
		return false;
	}
		return true;
}

function firstName_validation(firstName)
{
	if(firstName.value.length <2)
	{
		alert("Enter First Name");
		firstName.focus();
		return false;
	}
		return true;
}

function lastName_validation(lastName)
{
	if(lastName.value.length <2)
	{
		alert("Enter Last Name");
		lastName.focus();
		return false;
	}
		return true;
}

function addressRes_validation(addressRes)
{
	if(addressRes.value.length <2)
	{
		alert("Enter Residential address");
		addressRes.focus();
		return false;
	}
		return true;
}

function addressComm_validation(addressComm)
{
	if(addressComm.value.length <2)
	{
		alert("Enter Communication address");
		addressComm.focus();
		return false;
	}
		return true;
}

function pincode_validation(pincode)
{
	if(pincode.value.length != 6)
	{
		alert("Enter Pincode");
		pincode.focus();
		return false;
	}
		return true;
}

function mobile_validation(mobile)
{
	var numbers = /^[0-9]+$/;
	
	if(!mobile.value.match(numbers) || !mobile.value.length == 10)
	{
	alert("Enter mobile number in correct format");
	mobile.focus();
	return false;
    }
	return true;	
}

function email_validation(uemail)
{
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	
	if(!uemail.value.match(mailformat))
	{
	alert("You have entered an invalid email address!");
	uemail.focus();
	return false;
	} 
		return true;
}


function password_validation(password1)
{
	
	if(password1.value.length <7)
	{
		alert("Password should contain minimum 8 characters");
		password1.focus();
		return false;
	}
		return true;
}