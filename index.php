<?php include('partials/index-header.php'); ?>

	<div class="container mainpage">
		<h1 class="brand">Mark Anthony Valencia</h1>
		<h4 class="job-desc">Web designer | Front-End Developer | Web Developer</h4>
		<span class="construct">Site is still in progress!</span>
	</div>

<script>
	var acc = document.getElementsByClassName("accordion");
	var i;

	for ( i = 0; i < acc.length; i++) {
		acc[i].onclick = function(){
			this.classList.toggle("active");
			this.nextElementSibling.classList.toggle("show");
		}
	}
</script>
</body>
</html>