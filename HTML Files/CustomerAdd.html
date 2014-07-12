<html>
    <head>
          <link href="css/bootstrap.min.css" rel="stylesheet">  
    </head>
    <body>
<!--============================
  Navigation Bar information
==============================-->
  <?php
    require 'connect.php';
  ?>
   <div class="navbar navbar-default navbar-fixed-top" >
    <div class="container">
      <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
      <a href="http://localhost/rcs/index.php" class="navbar-brand">Royal Cable</a>
      </div>

      <div class="collapse navbar-collapse ">
        <ul class="nav navbar-nav ">
          <li ><a href="http://localhost/rcs/index.php" >Home</a></li>

          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Offers<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="http://localhost/rcs/services.php">Services & Promos</a></li>
                  <li><a href="http://localhost/rcs/prices.php">Prices & Packages</a></li>
                  <li><a href="http://localhost/rcs/coverage.php">Coverages & Bayad Centers</a></li>
                </ul> 
          </li>
          
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">For More<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li ><a href="http://localhost/rcs/contactUs.php">Contact</a></li>
                  <li ><a href="http://localhost/rcs/About.php">About Us</a></li>
                </ul> 
          </li>
        </ul>
        
        <?php
            require 'login.php';
            include 'PriceLocate.php';
        ?>
          
      </div><!-- END OF  -->
    </div><!-- END OF <div class="container">  -->
  </div><!-- END OF <div class="navbar navbar-default navbar-fixed-top" > -->

 <br /><br /> <br />
        
<div class="container">
        <div class="row">

            
               
<?php
include 'connect.php';

$cus = $_POST['cus'];echo "<br/>";

$cusSearch = mysql_query("
  SELECT customerID
  FROM royalcable.customers AS cus
  WHERE cus.customerID = '$cus' 
    ") OR die(mysql_error());

$customerSer = mysql_fetch_array($cusSearch);

if (!$customerSer['customerID'])
{
$plan = $_POST['plan'];
$plansearch = mysql_query("
    SELECT serviceName
    FROM services
    WHERE serviceID = '$plan' ") or die(mysql_error());

$planFind = mysql_fetch_array($plansearch);    

echo "<div class='col-md-6'>";
 echo "<div class='jumbotron'>";   
echo'<h2>subscription Information</h2>';
echo'<h4>';
echo'Last Name: '.      $last = $_POST['last'];         echo "<br />";
echo'First Name: '.     $first = $_POST['first'];       echo "<br />";
echo'Street: '.         $street = $_POST['street'];     echo "<br />";
echo'Area: '.           $area = $_POST['area'];         echo "<br />";
echo'City: '.           $city = $_POST['city'];         echo "<br />";
echo'Region: '.         $Region = $_POST['Region'];     echo "<br />";
echo'Phone Number: '.   $phone = $_POST['phone'];       echo "<br />";
echo'Cell Number: '.    $cell = $_POST['cell'];         echo "<br />";
echo'Plan: '.           $planFind['serviceName'];       echo "<br />";
echo'Status: '.         $subscribestat = 'deactivated'; echo "<br />";
echo'</h4>';
    echo'</div> </div>';
    
    $PlanQ = mysql_query("
          SELECT UnitPrice, serviceName
          FROM services 
          WHERE serviceID = '$plan'
        ") or die(mysql_error());

    $placePlan = mysql_fetch_array($PlanQ);
    
    $price = $placePlan['UnitPrice'];
    $serviceN = $placePlan['serviceName'];
    //Query inputs the bill's values into the database

      $customerInsert = mysql_query("
          INSERT INTO `customers` ( customerID, LastName, FirstName, street, Area, City, Region , Phone1, Phone2, MonthlyInstallment,subscribeStat )
          VALUES ('".$cus."', '".$last."', '".$first."', '".$street."','".$area."', '".$city."', '".$Region."','".$phone."' , '".$cell."','".$price."','".$subscribestat."' ) 
        ") OR die(mysql_error());

    //Query inputs the pay's values into the database
      $subscribeInsert = mysql_query("
          INSERT INTO `subscribes` (customerID, serviceID, subscribeChange )
          VALUES ('".$cus."', '".$plan."', '".$serviceN."') 
        ") OR die(mysql_error());

echo "<div class='col-md-6'>";
    echo "<div class='jumbotron'>";
    echo'<h2>Addition Information</h2>';
echo'Please remember that your subscription request will be evaluated. Please wait for us to contact you. In the mean time, if you have any questions you can contact us at our office [insert number], email us at [insert email] or message us on our Facebook page. <br /> <br />';
echo '<div class="pull-right"><a href="http://localhost/rcs/subscribe.php"><button class="btn btn-success">Next</button></a></div>';
echo'</div> </div>';
} else{
 //header('location:subscribe.php');
    echo "<div class='col-md-6'>";
    echo "<div class='jumbotron'>";
    echo '<h2>The Password you inputted is invalid. Please go back and input a different Enterance Number</h2>';
    echo'<div class="pull-right"><a class="btn btn-danger" href="http://localhost/rcs/subscribe.php">Go Back</a></div> </div>';

}


?>  
</div><!-- END OF div class="row" -->         
    </div><!-- END OF div class="container" -->
        
        	<script src="js/jquery.js"/>
	<script src="js/jquery-2.0.2.min.js"></script>
	<script src="js/bootstrap.js"></script>

</body>
</html>

    