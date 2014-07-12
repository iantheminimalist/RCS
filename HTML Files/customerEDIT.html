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

$cus = $_POST['cus'];echo "<br/>";


$cusSearch = mysql_query("
  SELECT customerID
  FROM royalcable.customers AS cus
  WHERE cus.customerID = '$cus' 
    ") OR die(mysql_error());


$customerSer = mysql_fetch_array($cusSearch);


if ($customerSer['customerID']){
      $cust = $_POST['cus1'];       echo "<br/>"; 
      $first = $_POST['first'];     echo "<br/>"; 
      $last = $_POST['last'];       echo "<br/>";
      $street = $_POST['street'];   echo "<br/>";
      $area = $_POST['area'];       echo "<br/>";
      $city = $_POST['city'];       echo "<br/>";
      $Region = $_POST['Region'];   echo "<br/>";
      $phone = $_POST['phone'];     echo "<br/>";
      $cell = $_POST['cell'];       echo "<br/>";
      $plan = $_POST['plan'];       echo "<br/>";
      $stat = $_POST['stat'];       echo "<br/>";
      $bal = $_POST['bal'];         echo "<br/>";
    
    
	$query = mysql_query("
		SELECT customerID, serviceID, LastName, FirstName, street, Area, city, serviceName, Phone1, Phone2, subscribeStat, CustomerBalance, subscribeChange   
		FROM customers AS cus NATURAL JOIN(
			SELECT serviceID, serviceName, subscribeChange  
				FROM services NATURAL JOIN subscribes
					WHERE customerID like '$cus') AS subserv
				WHERE 	cus.customerID like '$cus' 
				ORDER BY cus.customerID DESC;
					") or die(mysql_error());
  

    
/*
$searchFilter2 = mysql_query("
  SELECT serviceID
  FROM subscribes NATURAL JOIN services
  WHERE customerID = '$cus'
  ");

      $placePlan = mysql_fetch_array($PlanQ);
      $service = mysql_fetch_array($searchFilter2);
      $price = $placePlan['UnitPrice'];

    //Query updates customer Information and the Customer's Subscription details
*/
    
if ($first) {
      $cust_f = mysql_query("
        UPDATE customers SET FirstName = '".$first."'
        WHERE   customerID  = '".$cus."'
         ")or die(mysql_error());
//      echo "done";
      }


    if ($last) {
      $cust_l = mysql_query("
        UPDATE customers SET LastName = '".$last."'
        WHERE   customerID  = '".$cus."'
         ")or die(mysql_error());
//              echo "done";        
      }

    if ($street) {

      $cust_S = mysql_query("
        update customers SET Street = '".$street."'
        WHERE   customerID  = '".$cus."'
        ")or die(mysql_error());
//              echo "done";        
      }

    if ($area) {

      $cust_A = mysql_query("
        update customers SET Area = '".$area."'
        WHERE   customerID  = '".$cus."'
        ")or die(mysql_error());
//              echo "done";        
      }

    if ($city) {
      $cust_ci = mysql_query("
        UPDATE customers SET City = '".$city."'
        WHERE   customerID  = '".$cus."'
         ")or die(mysql_error());
//      echo "done";
      }

    if ($Region) {
      $cust_lre = mysql_query("
        UPDATE customers SET Region = '".$Region."'
        WHERE   customerID  = '".$cus."'
         ")or die(mysql_error());
//              echo "done";        
      }

    if ($phone) {

      $cust_Sph = mysql_query("
        update customers SET Phone1 = '".$phone."'
        WHERE   customerID  = '".$cus."'
        ")or die(mysql_error());
//              echo "done";        
      }
      
    if ($cell) {

      $cust_Acell = mysql_query("
        update customers SET Phone2 = '".$cell."'
        WHERE   customerID  = '".$cus."'
        ")or die(mysql_error());
//              echo "done";        
      }
          if ($bal) {

      $cust_ball = mysql_query("
        update customers SET CustomerBalance = '".$bal."'
        WHERE   customerID  = '".$cus."'
        ")or die(mysql_error());
//              echo "done";        
      }
          if ($stat) {

      $cust_st = mysql_query("
        update customers SET subscribeStat = '".$stat."'
        WHERE   customerID  = '".$cus."'
        ")or die(mysql_error());
//              echo "done";        
      }

    if ($plan) {
      $row = mysql_fetch_array($query);    
      $servname = $row['subscribeChange'];   
        
        $query2 = mysql_query("
                SELECT serviceID
                FROM services
                WHERE serviceName LIKE '$servname'  
                        ") or die(mysql_error());
      
         $row2 = mysql_fetch_array($query2); 
         
        if($plan =$row2['serviceID'] ){
            
            
            $cust_A = mysql_query("
                update subscribes SET serviceID = '".$plan."'
                WHERE   customerID  = '".$cus."'
                ")or die(mysql_error());
        
                $cust_B = mysql_query("
                    update subscribes SET subscribeChange = 'no change'
                    WHERE   customerID  = '".$cus."'
        ")or die(mysql_error());    
        }
        
//              echo "done";        
      }
    
    if ($cust) {
      $cust_f = mysql_query("
        UPDATE customers SET customerID = '".$cust."'
        WHERE   customerID  = '".$cus."'
         ")or die(mysql_error());
//      echo "done";
        
      }
header('location:editingCust.php');


} else{
    echo "Enterance Number exists!!!";
    
    echo "<div class='col-md-12'>";
    echo "<div class='jumbotron'>";
    echo '<h1>Invalid Entry</h1><h2> Select The Go Back button in order to exit</h2>';
    echo'<div class="pull-right"><a class="btn btn-danger" href="http://localhost/rcs/editingCust.php">Go Back</a></div> </div>';
       
}

?>
    </body>
</html>
