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
<div class="col-sm-1"></div>
<div class="col-sm-10 shadow mt-3">
<form action="prodcode.php" method="post" enctype="multipart/form-data">
<h2 class="text-center mt-3">Product Card Form</h2>
<hr/>

<div class="form-group">
<label>Image</label>
<input type="file" class="form-control" name="file" />
</div>

<div class="form-group">
<label>Category</label>
<input type="text" class="form-control" name="category" />
</div>

<div class="form-group">
<label>Price</label>
<input type="number" class="form-control" name="price" />
</div>

<div class="form-group">
<button class="btn btn-danger" type="submit">ADD</button>
</div>

</form>

</div>
<div class="col-sm-1"></div>
</div>
</div>



</body>
</html>