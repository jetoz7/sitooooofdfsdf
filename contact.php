<!--

	Template made by: Rick Klaasboer
	www.rickklaasboer.online

	Version: 1.0.0

	Note: All the images on the demo are not stored locally, 
	but stored on other servers, 
	if they're not showing, one of the links could be broken!

	Need support?
	Leave a comment on the SpigotMC page

	See anything broken?
	Leave a comment on the SpigotMC page

-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>A Free MultiPage Minecraft Template By Rick Klaasboer</title>

 	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta charset="utf-8">

	<!-- Custom CSS for this template -->
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap/bootstrap.min.js">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

</head>
<body>

	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button> 
	
	<!-- Navbar -->
	<div class="topnav" id="myTopnav">
		<div class="max-width">
			<?php include 'php/menu.php'; ?>
		  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
		</div>
	</div>
	<!-- End Navbar -->

	<!-- Header (Banner) -->
	<header id="head-contact" class="parallax">
		<h1>CONTACT US</h1>
		<h3>PLAY.YOURSERVER.COM</h3>
	</header>
	<!-- End Header -->

	<section id="contact">
		<div class="row tab">
			<div class="col-md">
				<div class="callout-box">
					<div class="callout-content">
						<h6>General</h6>
						<p>If you've got any questions about our server, website or anything other that's not urgent, please contact us via <a href="mailto:#">contact@yourdomain.com</a></p>
					</div>
				</div>
			</div>
			<div class="col-md">
				<div class="callout-box">
					<div class="callout-content">
						<h6>Store</h6>
						<p>If you've got any questions regarding our store please contact us via <a href="mailto:#">store@ourdomain.com</a> <span class="highlight"> Please note:</span> If something has gone wrong with your purchase, please contact via <a href="mailto:#">administration@yourdomain.com</a></p>
					</div>
				</div>
			</div>
			<div class="col-md">
				<div class="callout-box">
					<div class="callout-content">
						<h6>Other </h6>
						<p>If you've got any other questions, please contact us via <a href="mailto:#">other@yourdomain.com</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<a style="display:block;" target="_blank" href="<?php echo "$discord_link"; ?>">
	  <div class="discord-banner"><img class="discord-img" width="333" src="img/Discord-Logo+Wordmark-White.svg"></div>
	</a>

	<footer>
		<div class="footer">
			<div class="copyright-notice">
				<!-- !! Replace this with your own domain !! -->
				<p>yourserver.com &copy; | All rights reserved</p>
				<!-- If you want to, you're allowed to delete these credits. But if you want to support my work, please leave it. -->
				<p>Made with <font color="red">❤</font> by <a target="_blank" href="https://www.rickklaasboer.online/">Rick Klaasboer</a>.</font></p>
			</div>
		</div>
	</footer>

	<script>
	function myFunction() {
	    var x = document.getElementById("myTopnav");
	    if (x.className === "topnav") {
	        x.className += " responsive";
	    } else {
	        x.className = "topnav";
	    }
	}
	</script>

	<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
	        document.getElementById("myBtn").style.display = "block";
	    } else {
	        document.getElementById("myBtn").style.display = "none";
	    }
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
	    document.body.scrollTop = 0;
	    document.documentElement.scrollTop = 0;
	}
	</script>

</body>
</html>