<?php

if(isset($_POST['quote-submit'])){
	require 'dbh.inc.php';

	$name=$_POST['quote-name'];
	$email=$_POST['quote-email'];
	$message=$_POST['quote-message'];

	$sql="insert into quote(name,email,message) values(?,?,?);";
	$stmt=mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location: ../services.php?error=sqlerror");
		exit();
	}
	else{
		mysqli_stmt_bind_param($stmt,"sss",$name,$email,$message);
		mysqli_stmt_execute($stmt);

		header("Location: ../services.php?success=quote");
		exit();
	}

	mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
	header("Location: ../index.php");
	exit();
}