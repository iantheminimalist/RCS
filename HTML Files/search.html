<?php
/*This file allows users to search for a particular Customer
 *The Items include:
 *- 'FirstName', 'LastName', 'customerID', 'DueDay',  
 *- 'Monthly Installment', 'CustomerBalance'
 *
 */
//require 'connect.php';
//echo "Here is the search item: ";
//$search = $_POST['customer'];
//echo $search;
//echo '<br />';
//echo "Here is the search: ";

if (isset($_POST['customer'])){

	$search = $_POST['customer'];
if ($search){
	$query = mysql_query("
						SELECT customerID, LastName, FirstName, DueDay, MonthlyInstallment, OrAmount, subscribeStat
						FROM royalcable.customers AS cus
						WHERE 	cus.customerID LIKE '%$search%' OR
								cus.FirstName LIKE '%$search%' OR
								cus.LastName LIKE 	'%$search%'
						ORDER BY cus.customerID DESC
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
			$first = $row['FirstName'];
			$day = $row['DueDay'];
			$Monthly = $row['MonthlyInstallment'];
			//$overAll = $row['OrAmount'];
            $subStat = $row['subscribeStat'];

			$output .='<tr><td>' . $ID.'</td>'. '<td>' . $first.'</td> <td> '.$last.'</td> <td>'.$Monthly.'</td>  <td>'.$subStat.'</td></tr>' ; 
		}
	}
}
}//end of the IF STATEMENT


?>