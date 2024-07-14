<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<form action="manageprocode.php" method="post" enctype="multipart/form-data">
				<h2>Manage-Product</h2>
				<hr/>

				<div class="form-group">
					<label>Image1</label>
					<input type="file" name="file1" class="form-control">
				</div>

				<div class="form-group">
					<label>Image2</label>
					<input type="file" name="file2" class="form-control">
				</div>

				<div class="form-group">
					<label>Image3</label>
					<input type="file" name="file3" class="form-control">
				</div>

				<div class="form-group">
					<label>Image4</label>
					<input type="file" name="file4" class="form-control">
				</div>

				<div class="form-group">
					<label>Image5</label>
					<input type="file" name="file5" class="form-control">
				</div>

				<div class="form-group">
					<label>Image6</label>
					<input type="file" name="file6" class="form-control">
				</div>

				<div class="form-group">
					<label>Category</label>
					<input type="text" name="category" class="form-control">
				</div>

				<div class="form-group">
					<label>Review</label>
					<input type="text" name="review" class="form-control">
				</div>

				<div class="form-group">
					<label>Discription</label>
					<input type="text" name="discription" class="form-control">
				</div>

				<div class="form-group">
					<label>Price</label>
					<input type="number" name="price" class="form-control">
				</div>

				<div class="form-group">
					<label>Satisfied</label>
					<input type="text" name="satisfied" class="form-control">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-danger">Upload</button>
				</div>

			</form>



			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>

</body>
</html>