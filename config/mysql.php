<?php
error_reporting(-1);
$tables['news'] = "news";
$tables['comments'] = "comments";

$conn = mysqli_connect("localhost", "sae", "sae", "sae");
if (mysqli_connect_error()) {
	exit(mysqli_connect_error());
}
?>
