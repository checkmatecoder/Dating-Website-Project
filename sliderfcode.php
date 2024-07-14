<?php
$conn=mysqli_connect("localhost","root","","shopping");
$image=$_FILES['file']['name'];
$tmpname=$_FILES['file']['tmp_name'];

$image2=$_FILES['file2']['name'];
$tmpname2=$_FILES['file2']['tmp_name'];

$image3=$_FILES['file3']['name'];
$tmpname3=$_FILES['file3']['tmp_name'];

$image4=$_FILES['file4']['name'];
$tmpname4=$_FILES['file4']['tmp_name'];


$loc="image/";

$ins="insert into slidertbl(image,img2,img3,img4) values('$image','$image2','$image3','$image4')";
$a=mysqli_query($conn,$ins);
if($a)
{
	move_uploaded_file($tmpname,$loc.$image);
	move_uploaded_file($tmpname2,$loc.$image2);
	move_uploaded_file($tmpname3,$loc.$image3);
	move_uploaded_file($tmpname4,$loc.$image4);
	echo "<script>window.location.href='sliderform.php';alert('Image Inserted')</script>";
}
else
{
	echo "<script>window.location.href='sliderform.php';alert('Image Inserted')</script>";
}

?>