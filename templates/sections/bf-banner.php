<div class="wp-military-bf-banner">

	<div class="banner-heading">
		<span class="heading-main">Black Friday</span>
		<span class="heading-desc">Sale Going on <b>WP Radio</b></span>
	</div>

	<div class="counter-timer">
		<span class="limited-time">Limited Time Only</span>
		<div id="timerUpFront"></div>
	</div>

	<div class="discount-text">
		<span>All Plans</span>
		<span class="discount">70 <sup>%</sup></span>
		<span>Discount</span>
	</div>

	<a href="javascript:;" class="banner-action purchase btn">Buy Now</a>

</div>

<script>
	function timer() {
		var currentTime = new Date()
		var hours = currentTime.getHours()
		var minutes = currentTime.getMinutes()
		var seconds = currentTime.getSeconds()

		if (minutes < 10) {
			minutes = "0" + minutes
		}

		if (hours < 6) {
			var hoursLeft = 5 - hours;
			var minsLeft = 60 - minutes;

			if (minsLeft == 60) {
				minsLeft = 0;
				hoursLeft++;
			}
			var secsLeft = 60 - seconds;

			if (secsLeft == 60) {
				secsLeft = 0;
				minsLeft++;
			}
		} else if (hours < 18) {
			var hoursLeft = 17 - hours;
			var minsLeft = 60 - minutes;

			if (minsLeft == 60) {
				minsLeft = 0;
				hoursLeft++;
			}

			var secsLeft = 60 - seconds;

			if (secsLeft == 60) {
				secsLeft = 0;
				minsLeft++;
			}
		} else if (hours < 24) {
			var hoursLeft = 29 - hours;
			var minsLeft = 60 - minutes;

			if (minsLeft == 60) {
				minsLeft = 0;
				hoursLeft++;
			}

			var secsLeft = 60 - seconds;

			if (secsLeft == 60) {
				secsLeft = 0;
				minsLeft++;
			}
		} else if (hours == 6) {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.open("reset.html", true);
			xmlhttp.send();
		} else if (hours == 18) {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.open("reset.html", true);
			xmlhttp.send();
		} else {
			document.write("Error, please contact admin");
		}

		//document.getElementById('timerUpFront').innerHTML = hoursLeft + " hours " + minsLeft + " minutes " + secsLeft + " seconds";
		document.getElementById('timerUpFront').innerHTML = `
<div class="counter-part"><span>${hoursLeft} : </span> <span class="counter-text">Hours</span></div>
<div class="counter-part">${minsLeft} : </span> <span class="counter-text">Minutes</span></div>
<div class="counter-part">${secsLeft}</span> <span class="counter-text">Seconds</span> </div>`;

	}

	var countdownTimer = setInterval('timer()', 1000);
</script>
