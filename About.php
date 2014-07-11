<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>RC * About Us </title>

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
?>    
      </div>
    </div>
  </div>

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12">
                 <div class="jumbotron"> 
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <h2 id="tabs-examples">About Us</h2>
          <p>
            Add quick, dynamic tab functionality to transition through panes of local content, even via dropdown menus.
          </p>

     </div> <!--END OF jumbotron--> 
<!--============================
    START THE FEATURETTES 
==============================-->
          <div class="jumbotron">      
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Who are We?! <span class="text-muted">Your Honest Cable Company of course :) </span></h2>
          <p class="lead">Royal Cablevision Corporation (also known as Royal Cable) was established to provide cable television service in the cities of Sta. Rosa, Calamba, and the town of Cabuyao in the Province of Laguna.</p>
        </div> 
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/LogoIni.png"  alt="Generic placeholder image">
        </div>
      </div>
     </div> <!--END OF jumbotron--> 
      <hr class="featurette-divider">
          <div class="jumbotron">       
        <div class="row featurette">
          <div class="col-md-7">
              <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
              <p class="lead">Two years later, with the initial concept of making the television set as the cheapest means of family home entertainment, Royal Cable, started to provide crystal clear signal reception to the population and offered a clear access to domestic and international programs.</p>
          </div>
          <div class="col-md-5">
              <img class="featurette-image img-responsive" src="img/400x400.fw.png"  alt="Generic placeholder image">
          </div>
      </div>
     
      <hr class="featurette-divider">
     </div> <!--END OF jumbotron--> 
        
         <div class="jumbotron">
        <div class="row featurette">
          <div class="col-md-7">
              <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
              <p class="lead">Royal Cable has launched the Cable Internet service in Sta. Rosa City and continuously expanding it's Cable Broadband system aimed to serve the areas of Binan City, cabuyao and Calamba City in the near future. With the activation of its signal return mode, an essential tool used in cable broadband, Royal Cable took advantage in using the same technology in able to perform on the spot video/audio live broadcast in many selected areas.</p>
          </div>
          <div class="col-md-5">
              <img class="featurette-image img-responsive" src="img/400x400.fw.png"  alt="Generic placeholder image">
          </div>
      
      </div>

     </div> <!--END OF jumbotron--> 

      <hr class="featurette-divider">


      <hr>

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
      </footer>
</div>
</div>
</div>
    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="offcanvas.js"></script>
  </body>

</html>
