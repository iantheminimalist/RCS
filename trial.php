<!--
	*
	*This is just a trial file in order to if connect.php is working or not
	*
-->
<html>
<head></head>
<body>
<?php
session_start();
 $stud=$_SESSION['userName'];
require 'connect.php';

if (isset($stud)) {
	//echo "I work";
	echo $stud;
	session_destroy();
}else{
	session_destroy();
	echo "session not work";
}
?>
</body>
</html>