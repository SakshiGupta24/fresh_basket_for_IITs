<html>
<head>
<meta charset="utf-8">
<title>Logout</title>
</head>

<body>
<?php
/*
echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
	session_start();
	session_unset();
	session_destroy();
	/*header("Location:home.php");*/
	/* function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
phpAlert("You have logged out."); 
	
	
	
	
	header("Location:home.php");
	
	
	*/
session_start();
require("config.php");
unset($_SESSION['SESS_LOGGEDIN']);
unset($_SESSION['SESS_USERNAME']);
unset($_SESSION['SESS_USERID']);
session_destroy();

header("Location: " . $config_basedir);

	?>
</body>
</html>