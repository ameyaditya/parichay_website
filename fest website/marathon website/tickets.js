var totalamt = 0;
$(document).ready(function(){
	$('#10kmarathon').change(function(){
		console.log("Changed");
		var val10k = document.getElementById('10kmarathon').value;
		var val5k = document.getElementById('5kmarathon').value;
		var valtshirt = document.getElementById('tshirts').value;
		totalamt = val10k*1000 + val5k*500 + valtshirt*200;
		$('#total h1 span').text('Rs. ' + totalamt);
	});
	$('#5kmarathon').change(function(){
		console.log("Changed");
		var val10k = document.getElementById('10kmarathon').value;
		var val5k = document.getElementById('5kmarathon').value;
		var valtshirt = document.getElementById('tshirts').value;
		totalamt = val10k*1000 + val5k*500 + valtshirt*200;
		$('#total h1 span').text('Rs. ' + totalamt);
	});
	$('#tshirts').change(function(){
		console.log("Changed");
		var val10k = document.getElementById('10kmarathon').value;
		var val5k = document.getElementById('5kmarathon').value;
		var valtshirt = document.getElementById('tshirts').value;
		totalamt = val10k*1000 + val5k*500 + valtshirt*200;
		$('#total h1 span').text('Rs. ' + totalamt);
	});
});