<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>
<body>
<?php include('Header.php')?>
<div class="container-fluid">
<div class="row text-center">
<?php
$conn=mysqli_connect("localhost","root","","shopping");
$sel="select * from addproduct";
$a=mysqli_query($conn,$sel);
while($b=mysqli_fetch_array($a,MYSQLI_BOTH))
{


?>
<div class="col-sm-2 my-5"> 
<div class="card border shadow card-hover">
<img class="img-fluid" src="image/<?php echo $b['file'];?>" class="card-img-top" style="height:220px;width:100%;border-bottom:1px solid grey"; />
<div class="card-body text-center">
<h6 class="card-title text-danger" style="font-weight:bold;"><?php echo $b['category'];?></h4>
<h6>$<?php echo $b['price'];?> <span class="text-secondary"><s>$1900</s></span></h6>
<a href="aboutproduct.php" class="btn btn-primary" style="font-size:13px;">Deals Of The Day </a>
</div>
</div>
</div>
<?php
}
?>
</div>
</div>
<?php include('footer.php')?>
</body>
</html>