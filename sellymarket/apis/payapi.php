<?php
//Main shit
require("../panel/db.php");
include "ipcheck.php";
error_reporting(0);

//start a session idk
session_start();

//define gay stuff fuck you
$email = $_SESSION['email'];
$ammount = (int)$_POST['amount'];

//Gucci Shit
$result = $mysqli->query("SELECT `cash` FROM `users` WHERE email='$email' LIMIT 1");
$row = $result->fetch_array();
$cash = $row['cash'];
$funds = $cash + $ammount;


if ($result = $mysqli->query("UPDATE users SET cash='$funds' WHERE email='$email'")) {
    $row = $result->fetch_array();
	echo "funds added";
}
