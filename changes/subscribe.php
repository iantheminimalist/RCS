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
    <p>
    <h2>Royal Cable Plan Offerings</h2>
     <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Standalone Prices
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
                <?php
          print("$outputSTA ");
          ?>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          Jade Package 
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
          <?php
          print("$outputJAS");
          print("$outputJAI");
          print("$outputJAW");
          ?>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Diamond Package
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
                  <?php
          print("$outputDIS");
          print("$outputDII");
          print("$outputDIW");
          ?>
         </div>
    </div>
  </div>
</div>
    </p>
  </div>

  <div class="col-xs-4">  
<?php include 'dropInfo.php';
 ?>
<p>
    <h3>Subscription Form</h3>
   <form role="form" action="CustomerAdd.php" method="POST">

 <div class="form-group">
    <label >FirstName</label>
    <input type="text" name="first" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name"required >
  </div>
  <div class="form-group">
    <label>LastName</label>
    <input type="text" name="last" class="form-control" id="exampleInputEmail1" placeholder="Enter email"required >
  </div>
  <div class="form-group">
    <label >Enterance Number (insert only numbers)<br /></label>
    <input type="password" name="cus" class="form-control" id="cus" placeholder="Enter email" required>
  </div>
    <div class="form-group">
    <label >Street</label>
    <input type="text" name="street" class="form-control" id="exampleInputEmail1" placeholder="Enter email"required >
  </div>
    <div class="form-group">
    <label >Area</label>
    <input type="text" name="area" class="form-control" id="exampleInputEmail1" placeholder="Enter email"required >
  </div>
    <div class="form-group">
    <label >City</label>
    <input type="text" name="city" class="form-control" id="exampleInputEmail1" placeholder="Enter email"required >
  </div>
  <div class="form-group">
    <label>Region</label>
    <input type="text" name="Region" class="form-control" id="exampleInputEmail1" placeholder="Enter email"required >
  </div>
    <div class="form-group">
    <label >Phone Number</label>
    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter email"required >
  </div>
    <div class="form-group">
    <label >Cellphone Number</label>
    <input type="text" name="cell" class="form-control" id="exampleInputEmail1" placeholder="Enter email"required >
  </div>
    <div class="form-group">
    <label >Plan</label>
    <select class="form-control" name="plan" required>
<?php

  print("$outputDrop");
?>
    </select> 
    </div>
	<input class="btn btn-default" type="submit" href="#contact" data-toggle="modal" value="Submit"/>
       <div class="modal fade" id = "contact" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header"> 
				<p>
				<h4 >Contact Site</h4>
				</p>
				</div>
                
				<div class ="modal-body">
				<p> I am rabbling about nothing. I see nothing. There is nothing to talk about. This is the body that does not exist. Do not say anything exclusive. Do not even goe here. I am not even sure shy i am trying this out. There everything in the world, and there is nothing in this world. THere is only light and darkness. HAHAHAHa. I laugh in the face of danger.
                </p>
                    </div>
                <div class ="modal-footer">
                    <button class="btn btn-primary" type="submit" value="show" >Submit</button>
                    <button class="btn btn-danger" type="submit"  data-dismiss="modal" >Submit</button>
                    
                </div>
			</div>
		</div>
	</div>

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
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="offcanvas.js"></script>
  </body>

</html>
