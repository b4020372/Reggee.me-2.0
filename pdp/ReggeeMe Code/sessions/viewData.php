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
        dataPoints: [

        {
        dataPoints: result2
        }     
        ]
      }
      ]
    });

    chart.render();

    $.getJSON("data.php", function (result);
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
        {
        dataPoints: result
        }       
        ]
      }
      ]
    });

    chart.render();
  }
<?php
header('Content-Type: application/json');



// Check connection
if (mysqli_connect_errno($con))
{
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
}else
{
    $data_points = array();
    
    $result = mysqli_query($con, "SELECT * FROM Students");
    
    while($row = mysqli_fetch_array($result))
    {        
        $point = array("label" => $row['Attendance'] , "y" => $row['total_sales']);
        
        array_push($data_points, $point);        
    }
    
    echo json_encode($data_points, JSON_NUMERIC_CHECK);
}
mysqli_close($con);

?>
<?php
header('Content-Type: application/json');



// Check connection
if (mysqli_connect_errno($con))
{
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
}else
{
    $data_points = array();
    
    $result2 = mysqli_query($con, "SELECT * FROM Students");
    
    while($row = mysqli_fetch_array($result2))
    {        
        $point = array("label" => $row['Attendance'] , "y" => $row['total_sales']);
        
        array_push($data_points, $point);        
    }
    
    echo json_encode($data_points, JSON_NUMERIC_CHECK);
}
mysqli_close($con);

?>
  </script>
  <script type="text/javascript" src="scripts/canvasjs-1.7.0/canvasjs.min.js"></script>
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
					<div id="chartAttendanceActual" style="height: 400px; width: 50%;float:left;"></div>
				</div>
				<div class="entry">
				<form>
          <input type="search" placeholder="search" width="75%">
        </form>
				</div>
			</div>
      <div class="entry">
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
