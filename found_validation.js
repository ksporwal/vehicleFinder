function formValidation()
{
	
	var chassisNo = document.found_reg.chassisNo;
//	var makeVehicle = document.found_reg.makeVehicle;
//	var model = document.found_reg.model;
	var color = document.found_reg.color;
	var vlocation = document.found_reg.vlocation;
	
	
	
if(chassisNo_validation(chassisNo))
{

if(color_validation(color))
{
if(vlocation_validation(vlocation))
{
	
	document.getElementById('found_reg').submit;
}
}

}	

return false;	

}

function chassisNo_validation(chassisNo)
{
	
	
	
	if(chassisNo.value.length != 17)
	{
		alert("Enter correct 17digit Chassis number");
		chassisNo.focus();
		return false;
	}
		return true;
	
}
/*
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
*/
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
		alert("Enter found location of vehicle");
		vlocation.focus();
		return false;
	}
		return true;
}
	