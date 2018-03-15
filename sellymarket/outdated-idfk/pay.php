<!DOCTYPE html>

<?php
//include shit from includes folder
include "includes/define.php";

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
	<form action="apis/payapi.php" method="post">
	<div class="card" style="width: 18rem;">
	  <img class="card-img-top" src="https://secure.i.telegraph.co.uk/multimedia/archive/02389/cash_2389248b.jpg" alt="Card image cap">
	  <div class="card-body">
	  
	  <div class="form-group">
		<label for="exampleInputEmail1">Amount</label>
		<input name="amount" type="number" class="form-control" placeholder="100">
		<small id="emailHelp" class="form-text text-muted">Simple deposit system.</small>
	  </div>
	  
	  <button type="submit" class="btn btn-primary">Deposit</button>
	  </div>
	</div>
	</form>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  </body>

</html>
