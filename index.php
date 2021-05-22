<?php require('php/settings.php'); ?>

<!--

	Template made by: Rick Klaasboer
	www.rickklaasboer.online

	Version: 1.0

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

	<div class="topnav" id="myTopnav">
		<div class="max-width">
			<?php include 'php/menu.php'; ?>
		  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
		</div>
	</div>

	<!-- Header (Banner) -->
	<header id="head" class="parallax">
		<h1><?php echo "$server_ip_name";  ?></h1>
		<h3><?php echo "$home_subtitle";  ?></h3>
	</header>
	<!-- End Header -->

	<section id="home">
		<div class="row homepage">
			<div class="col-md-8">
				<p class="big-col-home">Important Information</p>
				<div class="big-col-home-text">
					<h5>SERVER RULES</h5>
					<p>Of course, we have rules on our server to keep everything calm and friendly. For the full list of rules click <a href="example-link.php">here</a></p><br>
					<h5>CONTACT FORM</h5>
					<p>If you have any problems with our server or website (including the store) please mail us at <a href="example-link.php">contact@yourserver.com</a></p><br>
					<h5>EVEN MORE TITLES</h5>
					<p>If you want to add more text here you sure can! Just be sure to not overdo it! Please click <a href="example-link.php">here</a> for more information</p>
				</div>
			</div>
			<div class="col-md-4">
				<p class="follow-twitter">Follow us on <a class="twitter-link" target="_blank" href="<?php echo "$twitter_link"; ?>">Twitter</a></p>
				<a class="twitter-timeline" data-width="500" data-tweet-limit="3" data-height="720" target="_blank" href="<?php echo "$twitter_link"; ?>">Tweets by <?php echo "$twitter_username"; ?></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
			</div>
		</div>
	</section>

	<a style="display:block;" target="_blank" href="<?php echo "$discord_link"; ?>">
	  <div class="discord-banner"><img class="discord-img" width="333" src="img/Discord-Logo+Wordmark-White.svg"></div>
	</a>

	<footer>
		<div class="footer">
			<div class="copyright-notice">
				<!-- !! Replace this text in settings.php !! -->
				<p><?php echo "$copyright_footer_text";  ?></p>
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