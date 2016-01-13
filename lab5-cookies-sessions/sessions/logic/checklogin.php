<?php
ini_set('display_errors', 1);
// check login and create SESSION and count attempts
include('../includes/sessions.inc.php');
if(!isset($_SESSION['count'])){
// first fail
$_SESSION['count'] = 1;
}else{
// 2nd or more fail
$_SESSION['count']++;
}
//check login / password combination
if ($_POST['username'] == "admin" && $_POST['password'] == "letmein"){
$_SESSION['login'] = 1;
}
// redirect browser
header("Location: ".$_SERVER['HTTP_REFERER']);
?>