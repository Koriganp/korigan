function cast(i) {
	var ret = Number(i).toString(16);
	while (ret.length < 2) ret="0"+ret;
	return ret;
}
function exec(r, g, b) {
	document.body.style.backgroundColor = "#" + cast(r) + cast(g) + cast(b);
}
function lim(i) {
	return Math.min(Math.max(i, 0), 255);
}
var r = 0xFF;	//initial red
var g = 0x00;	//initial green
var b = 0x00;	//initial blue
var s = 1;		//initial state
var t = 0;		//initial substate
var u = 0x10;	//stepsize
var on = false;
function party() {
	setTimeout(party, 10);
	switch(s) {
		// Looks smoother
		case 1: r -= u; g += u; break;
		case 2: g -= u; b += u; break;
		case 3: b -= u; r += u; break;
		default: s = 1; t = 0;
	}
	t += u;
	r = lim(r);
	g = lim(g);
	b = lim(b);
	exec(r, g, b);
	if(t >= 255) {
		t = 0;
		s++;
	}
}
function change() {
	on ? location.reload(false) : on = true;
}