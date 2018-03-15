<!DOCTYPE html>

<?php
//include shit from includes folder
include "includes/define.php";
require ("panel/db.php");

$result = $mysqli->query("SELECT * FROM `items`");
$itemcount = $result->num_rows;

$counter_name = "counter.txt";

// Read the current value of our counter file
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);
// Has visitor been counted in this session?
// If not, increase counter value by one
if(!isset($_SESSION['hasVisited'])){
  $_SESSION['hasVisited']="yes";
  $counterVal++;
  $f = fopen($counter_name, "w");
  fwrite($f, $counterVal);
  fclose($f); 
}

?>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $sitename; ?> - Index</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }
    </style>

  </head>

  <body>

	<!-- Include ffs, I must be high or some shit... I mean, fuck it gets the nav bar jesus. Leave me alone. -->
	<?php include "includes/navbar.php"; ?>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Welcome to <?php echo $sitename; ?>!</h1><hr>
			<center><div class="card-deck">
			<div class="card border-success mb-3" style="max-width: 18rem;">
			  <div class="card-header bg-transparent border-success">Item Count</div>
			  <div class="card-body text-success">
				<h5 class="card-title"><?php echo $itemcount; ?></h5>
				<p class="card-text">item(s) currently being advertised free of charge.</p>
			  </div>
			</div>
			<div class="card border-success mb-3" style="max-width: 18rem;">
			  <div class="card-header bg-transparent border-success">Visitor Count</div>
			  <div class="card-body text-success">
				<h5 class="card-title"><?php echo $counterVal; ?></h5>
				<p class="card-text">hit(s) on our website.</p>
			  </div>
			</div>
		  
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  </body>

</html>
