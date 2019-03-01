var totalamt = 0;
$(document).ready(function(){
	$('#basic').change(function(){
		console.log("Changed");
		var basic = document.getElementById('basic').value;
		var standard = document.getElementById('standard').value;
		totalamt = basic*250 + standard*350;
		$('#total h1 span').text('Rs. ' + totalamt);
	});
	$('#standard').change(function(){
		console.log("Changed");
		var basic = document.getElementById('basic').value;
		var standard = document.getElementById('standard').value;
		totalamt = basic*250 + standard*350;
		$('#total h1 span').text('Rs. ' + totalamt);
	});
});

function submit_tickets(){
	if(totalamt == 0){
		alert("Please add one event Ticket to the cart");
		return false;
	}
}

