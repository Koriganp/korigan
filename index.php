<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>Korigan.me</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="description" content="Party">
		<meta name="keywords" content="party">
		<meta name="author" content="Korigan Payne">

		<!-- Included css and js in this file for convenience -->

		<style>
			body {
				background-color: #fff7f8;
				color: #484848;
				font-size: 100%;
				font-family: メイリオ, "Hiragino Kaku Gothic ProN", "ヒラギノ角ゴ ProN W3", sans-serif;
				text-align: center;
			}

			a:visited,
			a {
				color: #484848;
				text-decoration: none;
			}

			path:hover {
				fill: #eeeeee;
				transition: fill 1s;
			}

			.seizure-warning {
				color: #aa5555;
				font-size: 0.666em;
			}

			#message {
				font-size: 4em;

			}

			#party {
				display: none;
			}
		</style>
	</head>

	<body>

		<p id="message"><script>
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
			</script></p>
		<noscript>
			<p class="no"><strong>Enable JavaScript</strong>, it's not gonna hurt you</p>
		</noscript>

		<label>
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve" class="style0">
  <style>.style0{image-rendering:	optimizeQuality;text-rendering:	geometricPrecision;shape-rendering:	geometricPrecision;}</style>
					<g><path d="M193.254 108.805c8.986-28.332 3.26-50.848-9.545-66.221c-2.379-5.635-2.802-10.562-1.756-14.947 c1.828-2.376 4.832-3.667 8.395-4.447c-2.25-0.429-4.457-0.62-6.582-0.353c2.547-4.863 6.984-9.037 12.438-12.839 c-11.791 2.475-22.043 7.299-27.397 19.649c-20.856-13.069-48.801-14.271-68.949-0.992C94.392 17.039 84.378 12.402 72.91 9.999 c5.446 3.8 9.877 7.97 12.424 12.823c-2.079-0.242-4.243-0.047-6.444 0.369c3.443 0.752 6.364 1.984 8.206 4.209 c1.162 4.608 0.698 9.807-1.965 15.811c-9.959 14.668-14.391 36.376-8.596 65.951c-22.123 92.29 20.481 114.446 61.513 132.6 c-1.054 4.916-3.736 7.779-7.996 8.643c-13.521-5.423-28.479 6.781-21.061 21.801c2.694-12.213 7.925-15.994 14.745-14.496 c-2.595 5.15-2.4 10.66 0.123 16.477c2.687-7.592 6.848-12.645 14.492-11.644c-2.49 5.776-1.72 12.39 0.246 19.323 c10.615-24.438 23.82-22.383 38.892-1.238c3.545-10.217 2.699-18.566-9.287-22.172l0.035-2.373 c10.469 5.975 19.355 13.055 25 22.891c12.761 14.112 21.596 15.618 24.771-0.991v-0.001 C238.606 207.578 232.275 149.561 193.254 108.805z M136.286 119.072c-42.255-3.484-57.022-22.135-50.536-54.625 c10.454-33.17 34.827-29.883 49.793-3.718c14.405-28.814 35.89-24.457 48.06-3.964C197.419 87.835 178.328 117.446 136.286 119.072 z M145.547 245.066l13.123 6.013C152.079 258.404 143.492 258.266 145.547 245.066z M207.507 265.832 c-6.438-50.953-66.64-86.289-54.499-135.755l5.268-0.495c-12.141 49.466 48.06 84.802 54.499 135.755L207.507 265.832z"/><path d="M130.165 94.806c-0.281 8.138 2.379 14.322 6.071 19.82c3.5-4.974 5.621-11.458 5.822-20.068 C140.93 85.995 131.462 85.196 130.165 94.806z"/><path d="M146.476 81.498c9.585 12.926 19.29 11.029 29.095-2.995C164.459 67.005 154.646 66.976 146.476 81.498z"/><path d="M95.113 76.729c5.486 15.127 15.328 16.086 28.736 5.449C116.491 67.986 107.095 65.147 95.113 76.729z"/></g></svg>
				<input type="checkbox" name="party" id="party" onclick="party();" onchange="change();">
			</label>

		<div class="seizure-warning">
			SEIZURE WARNING: <em>Don't click on the owl if you're prone to seizures.</em>
		</div>

		<script>
			function cast(i) {
				var ret = Number(i).toString(16);
				while (ret.length < 2) ret="0"+ret;
				return ret;
			}
			function exec(r, g, b) {
				var c = "#" + cast(r) + cast(g) + cast(b);
				document.body.style.backgroundColor = c;
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
		</script>
	</body>
</html>