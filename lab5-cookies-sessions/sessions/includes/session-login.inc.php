<div id="login">
<?php 

///////////////////// conditional message /////////////////
if($_SESSION['count'] > 0 && $_SESSION['count'] <= 3 ){
echo "<p class=\"error\">Sorry incorrect</p>";
}
if($_SESSION['count'] > 3){
echo "<p class=\"error\">Too many attempts</p>";
}else{
// don't forget to close this with } after the HTML form
}
?>

<form id="loginForm" name="loginForm" method="post" action="logic/checklogin.php">
                  <label for="username">Username</label>
                  <input name="username" type="text" id="username">
                  <label for="password">Password</label>
                  <input name="password" type="password" id="password">
                  <input type="submit" name="Submit" value="Login">
</form>
<?php 
// closing curly 

?>
</div>