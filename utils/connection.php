<?php

# Constants ----------------------------------
define('MYSQLI_HOST', 'localhost');
define('MYSQLI_USER', 'root');
define('MYSQLI_PASSWORD', '');
define('MYSQLI_DATABASE', 'db_eshop');

# Functions ----------------------------------
function openConnection() {
	$conn = new mysqli(MYSQLI_HOST, MYSQLI_USER, MYSQLI_PASSWORD, MYSQLI_DATABASE);
	return $conn;
}

function closeConnection($conn) {
	$conn->close();
}