<?php

include 'connectionerror.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$cpwd = $_POST['cpwd'];
$email = $_POST['email'];
$address = $_POST['address'];
$pnum = $_POST['pnum'];




    if(empty($_POST['uid'])){

	     header("Location:../assignment HTML/register1.php?error=username");
		
		exit();
	}
	
	//Validate the password 
	if (empty($_POST['pwd'])){
		 header("Location:../assignment HTML/register1.php?error=pwd");
	
		exit();
	}
	
	
	//Check the two passwords for equality:
	if ($_POST['pwd'] != $_POST['cpwd']) {
		  header("Location:../assignment HTML/register1.php?error=cpwd");
		print '<p class="error"> Your confirmed password does not match the original password. </p>';
		exit();
	}
	
    if(empty($_POST['email'])){
		  header("Location:../assignment HTML/register1.php?error=email");
		
		exit();
	}
	

	 if(empty($_POST['address'])){
		  header("Location:../assignment HTML/register1.php?error=address");
		echo '<p class="error">Please enter your address.</p>'; 
		exit();
	}
	
	 if(empty($_POST['pnum'])){
		  header("Location:../assignment HTML/register1.php?error=pnum");
		echo '<p class="error">Please enter your phone number.</p>'; 
		exit();
	}
	
	else {
		$sql= "SELECT uid FROM users WHERE uid='$uid'";
		$result = mysqli_query($conn, $sql);
		$uidcheck = mysqli_num_rows($result);
		if($uidcheck > 0) {
			 header("Location:../assignment HTML/register1.php?error=username");
			print '<p class="error">Username Existed!.</p>';
			exit();
		} 
		//If there were no errors, print a success message: 
		else {
			$sql = "INSERT INTO users (uid,pwd,cpwd,email,address,pnum)
			VALUES ('$uid','$pwd','$cpwd','$email','$address','$pnum')";
			$result = mysqli_query($conn, $sql);
			
			print '<p>You have been successfully registered.</p>';
			header("Location: signin.php");
		}
	}	
	
?>