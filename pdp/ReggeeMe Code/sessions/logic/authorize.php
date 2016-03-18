<?php
// check if session login and redirect if not
if(!isset($_SESSION['login'])){
header('Location: '.$_SERVER['HTTP_REFERER']);
exit;
}
?>