<?php
session_start();
include 'connectionerror.php';


$uid = $_POST['uid'];
$pwd = $_POST['pwd'];


$sql = "SELECT * FROM users WHERE uid='$uid' AND pwd='$pwd'";
$result = mysqli_query($conn, $sql);

if(!$row = mysqli_fetch_assoc($result)) {
	echo "Your username or password are wrong!";
}
else {
	$_SESSION['id'] = $row['id'];

header("Location:Promotion.php");
}

?>