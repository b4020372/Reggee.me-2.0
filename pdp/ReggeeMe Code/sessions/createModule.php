<?php
// include sessions.inc.php here
include('includes/sessions.inc.php');
?>
<!doctype html>
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Keyboard 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120915

-->
<html>
<head>
<meta name="keywords" content="">
<meta name="description" content="">
<meta charset="utf-8">
<title>Login Demo with Sessions</title>
<link href='https://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Regee.me</a></h1>
			</div>
            
            <?php 
			/////////////////////////// conditional includes here
if(isset($_SESSION['login'])){
	include('includes/session-logout.inc.php');
}else{
	include('includes/session-login.inc.php');
}
			
			?>
            
			<nav>
				<ul>
					<li><a href="index.php">Homepage</a></li>
					<li class="current_page_item"><a href="createModule.php">Create Module</a></li>
					<li><a href="createEvent.php">Create Event</a></li>
					<li><a href="viewData.php">View Data</a></li>
					<li><a href="viewModule.php">View Modules</a></li>
					<li><a href="viewEvents.php">View Events</a></li>


					

					
				</ul>
			</nav>
		</div>
		<div id="banner">
			<div class="content"><img src="images/img02.jpg" width="1000" height="300" alt=""></div>
		</div>
	</div>
	<!-- end #header -->
	
	<div id="page">
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Welcome to Create module</a></h2>
				
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p>This is <strong>Keyboard </strong>, a free, fully standards-compliant CSS template designed by <a href="http://www.freecsstemplates.org">FCT</a>.        The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions 3.0</a> license, so you are pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :) </p>
					<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in felis. Donec ut ante. In id eros. Suspendisse lacus, cursus egestas at sem.</p>
					
				</div>
			</div>
			
			
			<div style="clear: both;">&nbsp;</div>
		</div>
		
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page --> 
</div>
<footer>
	<p>Copyright (c) 2016 Made By Sam, George, Beth and Ayman</p>
</footer>
<!-- end #footer -->
<?php
include('includes/debugger.inc.php');
?>
</body>
</html>
