<html>
<head><link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
    <!--Custom Style Sheets-->
    <link href="css/carousel.css" rel="stylesheet">

</head>
<body>
 <?php
//subChange.php
require 'connect.php';
session_start();

$RequestID = $_POST['cus'];
    
if ($RequestID) {

    $serviceReq = $_POST['plan'];
    
    $find = mysql_query("
        SELECT customerID
        FROM customers NATURAL JOIN subscribes
        Where customerID LIKE  '$cus' ");
    
    $findServ = mysql_query("
        SELECT serviceName
        FROM services
        Where serviceID = '$serviceReq' ");
       
    $user = mysql_fetch_array($find);
    $Ser = mysql_fetch_array($findServ);

     $Serv = $Ser['serviceName']; 
   
    if ($serviceReq){
    
            $cust_Sph = mysql_query("
                update subscribes SET subscribeChange = '".$Serv."'
                WHERE   customerID  = '".$RequestID."' ")or die(mysql_error());
    
            header('location:accountChange.php');
    }    

}else {
    
    echo "<div class='col-md-12'>";
    echo "<div class='jumbotron'>";
    echo '<h1>Invalid Entry</h1><h2> Select The Go Back button in order to exit</h2>';
    echo'<div class="pull-right"><a class="btn btn-danger" href="http://localhost/rcs/accountChange.php">Go Back</a></div> </div>';
              
    }   //END of If
?>
   
</body>
</html>




