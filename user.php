
<?php
session_start();
/** User's Balance information
 ** This file will shoe the user's:
      -Balance (how much you owe)
      -Subscription Plan (How much you pay)
      -Basic Information (How are you?)
 **
 **
 **/

 $_SESSION['userName'] = $stud;

/**************************************************************************************************/
        $config = mysql_query(" 
                  SELECT customerID, FirstName, LastName, MonthlyInstallment AS 'MI', CustomerBalance AS 'Balance', DueDay AS 'Day'
                  FROM royalcable.customers AS CUS
                  WHERE CUS.LastName LIKE '".$stud."' ");
          if ($stud) {
              $profile = mysql_fetch_array($config);
             // echo "I work";
            //echo $profile['customerID'];
        
        $find = mysql_query("
                  SELECT customerID
                  FROM customers
                  Where LastName LIKE  '".$profile['customerID']."' ");

        $bills = mysql_query("
          SELECT BillID, BillingAmount, Bill_paid, Bill_Issued
            FROM customers natural join (
              SELECT *
              FROM bills natural join pays
              WHERE customerID = '".$profile['customerID']."') AS pay
            WHERE LastName LIKE  '".$profile['LastName']."' ");

        $plans = mysql_query("
          SELECT serviceName, UnitPrice ,subscribeStat
            FROM customers AS cus NATURAL JOIN(
              SELECT serviceID, ServiceName, UnitPrice
                FROM services NATURAL JOIN subscribes
                  WHERE   customerID like'".$profile['customerID']."') AS subserv
                  WHERE   cus.customerID like '".$profile['customerID']."'
                  ORDER BY cus.customerID DESC ");
       $displayP = mysql_fetch_array($plans);

/**************************************************************************************************/
while ($row = mysql_fetch_array($bills))
    {
      $ID = $row['BillID'];
      $amount = $row['BillingAmount'];
      $paid = $row['Bill_paid'];
      $issued = $row['Bill_Issued'];

      $output .='<tr><td>' .$ID.'</td>'. '<td>' .$amount.'</td> <td> '.$paid.'</td> <td>'.$issued.'</td>  </tr>' ; 
    } 

?>

<div class="row">
  <div class="col-xs-6">
    <div class="jumbotron">
      <h2>Balance</h2>
      <p>
        <?php
          echo "PHP: " ;
          echo $profile['Balance'];

        ?> 
      </p>
       <h2>Next Payment</h2>
      <p> 
        <?php
        echo "Module not functional";
          //echo $profile['Day']; echo "th";  echo " input monthly payment";
        ?> 
      </p>
    </div>
  </div>
  <div class="col-xs-6">
   <div class="jumbotron">
      <h2>Customer</h2>
      <p>
        <?php
          echo $profile['LastName'];echo ", "; echo  $profile['FirstName'];
        ?> 
      </p>
      <h2>Plan</h2>
      <h3>
      <?php
        echo $displayP['serviceName'] .' '. $displayP['UnitPrice'] ;
        echo'<br /> <br />Plan Status: '. $displayP['subscribeStat'].'<br /></h3>';
        echo'Note, your plan status represents as an indication that you have connection. 
                if you have changed your subscription, your Plan Status indicator will change 
                once the installation of your request plan is finished.  ';
      ?>
      
      <p>
 </p>
    </div>
  </div>
    <div class="col-xs-12">
   <div class="jumbotron">
      <h1>Billing Information</h1>
      <p>
       
        <table class="table table-hover">
      <thead>
        <tr>
        <th>Billing ID</th>
          <th>Payment</th>
          <th>Bill Paid</th>
          <th>Billing Date</th>
        </tr>
      </thead>
      <tbody>
    <?php
    print("$output");
    ?>
      </tbody>
</table> 
      </p>
    </div>
  </div>
</div><!-- end of <div class="row"> -->

<?php          

            } else{ 
echo "<div class='col-md-12'>";
    echo "<div class='jumbotron'>";
    echo '<h1>Invalid Entry</h1><h2> Select he Go Back button in order to exit</h2>';
    echo'<div class="pull-right"><a class="btn btn-danger" href="http://localhost/rcs/Index.php">Go Back</a></div> </div>';
              
              
              
              
                  die(mysql_error());
                  }

?>
