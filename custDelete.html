<?php
include 'connect.php';
session_start();

$Bcus = $_POST['cus'];

$Bquery = mysql_query("
		SELECT *
		FROM customers AS cus NATURAL JOIN(
			SELECT *
				FROM pays NATURAL JOIN bills) AS Bill
				WHERE 	cus.customerID = '$Bcus'
				ORDER BY cus.customerID DESC
					") or die(mysql_error());

$Squery = mysql_query("
		SELECT *  
		FROM customers AS cus NATURAL JOIN(
			SELECT serviceID, serviceName
				FROM services NATURAL JOIN subscribes
					WHERE customerID like '$Bcus') AS subserv
				WHERE 	cus.customerID like '$Bcus'
				ORDER BY cus.customerID DESC;
					") or die(mysql_error());



$deleteBQuery = mysql_fetch_array($Bquery);

$deleteSQuery = mysql_fetch_array($Squery);

	if (isset($deleteBQuery)) {
		
		$deletePay = mysql_query("
			DELETE FROM pays
			WHERE customerID = '".$Bcus."' ") or die(mysql_error());

		$deleteBill = mysql_query("
			DELETE FROM bills
			WHERE BillID = '".$Bcus."' ") or die(mysql_error());


	header('location:deleting.php');
	}if (isset($deleteBQuery)) {
		
		$deleteSubscribes = mysql_query("
			DELETE FROM subscribes
			WHERE customerID = '".$Bcus."' ") or die(mysql_error());

		$deleteBill = mysql_query("
			DELETE FROM customers
			WHERE customerID = '".$Bcus."' ") or die(mysql_error());


	}
	else{
		echo "Bill was not deleted";
	}

?>