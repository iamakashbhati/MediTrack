<?php
	include_once 'dbh.inc.php';

	$first=$_POST['first'];
	$last=$_POST['last'];
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	$feedback=$_POST['feedback'];

	$sql = "INSERT INTO users1 (user_first, user_last, user_email, user_pwd, user_feedback)
	VALUES ('$first', '$last', '$email', '$pwd', '$feedback');";
	mysqli_query($conn, $sql);
	
	header("Location: ../index.php?signup=success");