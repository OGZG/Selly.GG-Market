<?php

//DeFIENEI IP IDMNFGFGdf FUCK THIS SHIT
$ip = $_SERVER['REMOTE_ADDR'];

if ($ip != "::1") {
	die("IP NOT IN DB, ACCESS HAS BEEN LOGGED!");
	exit();
}
