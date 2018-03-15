<?php
//Main shit
require("panel/db.php");
error_reporting(0);

//start a session idk
session_start();

//define gay stuff fuck you
$email = $_SESSION['email'];
$username = $_SESSION['username'];

//run quries idk odkahdsa kms
$result = $mysqli->query("SELECT `cash` FROM `users` WHERE email='$email' LIMIT 1");
$row = $result->fetch_array();
$cash = $row['cash'];

?>
 
 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><?php echo "<b>$sitename</b>"; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="items.php">Items</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add.php">Enlist</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
<script type="text/javascript" charset="utf-8">
$().ready(function (){
  var token = '';
  var pinger = setInterval(function (){
    
    $.ajax({
      cache: false,
      data: {
        token: token,
      },
      timeout: 2500,
      type: 'GET',
      url: '../apis/pinger.php',
      dataType: 'json',
      success: function (data, status, jqXHR){
        $('#userCount').text(data.userCount);
        token = data.token;
      }
    });
    
  }, 5000);
});
</script>