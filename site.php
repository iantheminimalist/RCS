
<?php

/*************************************************/
$contQuery1 = mysql_query("
	SELECT details, Description
	FROM siteedit
	WHERE Site_ID = 'site-01' ");
 
$cont1 = mysql_fetch_array($contQuery1);


$content1 .= '<h1 class="featurette-heading">'.$cont1['details']. '</h1>
          <p class="lead">

          <h2></p>' .$cont1['Description']. '<p></h2>
          <a class="btn btn-lg btn-success" href="http://localhost/rcs/subscribe.php">Sign up today</a></p>';

/*************************************************/

$contQuery2 = mysql_query("
	SELECT details, Description
	FROM siteedit
	WHERE Site_ID = 'site-02' ");
 
$cont2 = mysql_fetch_array($contQuery2);


$content2 .= '<h1 class="featurette-heading">'.$cont2['details']. '</h1>
          <p class="lead">

          <h2></p>' .$cont2['Description']. '<p></h2>
          <a class="btn btn-lg btn-success" href="http://localhost/rcs/subscribe.php">Sign up today</a></p>';

/*************************************************/        
$contQuery3 = mysql_query("
	SELECT details, Description
	FROM siteedit
	WHERE Site_ID = 'site-03' ");
 
$cont3 = mysql_fetch_array($contQuery3);


$content3 .= '<h1 class="featurette-heading">'.$cont3['details']. '</h1>
          <p class="lead">

          <h2></p>' .$cont3['Description']. '<p></h2>
          <a class="btn btn-lg btn-success" href="http://localhost/rcs/subscribe.php">Sign up today</a></p>';
        

?>
