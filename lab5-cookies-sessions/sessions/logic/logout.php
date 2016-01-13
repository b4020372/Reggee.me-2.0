<?php
// log out logic
include('../includes/sessions.inc.php');
//logout code
if(isset($_COOKIE[session_name()])){
// match PHPSESSID settings
setcookie(session_name(), '', time()-3600, '/~a9015621', 'homepages.shu.ac.uk', 1, 1);
// clear the Session cookie
}
$_SESSION = array();
// empty the array
session_destroy();
//destroy the session
header("location:../index.php"); 
//to redirect
exit();
?>