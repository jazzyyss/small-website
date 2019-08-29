<?php

if(isset($_POST['register-button']))
{
include 'dbh.inc.php';
error_reporting(0);
	$uname = $_POST['username'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pwd = $_POST['pass'];
	$rpwd = $_POST['repass'];
	$city = $_POST['city'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$courses = implode(',',$_POST['lang']);

	if(empty($uname) || empty($name) || empty($email) || empty($pwd) || empty($rpwd) || empty($city) || empty($age) || empty($gender) || empty($courses)){
		header("Location: ../register.php?error=emptyfields&name=".$name."&email=".$email."&city=".$city."&age=".$age);
		exit();
	}
	elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-z\d_]{2,20}$/", $uname)){
		header("Location: ../register.php?error=invaliduname&email");
    	exit();
	}
	elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		header("Location: ../register.php?error=invalidemail&username=".$uname."&name=".$name."&city=".$city."&age=".$age);
		exit();
	}
	elseif(!preg_match("/^[a-z\d_]{2,20}$/", $username)){
		header("Location: ../register.php?error=invalidusername&name=".$name."&email=".$email."&city=".$city."&age=".$age);
		exit();
	}
	elseif($pwd!=$rpwd){
		header("Location: ../register.php?error=passwordcheck&username=".$uname."&name=".$name."&email=".$email."&city=".$city."&age=".$age);
		exit();
	}
	else{
		$sql1 = "select * from users where uname=?";
		$sql2 = "select * from users where email=?";

		$stmt1 = mysqli_stmt_init($conn);
		

		if(!mysqli_stmt_prepare($stmt1,$sql1)){
			header("Location: ../register.php?error=sqlerror&msg=".urlencode(mysqli_error($conn)));
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt1,"s",$uname);

			mysqli_stmt_execute($stmt1);

			mysqli_stmt_store_result($stmt1);

			$resultcheck1=mysqli_stmt_num_rows($stmt1);

			if($resultcheck1>0){
				header("Location: ../register.php?error=usernametaken");
				exit();
			}
			else{
				$stmt2=mysqli_stmt_init($conn);
				
				if(!mysqli_stmt_prepare($stmt2,$sql2)){
					header("Location: ../register.php?error=sqlerror&msg=".urlencode(mysqli_error($conn)));
					exit();
				}
				else{
					mysqli_stmt_bind_param($stmt2,"s",$email);

					mysqli_stmt_execute($stmt2);

					mysqli_stmt_store_result($stmt2);

					$resultcheck2=mysqli_stmt_num_rows($stmt2);
					
					if($resultcheck2>0){
						header("Location: ../register.php?error=registeredemail");
						exit();
					}
					else{				
						$sql="insert into users values(?,?,?,?,?,?,?,?)";
						$stmt=mysqli_stmt_init($conn);
						if(!mysqli_stmt_prepare($stmt,$sql)){
							header("Location: ../register.php?error=sqlerror&msg=".urlencode(mysqli_error($conn)));
							exit();
						}
						else{
							$hpass = password_hash($pwd, PASSWORD_DEFAULT);
							mysqli_stmt_bind_param($stmt,"ssssssss",$uname,$name,$email,$hpass,$city,$age,$gender,$courses);
							mysqli_stmt_execute($stmt);

							session_start();
							$_SESSION['uid']=$uname;

							header("Location: ../index.php");
							exit();
						}
				}	}
			}
		}
	}
    mysqli_close($conn);
}
else
{
	header("Location: ../index.php");
	exit();
}
?>
