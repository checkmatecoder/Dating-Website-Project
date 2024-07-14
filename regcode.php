<?php
$conn=mysqli_connect("localhost","root","","Shopping");

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];

$sel="select * from registration where mobile='$mobile' or email='$email'";
$x=mysqli_query($conn,$sel);
if(mysqli_fetch_array($x,MYSQLI_BOTH))
{
	echo "<script>alert('Email or Mobile Number is alredy Exit')
	window.location.href='registration.php';
	</script>";
}
else
{
$ins="insert into registration(name,mobile,email,password) values('$name','$mobile','$email','$password')";
$a=mysqli_query($conn,$ins);
if($a)
{
  echo "<script>alert('Registration Successfully')
  	window.location.href='registration.php';
  </script>";	
}
else
{
	echo "<script>alert('Registration Successfully')</script>";	

}
}
?>