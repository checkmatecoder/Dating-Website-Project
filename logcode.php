<?php
/*
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
	window.location.href='dashboard.php';
	</script>";
}	
else
{
	echo "<script>alert('Password Not Matche With Our Database')
	window.location.href='login.php';
	</script>";
}
}
else
{
	echo "<script>alert('Email Or Number Not Matche With Our Database')
	window.location.href='login.php';
	</script>";
	
}	
*/
/*
	$uid=$_POST['email'];
$passwd=$_POST['password'];
session_start();
$con=mysqli_connect("localhost","root","","shopping");

    $cmd="select * from logintbl where email='$uid' and password='$passwd'";
    $x=mysqli_query($con,$cmd);
    if(mysqli_num_rows($x)>0)
    {
    	$SESSION["aid"]=$uid;
       echo "<script>alert('Welcome to admin Zone');window.location.href='dashboard.php';</script>";
    }
    else
    {
    	echo "<script>alert('Login Failed');window.location.href='login.php';</script>";

    }


*/


?>