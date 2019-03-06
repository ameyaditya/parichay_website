var totalamt = 0;
var i;
$(document).ready(function(){
	$('#basic').change(function(){
		console.log("Changed");
		var basic = document.getElementById('basic').value;
		var standard = document.getElementById('standard').value;
		totalamt = basic*200 + standard*320;
		$('#total h1 span').text('Rs. ' + totalamt);
	});
	$('#subcategory').change(function(){
		var selected = document.getElementById('subcategory');
		var selsubcat = selected.options[selected.selectedIndex].text;
		if(selsubcat == "Choose a sub-category"){
			document.getElementById('dynamic-subcat').innerHTML = "";
		}
		if(selsubcat == 'Student - RNSIT'){
			var code = `<div class="form-row">
						<div class="col-6 md-3">
							<label for="usn">Enter USN</label>
							</div>
						<div class="col-6 md-3">
							<input type="text" class="form-control" id="usn" name="usn" placeholder="Enter USN"  required>
							</div></div>`;
		
			document.getElementById('dynamic-subcat').innerHTML = code;
		}
		if(selsubcat == "Staff - RNSIT"){
			var code = `<div class="form-row">
						<div class="col-6 md-3"><label for="department">Department</label></div>
						<div class="col-6 md-3">
							<select id="department" class="form-control" name="department" required>
						      	<option selected>Civil Engineering</option>
						        <option>Computer Science and Engineering</option>
						        <option>Electronics and Communication Engineering</option>
						        <option>Electrical and Electronics Engineering</option>
						        <option>Instrumentation Engineering</option>
						        <option>Mechanical Engineering</option>
						        <option>Information Science and Engineering</option>
						        <option>Chemistry</option>
						        <option>Mathematics</option>
						        <option>Physics</option>
						        <option>MBA</option>
						        <option>MCA</option>
						        <option>Placement & HR</option>
						    </select>
						</div>
						</div>`;
			document.getElementById('dynamic-subcat').innerHTML = code;
		}
		if(selsubcat == "Corporate"){
			var code = `<div class="form-row">
						<div class="col-6 md-3">
						<label for="company">Enter Company Name</label>
						</div>
						<div class="col-6 md-3">
						<input type="text" class="form-control" id="company" name="company" placeholder="Enter Company Name" required>
						</div></div>`;
			document.getElementById('dynamic-subcat').innerHTML = code;
		}
		if(selsubcat == "Public"){
			document.getElementById('dynamic-subcat').innerHTML = "";
		}
		if(selsubcat == "Senior Citizen"){
			document.getElementById('dynamic-subcat').innerHTML = "";
		}
	});

	$('#standard').change(function(){
		console.log("Changed");
		var basic = document.getElementById('basic').value;
		var standard = document.getElementById('standard').value;
		totalamt = basic*200 + standard*320;
		var text = "";
		for(i = 0; i < standard; i++){
			text += '<div class="form-row form-group"><div class="col-2 md-3"><label>T-Shirt '+(i+1)+' size</label></div>';
			text +='<div class="col-2 md-3 sz-rd-'+i+'"><input type="radio" name="size-'+i+'" value="S" id="S-'+i+'" class="size-radio" checked><label for="S-'+i+'" id="lab-XS-'+i+'" class="size-label">S</label></div>';
			text +='<div class="col-2 md-3 sz-rd-'+i+'"><input type="radio" name="size-'+i+'" value="M" id="M-'+i+'" class="size-radio"><label for="M-'+i+'" id="lab-M-'+i+'" class="size-label">M</label></div>';
			text +='<div class="col-2 md-3 sz-rd-'+i+'"><input type="radio" name="size-'+i+'" value="L" id="L-'+i+'" class="size-radio"><label for="L-'+i+'" id="lab-L-'+i+'" class="size-label">L</label></div>';
			text +='<div class="col-2 md-3 sz-rd='+i+'"><input type="radio" name="size-'+i+'" value="XL" id="XL-'+i+'" class="size-radio"><label for="XL-'+i+'" id="lab-XL-'+i+'" class="size-label">XL</label></div>';
			text +='<div class="col-2 md-3 sz-rd-'+i+'"><input type="radio" name="size-'+i+'" value="XXL" id="XXL-'+i+'" class="size-radio"><label for="XXL-'+i+'" id="lab-XXL-'+i+'" class="size-label">XXL</label></div>';
			text += '</div>';
		}
		//$('#tshirt-sizes').innerHTML = text;
		document.getElementById('tshirt-sizes').innerHTML = text;
		$('#total h1 span').text('Rs. ' + totalamt);
	});
});

function submit_tickets(){
	if(totalamt == 0){
		alert("You thought you could submit with Rs.0 ?");
	}
	else if($('#customername').val().length === 0){
		alert("Enter Name.");
	}
	else if($("#customeremail").val().length === 0){
		alert("Enter Email ID.");
	}
	else if($('#customerphone').val().length === 0){
		alert("Enter phone number.")
	}
	else if($('#subcategory option:selected').val() == 'Choose a sub-category'){
		alert('Choose a sub-category');
	}
	else if($('#subcategory option:selected').val() == 'Student - RNSIT' && ($('#usn').val().length === 0)){
			alert("Please enter your USN");
			return false;
	}
	else if($('#subcategory option:selected').val() == 'Corporate' && ($('#company').val().length === 0)){
			alert("Enter Company Name");
	}
	else if($('#termscheck').is(':checked') === false){
		alert("Please Read and accept the Terms & Conditions.");
	}
	else{
		document.getElementById('tickets-form').setAttribute("action", "payment");
		document.getElementById('tickets-form').submit();
		return true;
	}
	return false;
}

