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

	$editQuery = mysql_fetch_array($query);

	if (isset($editQuery)) {
		
$Bco = $_POST['bCode'];
$Bamu = $_POST['bAmu'];
$Baid = $_POST['bPai'];
$Biss = $_POST['bIss'];
// echo $editQuery['customerID'];

		if ($Bco) {
			$Bill_C = mysql_query("
				UPDATE bills SET Bill_code = '".$Bco."'
				WHERE 	bills.BillID  = '".$Bii."' AND
				bills.Bill_code = '".$editQuery['Bill_code']."'
				 ")or die(mysql_error());
//			echo "done";
			}

		if ($Bamu) {
			$Bill_Amu = mysql_query("
				update bills SET BillingAmount = '".$Bamu."'
				where 	bills.BillID  = '".$Bii."' AND
				bills.BillingAmount = '".$editQuery['BillingAmount']."'
				 ")or die(mysql_error());
//				 			echo "done";				
			}
		if ($Baid) {

			$Bill_Paid = mysql_query("
				update bills SET Bill_paid = '".$Baid."'
				where 	bills.BillID  = '".$Bii."' AND
				bills.Bill_paid = '".$editQuery['Bill_paid']."'
				")or die(mysql_error());
//							echo "done";				
			}
		if ($Biss) {

			$Bill_IS = mysql_query("
				update bills SET Bill_Issued = '$Biss'
				where 	bills.BillID  = '".$Bii."' AND
				bills.Bill_Issued = '".$editQuery['Bill_Issued']."'
				")or die(mysql_error());
//							echo "done";				
			}

header('location:editing.php');}else{
    
     echo "<div class='col-md-12'>";
    echo "<div class='jumbotron'>";
    echo '<h1>Invalid Entry</h1><h2> Select The Go Back button in order to exit</h2>';
    echo'<div class="pull-right"><a class="btn btn-danger" href="http://localhost/rcs/editing.php">Go Back</a></div> </div>';
              
    }

?>
    </body>
</html>
