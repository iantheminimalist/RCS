<?php
/*This file allows users to search for a particular Customer
 *The Items include:
 *- 'FirstName', 'LastName', 'customerID', 'DueDay',  
 *- 'Monthly Installment', 'CustomerBalance'
 *
 */

if (isset($_POST['customer'])){

	$search = $_POST['customer'];

	$query = mysql_query("
		SELECT customerID, LastName, BillID, Bill_code, BillingAmount, Bill_paid, Bill_Issued
		FROM customers AS cus NATURAL JOIN(
			SELECT *
				FROM pays NATURAL JOIN bills) AS Bill
				WHERE 	cus.customerID LIKE '%$search%' OR
						cus.FirstName LIKE '%$search%' OR
						cus.LastName LIKE 	'%$search%'
				ORDER BY cus.customerID DESC;
					");
//$select = mysql_fetch_array($query);
//echo $select['customerID'];echo $select['FirstName'] ;
	$count = mysql_num_rows($query);
	if ($count == 0)
	{
		$output = 'there was no search results';echo "<br />";echo "<br />";
	}

	else
	{
		while ($row = mysql_fetch_array($query))
		{
			$ID = $row['customerID'];
			$last = $row['LastName'];
			$Biid = $row['BillID'];
			$Bcode = $row['Bill_code'];
			$Bia = $row['BillingAmount'];
			$Baid = $row['Bill_paid'];
			$Biss = $row['Bill_Issued'];

			$output .=' <tr><td>'. 
			$ID.' </td><td>' . 
			$last.' </td><td> '.
			$Biid.'</td><td>'.
			$Bcode.' </td><td>'.
			$Bia.'</td><td>'.
			$Baid.'</td><td>'.
			$Biss.'</td><td>
			</td>'; 
		}
	}
}//end of the IF STATEMENT


?>