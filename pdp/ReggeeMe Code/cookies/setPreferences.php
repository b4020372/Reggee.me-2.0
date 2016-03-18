<?php
// create cookie
//echo $_POST['favColour'];
$value = $_POST['favColour'];
$name = "myFav";
$expires = time() + (60*10);
setcookie($name,$value,$expires);
header('Location:preferences.php');
?>