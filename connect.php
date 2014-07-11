<?php
/** Connection to the database
 ** this file is used for the user to connect to the database

 **
 **
 **/
$mysql_host = 'localhost:3307'; //this the server
$mysql_user = 'root'; //this the superuser that access the DB
$mysql_pass = 'Amypond1'; //the password to the DB


/*** DB connection ***/
$mysql_db = 'royalcable'; //the ACTUAL DB 

/***If there is no connection to the DB expect an error**/
if (! mysql_connect($mysql_host, $mysql_user, $mysql_pass) || ! mysql_select_db($mysql_db)) {
	die(mysql_error());
}



?>