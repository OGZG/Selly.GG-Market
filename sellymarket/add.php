<!DOCTYPE html>

<?php
//include shit from includes folder
include "includes/define.php";
$ip = $_SERVER['REMOTE_ADDR'];

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
	<form action="apis/post.php" method="post">
	<div class="card-deck">
	<div class="card" style="width: 18rem;">
	  <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Urban_Trekking_Staple_Carry_Items.jpg/800px-Urban_Trekking_Staple_Carry_Items.jpg" alt="Card image cap">
	  <div class="card-body">
	  
	  <div class="form-group">
		<label>Name</label>
		<input name="name" type="text" class="form-control" placeholder="Item Name" max="20" required><br>
		<label>Description</label>
		<input name="desc" type="text" class="form-control" placeholder="Item Description" max="200" required><br>
		<label>Price</label>
		<input name="price" type="number" class="form-control" placeholder="Item Price" max="9999999" required><br>
		<label>Selly.gg ID</label>
		<input name="sellyid" type="text" class="form-control" placeholder="Item Selly ID" min="8" max="8" required><br>
		<label>Seller</label>
		<input name="seller" type="text" class="form-control" placeholder="Your Name" max="16" required><br>
		<label>Internet Protocol</label>
		<input name="IP" type="text" class="form-control" value="<?php echo $ip; ?>" readonly><br>
	  </div>
	  
	  <button type="submit" class="btn btn-primary">Post</button>
	  </div>
	</div>
	</form><br><br>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  </body>

</html>
