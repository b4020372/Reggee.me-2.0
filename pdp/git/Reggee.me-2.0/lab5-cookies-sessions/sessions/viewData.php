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
<script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartAttendanceActual",
    {      
      title:{
        text: "Actual Attendance by Month"
      },
      axisY :{
        includeZero: false,
        title:"Attendance (%)"
      },
      axisX: {
        valueFormatString: "MMM",
        interval: 1,
        intervalType: "month",
        title: "Months"
      },
      data: [
      {        
        type: "spline",  
        indexLabelFontColor: "orangered",      
        dataPoints: [
        { x: new Date(2012, 00, 1), y: 52 },
        { x: new Date(2012, 01, 2), y: 51,  indexLabel: "Exams" },
        { x: new Date(2012, 02, 3), y: 13 },
        { x: new Date(2012, 03, 4), y: 63 },
        { x: new Date(2012, 04, 5), y: 95 , indexLabel: "Holiday Season"},
        { x: new Date(2012, 05, 6), y: 20 },
        { x: new Date(2012, 06, 7), y: 86 },
        { x: new Date(2012, 07, 8), y: 81, indexLabel: "New Session" },
        { x: new Date(2012, 08, 9), y: 38 },
        { x: new Date(2012, 09, 10), y: 35 },
        { x: new Date(2012, 10, 11), y: 48, indexLabel: "Terms" },
        { x: new Date(2012, 11, 1), y: 39 }        
        ]
      }
      ]
    });

    chart.render();
    var chart = new CanvasJS.Chart("chartAttendanceMonth",
    {      
      title:{
        text: "Average Attendance by Month"
      },
      axisY :{
        includeZero: false,
        title:"Attendance (%)"
      },
      axisX: {
        valueFormatString: "MMM",
        interval: 1,
        intervalType: "month",
        title: "Months"
      },
      data: [
      {        
        type: "spline",  
        indexLabelFontColor: "orangered",      
        dataPoints: [
        { x: new Date(2012, 00, 1), y: 2 },
        { x: new Date(2012, 01, 1), y: 17,  indexLabel: "Exams" },
        { x: new Date(2012, 02, 1), y: 13 },
        { x: new Date(2012, 03, 1), y: 36 },
        { x: new Date(2012, 04, 1), y: 59 , indexLabel: "Holiday Season"},
        { x: new Date(2012, 05, 1), y: 25 },
        { x: new Date(2012, 06, 1), y: 68 },
        { x: new Date(2012, 07, 1), y: 81, indexLabel: "New Session" },
        { x: new Date(2012, 08, 1), y: 83 },
        { x: new Date(2012, 09, 1), y: 53 },
        { x: new Date(2012, 10, 1), y: 75, indexLabel: "Terms" },
        { x: new Date(2012, 11, 1), y: 90 }        
        ]
      }
      ]
    });

    chart.render();
  }

  </script>
  <script type="text/javascript" src="scripts/canvasjs.min.js"></script>
  <script type="text/javascript">
  var $rows = $('#tabletest tr');
	$('#search').keyup(function() {
	    
	    var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
	        reg = RegExp(val, 'i'),
	        text;
	    
	    $rows.show().filter(function() {
	        text = $(this).text().replace(/\s+/g, ' ');
	        return !reg.test(text);
	    }).hide();
	});
  </script>
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
					<li><a href="createModule.php">Create Module</a></li>
					<li><a href="createEvent.php">Create Event</a></li>
					<li class="current_page_item"><a href="viewData.php">View Data</a></li>
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
				<h2 class="title"><a href="#">Welcome to View Data</a></h2>
				
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<div id="chartAttendanceMonth" style="height: 400px; width: 50%;float:left;"></div>
					<div id="chartAttendanceActual" style="height: 400px; width: 50%;"></div>
				</div>
				<div class="entry">
				<form>
					<input type="text" id="search" placeholder="Type to search">
				<table id="tabletest" border="0px" width="100%">
				   <tr>
				      <td>b103</td>
				      <td>Gregg</td>
				   </tr>
				   <tr>
				      <td>b104</td>
				      <td>Jeff</td>
				   </tr>
				   <tr>
				      <td>b105</td>
				      <td>Orange</td>
				   </tr>
				</table>
				</form>
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
