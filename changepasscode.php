<?php
$con=mysqli_connect("localhost","root","","shopping");
$npass=$_POST['npass'];
$cpass=$_POST['cpass'];
if($npass==$cpass)
{
$cmd="update logintbl set password='$npass' ";
$a=mysqli_query($con,$cmd);
if($a==true)
{
   echo "<script>alert('password change sucessfully');window.location.href='login.php';</script>";
}
else
{
	 echo "<script>alert('password not change');</script>";
      
}
}
else
{
	echo "<script>alert('Password is not matched');window.location.href='changepassform.php'</script>";
}

?>