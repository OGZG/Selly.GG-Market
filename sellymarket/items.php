<!DOCTYPE html>

<?php
//include shit from includes folder
include "includes/define.php";
require ("panel/db.php");

/*
INSERT INTO `items` (`id`, `name`, `desc`, `price`) VALUES ('2', '1 cup of sand', '50% unfiltered sand taken directly off the beach.', '25');
*/

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
	<br>
	<br>
    <div class="container">
	<center>
	<div class="row">
	<?php 
	
	$result = $mysqli->query("SELECT `id`,`name`,`desc`,`price`,`sellyid`,`seller` FROM `items`");
	
	while ($row = $result->fetch_array()) {
	$name = $row['name'];
	$desc = $row['desc'];
	$price = $row['price'];
	$id = $row['id'];
	$sellyid = $row['sellyid'];
	$seller = $row['seller'];
		echo "<div class='card' style='width: 18rem;'>
	  <img class='card-img-top' src='https://secure.i.telegraph.co.uk/multimedia/archive/02389/cash_2389248b.jpg' width='286' height='180' alt='Card image cap'>
	  <div class='card-body'>
	  
	  <div class='form-group'>
		<h3>$name - $$price</h3>
		<small class='form-text text-muted'>$seller</small>
		<hr>
		<label>$desc</label>
	  </div>
	  <hr>
	  <button data-selly-product='$sellyid' class='btn btn-primary'>Purchase Item</button>
	  </div>
	</div>";
	}
	?>
	</div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	<!--Selly.gg-->
	<script src="https://embed.selly.gg"></script>


  </body>

</html>
