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
		SELECT customerID, serviceID, LastName, FirstName, street, Area, city, serviceName, Phone1, Phone2, subscribeStat, CustomerBalance, subscribeChange   
		FROM customers AS cus NATURAL JOIN(
			SELECT serviceID, serviceName, subscribeChange  
				FROM services NATURAL JOIN subscribes
					WHERE customerID like '$search') AS subserv
				WHERE 	cus.customerID like '%$search%' 
				ORDER BY cus.customerID DESC;
					") or die(mysql_error());
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
			$Biid = $row['LastName'];
			$Bcode = $row['FirstName'];
			$Bstr = $row['street'];
			$Barea = $row['Area'];
			$Bcity = $row['city'];
			$Bphone = $row['Phone1'];
			$Bcell= $row['Phone2'];
			$Ball= $row['CustomerBalance'];
			$Bstat= $row['subscribeStat'];
			$Bia = $row['serviceName'];
            $Bchange = $row['subscribeChange'];
            
            
			$output .='<tr><td>'. 
			$ID  	.'</td><td>'.
			$Biid 	.'</td><td>'.
			$Bcode 	.'</td><td>'.
			$Bstr 	.'</td><td>'.
			$Barea 	.'</td><td>'.
			$Bcity 	.'</td><td>'.
			$Bphone .'</td><td>'.
			$Bcell	.'</td><td>'.
			$Ball	.'</td><td>';
            
            $SToutput .='<tr><td>'.
            $ID  	.'</td><td>'.
            $Bia	.'</td><td>'.
			$Bstat	.'</td><td>'.
            $Bchange.'</td><td>';
		}
	}
}//end of the IF STATEMENT


?>