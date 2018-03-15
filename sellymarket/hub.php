<!DOCTYPE html>

<?php
//include shit from includes folder
include "includes/define.php";

session_start();

if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: panel/error.php");    
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
	<br>
	<br>
		<form>
		  <div class="form-group">
			<label for="exampleFormControlInput1">Internet Protocol</label>
			<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="1.3.3.7">
		  </div>
		  <div class="form-group">
			<label for="exampleFormControlInput1">Port</label>
			<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="80">
		  </div>
		  <div class="form-group">
			<label for="exampleFormControlInput1">Time</label>
			<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="80">
		  </div>
		  <div class="form-group">
			<label for="exampleFormControlSelect2">Method</label>
			<select multiple class="form-control" id="exampleFormControlSelect2">
			  <option>1</option>
			  <option>2</option>
			  <option>3</option>
			  <option>4</option>
			  <option>5</option>
			</select>
		  </div>
		  <div class="form-group">
			<label for="exampleFormControlTextarea1">Any Reason?</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		  </div>
		  <button type="submit" class="btn btn-primary mb-2">Send Attack</button>
		</form>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
