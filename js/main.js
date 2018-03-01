var d = new Date();
var n = d.getHours();
if ( n == 23 || n == 0) {
	message = "<br>Good Night~";
} else if ( n >= 1 && n <= 4 ) {
	message = "A-are you still up ?";
} else if ( n >= 5 && n <= 11 ) {
	message = "Good Morning :)";
} else if ( n >= 12 && n <= 17 ) {
	message = "Who are you?";
} else if ( n >= 18 && n <= 22 ) {
	message = "Good evening~";
}
document.getElementById("message").innerHTML = message;
