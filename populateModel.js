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
}