<?php
include 'connect.php';
	$search = $_POST['customer'];
	
$count_query = mysql_query("
	SELECT NULL
	FROM royalcable.customers AS cus
	WHERE 	cus.customerID LIKE '%$search%' OR
	cus.FirstName LIKE '%$search%' OR
	cus.LastName LIKE 	'%$search%'				
	ORDER BY cus.customerID DESC $limit");

$count = mysql_num_rows($count_query);

//starts

if (isset($_GET['page'])) {
	$page = preg_replace("#[^0-9]#","", $_GET['page']);
}else{
	$page = 1;
	}
// maximun items that will appear
$perpage = 10;
$lastpage = ceil($count/$perpage);

if ($page < 1) {
	$page = 1;
}elseif ($page > $lastpage) {
	$page = $lastpage;
}

$limit ="LIMIT ".($page-1)*$perpage .",$perpage";

$query = mysql_query("
	SELECT customerID, LastName, FirstName, DueDay, MonthlyInstallment, OrAmount
	FROM royalcable.customers AS cus
	WHERE 	cus.customerID LIKE '%$search%' OR
	cus.FirstName LIKE '%$search%' OR
	cus.LastName LIKE 	'%$search%'				
	ORDER BY cus.customerID DESC $limit");

if ($lastpage != 1) {

	if ($page != $lastpage) {
		$next=$page+1;
		$Pagination .= '<a href="pagination.php?page='.$next.'">NEXT</a>';
	}

	if ($page != 1) {
		$prev=$page-1;
		$Pagination .= '<a href="pagination.php?page='.$prev.'">PREVIOUS</a>';
	}
}

while ($row = mysql_fetch_array($query)) {
	$output.=$row['LastName'].'<hr />';
//$hi=$row['LastName'];
 } 

?>


<html>
<head>
<title>Pagination tutorial</title>	
</head>
<body>
<form  role="form" action="pagination.php" method="POST">
          <div>
              <input type="search" id="customer" name="customer"  placeholder="Input Customers ID Number Only"><br />
              <button type="submit"  value="Submit">Sign in</button>
          </div>
</form>  

<h1>Your Pagination</h1>
<p>
<?php 
echo $count;
echo $output; ?>

<?php 
 print ("$hi");
echo $Pagination; ?>	
</p>
</body>
</html>