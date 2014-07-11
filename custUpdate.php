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

	$query = mysql_query("
SELECT customerID, FirstName, LastName, serviceID, subscribeChange, subscribeStat   
FROM subscribes natural join customers
WHERE   subscribeChange  not like 'no change' OR
        subscribeStat LIKE 'deactivated'
					");
//$select = mysql_fetch_array($query);
//echo $select['customerID'];echo $select['FirstName'] ;
	
		while ($row = mysql_fetch_array($query))
		{
			$ID2 = $row['customerID'];
			$first2 = $row['FirstName'];
            $last2 = $row['LastName'];
			$day2 = $row['serviceID'];
			$Monthly2 = $row['subscribeChange'];
            $subStat2 = $row['subscribeStat'];

			$UPoutput .='<tr><td>' . 
                $ID2.'</td>'. '<td>' . 
                $first2.'</td> <td> '.
                $last2.'</td> <td>'.
                $day2.'</td> <td>'.
                $Monthly2.'</td>  <td>'.
                $subStat2.'</td></tr>' ; 
		}
	



?>