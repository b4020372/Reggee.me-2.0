<?php
$favColour = 'red';
$colourCode = '#ff0000';
// check for cookie 'favCol' here
if(isset($_COOKIE['myFav'])){
$favColour = $_COOKIE['myFav'];
}
switch($favColour){
	case 'red' : 
	$colourCode = '#B9121B';
	break;
	case 'blue' : 
	$colourCode = '#225378';
	break;
	case 'green' : 
	$colourCode = '#BEEB9F';
	break;
	case 'orange' : 
	$colourCode = '#EB7F00';
	break;
}
// check for 'myCount' cookie here and increment
$value = 1;
$name = "myCount";
$expires = 0;
if(isset($_COOKIE['myCount'])){
	$value = $_COOKIE['myCount'] + 1;
	setcookie($name, $value, $expires);
}else{
	setcookie($name, $value, $expires);
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cookie Demo</title>
<style>
body{
	font-family:Arial, Helvetica, sans-serif;	
}
h1, h2{
	text-transform:capitalize;	
	text-align:center;
	float:left;
	width:200px;
	font-size:1.1em;
}
h2{
	font-size:0.9em;
}
.box{
	background-color:<?php echo $colourCode;?>;
	float:left;
	width:50px;	
	height:50px;	
	border-radius:8px;
}
section{
	clear:left;	
	width:320px;
	margin:auto;
	padding:45px;
	text-align:center;
}
</style>
</head>

<body>
<section>
    <div class="box"></div>
    <h1>I prefer <?php echo $favColour; ?></h1>
    <div class="box"></div>
</section>
<section>
    <form action="setPreferences.php" method="post">
        <select name="favColour">
            <option value="red" <?php echo ($favColour == 'red') ? 'selected' : ''; ?>>Red</option>
            <option value="blue" <?php echo ($favColour == 'blue') ? 'selected' : ''; ?>>Blue</option>
            <option value="green" <?php echo ($favColour == 'green') ? 'selected' : ''; ?>>Green</option>
            <option value="orange" <?php echo ($favColour == 'orange') ? 'selected' : ''; ?>>Orange</option>
        </select>
    <input type="submit" value="Change Colour">
    </form>
</section>
<section>
    <div class="box"></div>
    <h2>You have visited <?php echo $value; ?> times</h2>
    <div class="box"></div>
</section>
</body>
</html>
