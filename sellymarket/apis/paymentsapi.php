<?php
//Main shit
require("../panel/db.php");
$ip = $_SERVER['REMOTE_ADDR'];

//start a session idk
session_start();

//define gay stuff fuck you
/*
$email = $_SESSION['email'];
$id = (int)$_POST['id'];
*/

//Gucci Shit
/*
$prices = $mysqli->query("SELECT `price` FROM `items` WHERE id=$id");
$idk = $prices->fetch_array();
$price = $idk['price'];
*/

//Gay shit
$price = $_GET['price'];

//user and shit idk kys
$result = $mysqli->query("SELECT `cash` FROM `users` WHERE email='$email' LIMIT 1");
$row = $result->fetch_array();
$cash = $row['cash'];
$funds = $cash - $price;


if ($gayshit = $mysqli->query("UPDATE users SET cash='$funds' WHERE email='$email'")) {
	echo "funds taken: ";
}

echo $price;