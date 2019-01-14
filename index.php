<?php
include_once("controller/Control.php");

if (isset($_GET['action'])) {
	$actionURL = $_GET['action'];
} else {
	$actionURL = 'index';
}

$control = new Control();
$action = strtolower($actionURL);
$control->$action();

?>