<?php
//Main shit
require("../panel/db.php");
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];

//start a session idk
session_start();

//define gay stuff fuck you
$name = $_POST['name'];
$desc = $_POST['desc'];
$price = (int)$_POST['price'];
$sellyid = $_POST['sellyid'];
$seller = $_POST['seller'];
$ip = $_POST['IP'];

if ($result = $mysqli->query("INSERT INTO `items` (`name`, `desc`, `price`, `sellyid`, `seller`, `IP`) VALUES ('$name', '$desc', '$price', '$sellyid', '$seller', '$ip')")) {
	echo "shit added lol";
}
