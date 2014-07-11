<html>
<!---
	/** User's Balance information
	 ** This file will shoe the user's:
    	  -Balance (how much you owe)
    	  -Subscription Plan (How much you pay)
    	  -Basic Information (How are you?)
 	 **
	 **/
-->
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
		<!--Custom Style Sheets-->
		<link href="css/carousel.css" rel="stylesheet">
    <title>RC * HomePage</title>
</head>

<body> 
<?php
    require 'connect.php';


?>

<!--============================
  Navigation Bar information
==============================-->

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
					<li class="active"><a href="http://localhost/rcs/index.php" >Home</a></li>

					<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown">Offers<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="http://localhost/rcs/services.php">Services & Promos</a></li>
									<li><a href="http://localhost/rcs/prices.php">Prices & Packages</a></li>
                  <li><a href="http://localhost/rcs/coverage.php">Coverages & Bayad Centers</a></li>
								</ul>	
					</li>
					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">For More<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="http://localhost/rcs/contactUs.php">Contact</a></li>
									<li><a href="http://localhost/rcs/About.php">About Us</a></li>
								</ul>	
					</li>
				</ul>
<?php
 require 'login.php';
?>

			</div><!-- END OF <div class="collapse navbar-collapse "> -->
		</div><!--END OF <div class="container"> -->
	</div><!-- END OF <div class="navbar navbar-default navbar-fixed-top" > -->
<br>
<br>
<br><div class="container">

<?php include 'user.php'; ?>




     <footer>
<div class="jumbotron">
        <p>&copy; Royal Cablevision Company 2014</p><br>
        <table class="table">
      <thead>
        <tr>
          <th><a href="http://localhost/rcs/index.php" >Home</a></th>
<th><a href="http://localhost/rcs/services.php">Services & Promos</a></th>
<th><a href="http://localhost/rcs/prices.php">Prices & Packages</a></th>
<th><a href="http://localhost/rcs/coverage.php">Coverages & Bayad Centers</a></th>
<th><a href="http://localhost/rcs/contactUs.php">Contact</a></th>
<th><a href="http://localhost/rcs/About.php">About Us</a></th>
        </tr>
      </thead>
     
    </table>
    </div>
      </footer>
</div>    



</body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="js/bootstrap.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
			<script src="js/bootstrap.js"></script>

</html>