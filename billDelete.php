<html>
<head><link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
    <!--Custom Style Sheets-->
    <link href="css/carousel.css" rel="stylesheet">

</head>
<body>
    
<?php
include 'connect.php';
session_start();
$Bcus = $_POST['cus'];
$Bii = $_POST['bil'];

$query = mysql_query("
		SELECT customerID, LastName, BillID, Bill_code, BillingAmount, Bill_paid, Bill_Issued
		FROM customers AS cus NATURAL JOIN(
			SELECT *
				FROM pays NATURAL JOIN bills
				WHERE	bills.BillID LIKE '%$Bii%') AS Bill
				WHERE 	cus.customerID LIKE '%$Bcus%' OR
						cus.FirstName LIKE '%$Bcus%' OR
						cus.LastName LIKE 	'%$Bcus%'
				ORDER BY cus.customerID DESC;
					") or die(mysql_error());

$deleteQuery = mysql_fetch_array($query);

	if (isset($deleteQuery)) {
		
		$deletePay = mysql_query("
			DELETE FROM pays
			WHERE BillID = '".$Bii."'
			") or die(mysql_error());

		$deleteBill = mysql_query("
			DELETE FROM bills
			WHERE BillID = '".$Bii."' ") or die(mysql_error());
	header('location:deleting.php');
	}else{
    echo "<div class='col-md-12'>";
    echo "<div class='jumbotron'>";
    echo '<h1>Invalid Entry</h1><h2> Select The Go Back button in order to exit</h2>';
    echo'<div class="pull-right"><a class="btn btn-danger" href="http://localhost/rcs/location:deleting.php">Go Back</a></div> </div>';
	}
?>
</body>
</html>
