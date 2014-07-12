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
// CustomerID
$Bcus = $_POST['cus'];
//BillID
$Bii = $_POST['bil'];

//Selects the customer ID from DB
$cusSearch = mysql_query("
	SELECT customerID
	FROM royalcable.customers AS cus
	WHERE cus.customerID = '$Bcus' 
		") OR die(mysql_error());

$customer = mysql_fetch_array($cusSearch);

//If customer ID exists..execute the IF STATEMENT
if (isset($customer)){
	//Selects all the BillID's from the DB
	$BillIDSearch = mysql_query("
		SELECT BillID
		FROM royalcable.bills AS bi
		WHERE bi.BillID = '$Bii' 
			") OR die(mysql_error());

	$Bill = mysql_fetch_array($BillIDSearch);

	if (isset($Bill)) {
		//Get the 'Bill_Code', 'Bill Amount', 'Bill_Paid', and 'Bill_Issued' (in that order) data from FORMS	
		$Bco = $_POST['bCode'];
		$Bamu = $_POST['bAmu'];
		$Baid = $_POST['bPai'];
		$Biss = $_POST['bIss'];
		
		//$output .='customerID:  '.$Bcus .'<br /> Billing Code:  '. $Bco .'<br /> Billing Amount: '. $Bamu  .'<br /> Bill Paid: '. $Baid .'<br />Bill Issued: '. $Biss;

		//Query inputs the bill's values into the database
		$bills = mysql_query("
			INSERT INTO `bills` (BillID, Bill_code, BillingAmount, Bill_paid, Bill_Issued)
			VALUES ('".$Bii."', '".$Bco."', '".$Bamu."', '".$Baid."','".$Biss."') 
			") OR die(mysql_error());


		//Query inputs the pay's values into the database
		$pays = mysql_query("
			INSERT INTO `pays` (CustomerID, BillID )
			VALUES ('".$Bcus."', '".$Bii."') 
			") OR die(mysql_error());

		//echo 'here is the output : <br />';
		header('location:billing.php');
		}//END OF $Bills IF STATEMENT
	else{
			echo "Bill does exist, Please check the Bill ID";
		}
	}
else{
    echo "<div class='col-md-12'>";
    echo "<div class='jumbotron'>";
    echo '<h1>Invalid Entry</h1><h2> Select The Go Back button in order to exit</h2>';
    echo'<div class="pull-right"><a class="btn btn-danger" href="http://localhost/rcs/billing.php">Go Back</a></div> </div>';
	}
?>

   
</body>
</html>