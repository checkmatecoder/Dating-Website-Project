<?php
$conn=mysqli_connect("localhost","root","","shopping");
$email=$_POST['email'];
$password=$_POST['password'];

$sel="select * from adminlogin where email='$email' or password='$password'";
$a=mysqli_query($conn,$sel);
$b=mysqli_fetch_array($a,MYSQLI_BOTH);
if($b)
{
	echo "<script>window.location.href='dashboard.php';
	alert('Admin LogIn Success')</script>";

}
else
{
	echo "<script>alert('Login Failed');window.location.href='login.php';</script>";

}



?>














<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">




</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<form action="AdminLogIn.php" method="post" >
<h2>AdminLogIn-Form</h2>
<hr/>
<div class="form-group">
<label>Email</label>
<input type="text" class="form-control" name="email" />
</div>

<div class="form-group">
<label>Password</label>
<input type="password" class="form-control" name="password"/>
</div>

<div class="form-group">
<button class="btn btn-primary" type="submit">LogIn</button>
</div>

</div>
<div class="col-sm-4"></div>
</div>
</div>

</body>
</html>