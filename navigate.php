<!DOCTYPE html>
<!--the Login screen for employee's-->
<html lang="en">
  <head>


    <title>Royal Cablevision Signin </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navigate.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<?php
include 'connect.php';
?>

<div class="container">
<br/>

    <h2 class="logo-heading"><img src="img/logo.png"></h2>

<div class="form-signin">     
    <div class="row">
        <div class="col-xs-6">
            <h3 class="form-signin-heading">Customers Section</h3>
        <p>
            This Button will navigate you to the Main Website of Royal Cablevision. This Project was created as part 1 of My Capstone Project. The objective of this project was to create a Website for an company where I had my Internship. This Internship was a requirement for me to graduate. The objective of the website was to receive new users as well as login existing subscribers to check their plans, balances and their billing history. 
        </p>
            <a class="btn btn-lg btn-primary btn-block" href="http://localhost/rcs/index.php">Website</a>
        </div>
        
        <div class="col-xs-6">
            <h3 class="form-signin-heading">Employee Section</h3>
        <p>
            This Button will navigate you to Royal Cablevision's Control Panel. This Project was created as part 2 of My Capstone Project. The objective of this project was to create a Website for the company to create, read, Update and Delete Customer information as well as customer bills and notifications. The control panel also allows employees to update any information on certain pages on the main website.
        </p>
            <a class="btn btn-lg btn-primary btn-block" href="http://localhost/rcs/EmpSign.php">Control Plan</a>
        </div>
    </div><!-- /end of "row"-->        
</div><!--/ end of "form-signin"-->


      <footer>
<p>&copy; Royal Cablevision Company 2014</p>
      </footer>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
