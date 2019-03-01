var deadline = new Date("March 24, 2019 08:00:00").getTime();
var x = setInterval(function() { 
var now = new Date().getTime(); 
var t = deadline - now; 
var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
var seconds = Math.floor((t % (1000 * 60)) / 1000); 
document.getElementById('days').innerHTML = days;
document.getElementById('hours').innerHTML = hours;
document.getElementById('mins').innerHTML = minutes;
document.getElementById('secs').innerHTML = seconds;
    if (t < 0) { 
        clearInterval(x); 
        document.getElementById('days').innerHTML = '0';
		document.getElementById('hours').innerHTML = '0';
		document.getElementById('mins').innerHTML = '0';
		document.getElementById('secs').innerHTML = '0'; 
    } 
}, 1000);

function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
