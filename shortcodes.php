<?php require('php/settings.php'); ?>

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
	<header id="head-shortcodes" class="parallax">
		<h1>SHORTCODES</h1>
		<h3>FOR THE TEMPLATE</h3>
	</header>
	<!-- End Header -->

	<section style="text-align: center; padding: 66px 0 66px 0;">
		<h1>H1 Heading - Can also be <span class="highlight">highlighted</span>!</h1>
		<h2>H2 Heading - Can also be <span class="highlight">highlighted</span>!</h2>
		<h3>H3 Heading - Can also be <span class="highlight">highlighted</span>!</h3>
		<h4>H4 Heading - Can also be <span class="highlight">highlighted</span>!</h4>
		<h5>H5 Heading - Can also be <span class="highlight">highlighted</span>!</h5>
		<h6>H6 Heading - Can also be <span class="highlight">highlighted</span>!</h6>
	</section>

	<section style="text-align: left; padding: 66px 0 66px 0; max-width: 60%; margin: 0 auto;">
		<h6>Default Paragraph title</h6>
		<h6 class="subtitle">Default subtitle</h6>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</section>

	<section style="text-align: left; padding: 66px 0 66px 0; max-width: 60%; margin: auto;">
		<div class="callout-box">
			<div class="callout-content">
				<h6>THIS IS A CALLOUT BOX</h6>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
			</div>
		</div>
	</section>

	<section style="text-align: center; padding: 66px 0 66px 0; margin: 0 auto;">
		<h6>THIS IS A <span class="highlight">DISCORD</span> BANNER</h6>
		<a style="display:block;" target="_blank" href="<?php echo "$discord_link"; ?>">
		  <div class="discord-banner"><img class="discord-img" width="333" src="img/Discord-Logo+Wordmark-White.svg"></div>
		</a>
	</section>

	<section style="text-align: center; padding: 66px 0 66px 0; max-width: 60%; margin: 0 auto;">
		<h6>BUTTONS</h6>
		<a class="button" href="#">Example Button</a>
		<a class="button blue" href="#">Example Button</a>
		<a class="button green" href="#">Example Button</a>
		<a class="button orange" href="#">Example Button</a>
		<a class="button purple" href="#">Example Button</a>
	</section>

	<section style="text-align: left; padding: 66px 0 66px 0; max-width: 60%; margin: 0 auto;">
		<h6>TABLES</h6>
			<table id="table">
			  <tr class="description">
			    <th>TITLE</th>
			    <th>DESCRIPTION</th>
			    <th>PRICE</th>
			  </tr>
			  <tr>
			    <td>Lorem ipsum</td>
			    <td>Dolor sit amet, consectetur adipisicing elit.</td>
			    <td>€15</td>
			  </tr>
			  <tr>
			    <td>Lorem ipsum</td>
			    <td>Dolor sit amet, consectetur adipisicing elit.</td>
			    <td>€30</td>
			  </tr>
			  <tr>
			    <td>Lorem ipsum</td>
			    <td>Dolor sit amet, consectetur adipisicing elit.</td>
			    <td>€45</td>
			  </tr>
			  <tr>
			    <td>Lorem ipsum</td>
			    <td>Dolor sit amet, consectetur adipisicing elit.</td>
			    <td>€60</td>
			  </tr>
			</table>
	</section>

	<section style="text-align: center; padding: 66px 0 66px 0; margin: 0 auto;">
		<h6>THIS IS A <span class="highlight">CALL TO ACTION</span> BANNER</h6>
		  <div class="action-banner">
		  	<h4>COME ON NOW!</h4>
		  	<p>THIS BANNER IS A GOOD WAY TO GET ATTENTION</p>
		  </div>
	</section>
    
    <!-- Server Status Shortcode + Script -->
    
    <script src="https://mcapi.us/scripts/minecraft.js"></script>
        <script>
          MinecraftAPI.getServerStatus('#', { //Add your IP here!
            port: 25565 // optional, only if you need a custom port
          }, function (err, status) {
            if (err) {
              return document.querySelector('.server-status').innerHTML = '<font color="#c0392b">An error occurred while loading server status, if you see this the server IP has not been set or not set correctly!</font><br><br><img width="333" src="https://media.giphy.com/media/GDnomdqpSHlIs/giphy.gif">';
            }

            // you can change these to your own message!
            document.querySelector('.server-online').innerHTML = status.online ? '<font color="#2ecc71">Online <i class="far fa-smile"></i></font><br><br><img width="333" src="https://media.giphy.com/media/BlVnrxJgTGsUw/giphy.gif">' : '<font color="#e74c3c"> Offline <i class="far fa-frown"></i></font><br><br><img width="333" src="https://media.giphy.com/media/9Y5BbDSkSTiY8/giphy.gif">';
          });
        </script>
    
    <section style="text-align: center; padding: 66px 0 66px 0; margin: 0 auto;">
        <h6>A SERVER STATUS</h6>
        <div id="status">
            <div class="server-status">
              <h2>The server is currently <span class="server-online"></span></h2>
            </div>
        </div>
    </section>
    
    <!-- End Server Status Shortcode + Script -->

	<footer>
		<div class="footer">
			<div class="copyright-notice">
				<!-- !! Replace this text in settings.php !! -->
				<p><?php echo "$copyright_footer_text";  ?></p>
				<!-- If you want to, you're allowed to delete these credits. But if you want to support my work, please leave it. -->
				<p>Made with <font color="red">❤</font> by <a target="_blank" href="https://www.rickklaasboer.online/">Rick Klaasboer</a>.</p>
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