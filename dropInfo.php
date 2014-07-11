<?php
include 'connect.php';

$DropQuery = mysql_query("
	SELECT  serviceID, serviceName
  FROM services
  WHERE   Description LIKE 'standalone' OR
    Description LIKE 'diamond wifi' OR
    Description LIKE 'diamond standalone' OR
    Description LIKE 'diamond inet' OR
    Description LIKE 'Jade wifi' OR
    Description LIKE 'Jade standalone' OR
    Description LIKE 'Jade Inet'
ORDER BY serviceID  ");
/*
$drop = mysql_fetch_array($DropQuery);
echo $drop['Name'];
*/

while ($record = mysql_fetch_array($DropQuery)) {
  $outputDrop .= '<option value="'.$record['serviceID'].'">'.$record['serviceName'].'</option>';
// $outputDrop.=''.$record['serviceID'];
 

 echo $outputDrop;

}

?>