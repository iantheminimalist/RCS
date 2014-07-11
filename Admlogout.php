<?php
    include 'connect.php';

session_start();

  $User = $_SESSION['userName'];
 echo $User;

 if ($User) {
 	session_destroy();
 	header("Location:EmpSign.php");
 }else{
 	header("Location:controlPanel.php");
 }
 	
?>