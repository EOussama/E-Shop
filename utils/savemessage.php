<?php
	require 'connection.php';

	if(isset($_POST['username'])) {
		$conn = openConnection();
		echo "Hey";
		$username = $_POST['username'];
		$subject = $_POST['subject'];
		$body = $_POST['body'];
		
		$conn->query("INSERT INTO `messages`(`username`, `subject`, `message`) VALUES('$username', '$subject', '$body');");
		
		closeConnection($conn);
	}