<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>RC * Control Panel </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/offcanvas.css" rel="stylesheet">


  </head>
<!--============================
  Navigation Bar information
==============================-->
  <body>
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
          <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">For More<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li ><a href="http://localhost/rcs/contactUs.php">Contact</a></li>
                  <li class="active"><a href="http://localhost/rcs/About.php">About Us</a></li>
                </ul> 
          </li>
        </ul>
<?php
 require 'login.php';
 include 'PriceLocate.php';
?>    
      </div>
    </div>
  </div>


<br /><br />


<div class="container">
      <div class="jumbotron"> 
        <div class="row">
  <div class="col-xs-8">
<div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#Calamba" data-toggle="tab">Standalone</a></li>
              <li><a href="#Cabuyao" data-toggle="tab">Jade Package</a></li>
                <li><a href="#Binan" data-toggle="tab">Diamond Package</a></li>

            </ul><!-- END OF <ul id="myTab" class="nav nav-tabs">-->
    
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="Calamba">
                <p>
                 <?php print("$outputSTA "); ?>
               </p>
              </div>
      
            <div class="tab-pane fade" id="Cabuyao">
                <p> 
                  <?php
                print("$outputJAS");
                print("$outputJAI");
                print("$outputJAW");
              ?>
                </p>
           </div>

            <div class="tab-pane fade" id="Binan">
              <p><?php
          print("$outputDIS");
          print("$outputDII");
          print("$outputDIW");
              ?></p>
            </div>

          </div>

    </div><!-- /example -->
  </div>

  <div class="col-xs-4">  
<?php include 'dropInfo.php'; ?>
<p>
    <h3>Subscription Form</h3>
	<form action="CustomerAdd.php" method="POST">

		<div class="form-group">
			<label >FirstName</label>
			<input type="text" name="first" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name"required >
		</div>
		
		<div class="form-group">
			<label>LastName</label>
			<input type="text" name="last" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name"required >
		</div>
		
		<div class="form-group">
			<label >Enterance Number (insert only numbers)<br /></label>
			<input type="password" name="cus" class="form-control" id="cus" placeholder="" required>
		</div>
		
        <div class="form-group">
			<label >password<br /></label>
			<input type="password" name="cus" class="form-control" id="cus" placeholder="" required>
		</div>
        
		<div class="form-group">
			<label >Street</label>
			<input type="text" name="street" class="form-control" id="exampleInputEmail1" placeholder="Enter Street Name"required >
		</div>
			
		<div class="form-group">
			<label >Area</label>
			<input type="text" name="area" class="form-control" id="exampleInputEmail1" placeholder="Enter Area"required >
		</div>
		
		<div class="form-group">
			<label >City</label>
			<input type="text" name="city" class="form-control" id="exampleInputEmail1" placeholder="Enter City"required >
		</div>
		
		<div class="form-group">
			<label>Region</label>
			<input type="text" name="Region" class="form-control" id="exampleInputEmail1" placeholder="Enter Region" >
		</div>
	
		<div class="form-group">
			<label >Phone Number</label>
			<input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone Number" >
		</div>
    
		<div class="form-group">
			<label >Cellphone Number</label>
			<input type="text" name="cell" class="form-control" id="exampleInputEmail1" placeholder="Enter Cell Number" required >
		</div>
    
		<div class="form-group">
			<label >Plan</label>
			<select class="form-control" name="plan" required>
			
			<?php

				print("$outputDrop");
			?>
			</select>
		</div>
    
	<!-- TRIGGER-->
	<input class="btn btn-lg btn-success" type="submit" href="#contact" data-toggle="modal" value="Sign Up "/>

	<!-- MODAL -->
	<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Confirming Request</h4>
				</div>
                
				<div class ="modal-body">
					<p> 
				    By clicking the Submit button, you have agreed that any information that was submitted will be looked as an official form sent to the company. Please make sure that any information that you are providing is correct.<br /> If so, then please click the Submit button to confirm your request.
					</p>
                </div>
               
				<div class="modal-footer">
				
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Go Back</button>
					<button class="btn btn-success">Submit</button>
				</div>
			   
			</div>
		</div>
	</div>
	
	<!-- END MODAL -->
	
	</form>
	

  </p>
</div>
</div>
        </div> <!--END OF jumbotron--> 
      <hr>

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
    </div><!--/.container-->

    <!-- Bootstrap core JavaScript
    ==================================================
    <script src="js/bootstrap.min.js"/></script>
-->
    <!-- Placed at the end of the document so the pages load faster -->

	<script src="js/jquery.js"/>
	<script src="js/jquery-2.0.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
    <script src="offcanvas.js"></script>
  </body>

</html>
