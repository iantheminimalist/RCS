<?php
session_start();
$stud=$_SESSION['userName'];

if (isset($stud)) {
	session_destroy();
	header("location:index.php");
//	echo "session is destroyed";
}else{
	echo "The session was destroyed. Report to Admin to Fix Problem ";

}
	

?>