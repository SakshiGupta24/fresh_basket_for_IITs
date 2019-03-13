<?php

if(isset($_SESSION['SESS_CHANGEID']) == TRUE) {
session_unset();
session_regenerate_id();
echo 'abc';
}
require("config.php");

if(isset($_SESSION['loggedin']) == FALSE) 
{  header("Location:login_signup.php");
/*echo "Existing user? First ";
echo '<a href="login.php">Login</a>'; 
echo " New to this site? then ";
echo '<a href="users.php">Sign Up</a>';*/
/*[<a href="/*&quot; . $config_basedir. &quot; logout.php">logout</a>]"; */

}
/*
else{
	if(isset($_SESSION['SESS_FLAG']) == "CART") {
echo "Logged in as";
echo $_SESSION['email'];

echo '<a href="login.php">Login"</a>';
echo $config_basedir;
}*/

?>

