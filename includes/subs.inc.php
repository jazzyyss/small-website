<?php

if(isset($_POST['submit-sub'])){
	require 'dbh.inc.php';
	$email=$_POST['email'];

	$sql="select * from subs where Email=?;";

	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . $location);
		exit();
	}
	else{
		mysqli_stmt_bind_param($stmt,"s",$email);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$result=mysqli_stmt_num_rows($stmt);
		if($result>0){
			header("Location: ../index.php?error=alreadysubscribed");
			exit();
		}
		else{
			$sql="insert into subs(email) values(?);";
			$stmt=mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location: ../index.php?error=sqlerror");
				exit();
			}
			else{
				mysqli_stmt_bind_param($stmt,"s",$email);
				mysqli_stmt_execute($stmt);

				header("Location: ../index.php?success=subscribed");
				exit();

			}
		}
	}
	mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
	header("Location: ../index.php");
	exit();
}