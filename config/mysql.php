<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
$tables['news'] = "news";
$tables['comments'] = "comments";

$conn = mysqli_connect("localhost", "sae", "sae", "sae");
if (mysqli_connect_error()) {
	exit(mysqli_connect_error());
}
?>
