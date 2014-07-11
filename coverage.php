<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>RC * Coverage </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">

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

          <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Offers<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="http://localhost/rcs/services.php">Services & Promos</a></li>
                  <li><a href="http://localhost/rcs/prices.php">Prices & Packages</a></li>
                  <li class="active"><a href="http://localhost/rcs/coverage.php">Coverages & Bayad Centers</a></li>
                </ul> 
          </li>

          <li class="dropdown ">
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
      </div>
    </div>
  </div>
 
    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          
          <h2 id="tabs-examples">Royal Cablevision Coverage </h2>
          <p>
            See if your Area is ready for Royal Cable Connection
          </p>
          <!--=====================================================================================-->
          <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#Calamba" data-toggle="tab">Calamba</a></li>
              <li><a href="#Cabuyao" data-toggle="tab">Cabuyao</a></li>
              <li><a href="#StaRosa" data-toggle="tab">Sta. Rosa</a></li>
              <li><a href="#Binan" data-toggle="tab">Binan</a></li>

            </ul><!-- END OF <ul id="myTab" class="nav nav-tabs">-->
    
            <div id="myTabContent" class="tab-content">

              <div class="tab-pane fade in active" id="Calamba">
                <p>
                  <h3> Calamba Payment Office </h3>
                  Ragasa Building Parian<br />
                  Calamba City<br />
                  049-545-3395<br />
                 049-545-7407 (Fax)
               </p>
              </div>
      
            <div class="tab-pane fade" id="Cabuyao">
                <p> 
                  <h3> Cabuyao Payment Office </h3>
                   Rizal Blvd (near Sundrell Building)<br />
                   049-531-3632
                </p>
           </div>

            <div class="tab-pane fade" id="Binan">
              <p>
                <h3>Pavilion Mall Payment Office </h3>
                 2nd floor (Near the Activity Center)<br />
                National Hwy, 4024 Biñan City<br />
                0932-848-2547<br /> 
              </p>
            </div>
        
            <div class="tab-pane fade" id="StaRosa">
              <p>
                <h3>Santa Rosa Payment Office</h3>
                Levant Building<br />
                Market Area Santa Rosa, Laguna<br />
                0922-877-3554<br />
              </p>
            </div>
          </div>

    </div><!-- /example -->
<br /> <br />
          <!--=====================================================================================-->
          <h2 id="tabs-examples">Accredited Bayad Centers</h2>
          <p>
            To far from our headquarters? Why not pay your bills at your local Bayad Center.
          </p>
          <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#locoCalamba" data-toggle="tab">Calamba</a></li>
              <li><a href="#locoCabuyao" data-toggle="tab">Cabuyao</a></li>
              
              <li><a href="#locoBinan" data-toggle="tab">Binan</a></li>
            </ul><!-- END OF <ul id="myTab" class="nav nav-tabs">-->
    
            <div id="myTabContent" class="tab-content">
              
              <div class="tab-pane fade in active" id="locoCalamba">
                <p>
                  <h3> Calamba Region </h3>
               Adena 3,, CRC Subd. Pla
               </p>
              </div>
      
            <div class="tab-pane fade" id="locoCabuyao">
                <p> 
                  <h3> Cabuyao Region </h3>
                area *** area ***  area *** area *** area *** area *** area *** area ***<br />
                area *** area ***  area *** area *** area *** area *** area *** area ***<br />
                area *** area ***  area *** area *** area *** area *** area *** area ***<br />
                area *** area ***  area *** area *** area *** area *** area *** area ***<br />
              </p>
           </div>

            <div class="tab-pane fade" id="locoBinan">
              <p>
                <h3>Binan Region </h3>
                area *** area ***  area *** area *** area *** area *** area *** area ***<br />
                area *** area ***  area *** area *** area *** area *** area *** area ***<br />
                area *** area ***  area *** area *** area *** area *** area *** area ***<br />
                area *** area ***  area *** area *** area *** area *** area *** area ***<br />
              </p>
            </div>
        
            <div class="tab-pane fade" id="locoStaRosa">
              <p>
                
              </p>
            </div>

          </div>
        
    </div><!-- /example -->
    </div>
</div>
    <!--=====================================================================================-->
              

          


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
