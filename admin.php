<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<style>
.inp{
    height:40px;
    width:40px;
   // border-radius:50%;
    
}
.sidebar-link:hover {
    background-color: black;
    border-radius: 5px;
}
.sidebar-link {
    transition: all 0.5s;
}
.sidebar-link:hover{
    background:#555;
    border-radius:5px;
}
.current{
    background:#f44366;
    border-radius:5px;
}
.current:hover
{
    background: #f66436;
    border-radius:5px;
}


</style>



</head>
<body>
<div class="container-fluid">

<!--top nav start -->
<!--top header start-->
<div class="row bg-dark">
<div class="col-sm-4 my-3">
<h3 class="text-white text-center">Admin DashBoard</h3>
</div>
<h2>Welcome!, Vivek Kumar Gupta</h2>

<div class="col-sm-4 my-3">
<input type="text" style="width:300px;height:37px;"/>
<button type="submit" class="btn btn-danger inp"><i class="fa fa-search fa-lg text-white"></i></button>
</div>

<div class="col-sm-4 my-3 ">
<div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle float-right" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Settings<i class="fa fa-cogs text-white"></i>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Profile</a>
    <a class="dropdown-item" href="#">Change Password</a>
    <a class="dropdown-item" href="#">LogOut</a>
  </div>
</div>
</div>

</div>
</div>
</div>
<!--top header end-->


<!--top nav end -->



<div class="row">


<!--side menu satrt -->
<!--Side MEnu Start-->
<div class="col-sm-3 bg-secondary text-center-justify" style="height:150vh;">
<ul class="navbar-nav flex-column my-4" style="padding-left:20px;">
<li class="nav-item"><a href="#" class="nav-link current  sidebar-link p-3 mb-3 text-white"><i class="fa fa-dashboard fa-lg mr-3"></i>Dashboard</a></li>
<li class="nav-item"><a href="productf.php" class="nav-link sidebar-link p-3 mb-3 text-white"><i class="fa fa-dashboard fa-lg mr-3"></i>Manage Category</a></li>
<li class="nav-item"><a href="#" class="nav-link sidebar-link p-3 mb-3 text-white"><i class="fa fa-dashboard fa-lg mr-2 "></i>Manage SubCategory</a></li>
<li class="nav-item"><a href="#" class="nav-link sidebar-link p-3 mb-3 text-white"><i class="fa fa-dashboard fa-lg mr-3"></i>Manage Brands</a></li>
<li class="nav-item"><a href="manageproduct.php" class="nav-link sidebar-link p-3 mb-3 text-white"><i class="fa fa-dashboard fa-lg mr-3"></i>Manage Products</a></li>
<li class="nav-item"><a href="#" class="nav-link sidebar-link p-3 mb-3 text-white"><i class="fa fa-dashboard fa-lg mr-3"></i>Manage Orders</a></li>
<li class="nav-item"><a href="#" class="nav-link sidebar-link p-3 mb-3 text-white"><i class="fa fa-dashboard fa-lg mr-3"></i>Manage Users</a></li>
<li class="nav-item"><a href="#" class="nav-link sidebar-link p-3 mb-3 text-white"><i class="fa fa-dashboard fa-lg mr-3"></i>Manage Contact</a></li>
<li class="nav-item"><a href="sliderform.php" class="nav-link sidebar-link p-3 mb-3 text-white"><i class="fa fa-dashboard fa-lg mr-3"></i>Manage Slider</a></li>


</ul>
</div>
<!--Side MEnu End-->


<!--side menu end -->


<!--Page Content -->

<div class="col-sm-9">




</div>


<!--End of Pge content-->

</div>





</body>

</html>