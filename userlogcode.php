<?php

$conn=mysqli_connect("localhost","root","","Shopping");
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];

$sel="select * from registration where email='$email' || mobile='$mobile' ";
if($a=mysqli_query($conn,$sel))
{
$sel="select * from registration where password='$password' ";
if($a=mysqli_query($conn,$sel))
{
	session_start();
	$_SESSION['user']=$email;
	echo "<script>alert('LogIn Succcess')
	window.location.href='card.php';
	</script>";
}	
else
{
	echo "<script>alert('Password Not Matche With Our Database')
	window.location.href='userlogin.php';
	</script>";
}
}
else
{
	echo "<script>alert('Email Or Number Not Matche With Our Database')
	window.location.href='userlogin.php';
	</script>";
	
}	


	



?>