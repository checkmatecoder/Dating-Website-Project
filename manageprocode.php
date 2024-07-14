<?php
$conn=mysqli_connect("localhost","root","","shopping");
$img1=$_FILES['file1']['name'];
$tmpimg1=$_FILES['file1']['tmp_name'];

$img2=$_FILES['file2']['name'];
$tmpimg2=$_FILES['file2']['tmp_name'];

$img3=$_FILES['file3']['name'];
$tmpimg3=$_FILES['file3']['tmp_name'];

$img4=$_FILES['file4']['name'];
$tmpimg4=$_FILES['file4']['tmp_name'];

$img5=$_FILES['file5']['name'];
$tmpimg5=$_FILES['file5']['tmp_name'];

$img6=$_FILES['file6']['name'];
$tmpimg6=$_FILES['file6']['tmp_name'];

$category=$_POST['category']; 
echo $category;
$review=$_POST['review'];
$discription=$_POST['discription'];
$price=$_POST['price'];
$satisfied=$_POST['satisfied'];
$loc="image /";

$ins="insert into manageproduct(image1,image2,image3,image4,image5,image6,category,review,discription,price,satisfied) values('$img1','$img2','$img3','$img4','$img5','$img6','$category','$review','$discription','$price','$satisfied')";

$a=mysqli_query($conn,$ins);
echo $a; 
if($a)
{
	move_uploaded_file($tmpimg1,$loc.$img1);
	move_uploaded_file($tmpimg2,$loc.$img2);
	move_uploaded_file($tmpimg3,$loc.$img3);
	move_uploaded_file($tmpimg4,$loc.$img4);
	move_uploaded_file($tmpimg5,$loc.$img5);
	move_uploaded_file($tmpimg6,$loc.$img6);

	echo "<script>alert('data inserted')</script>";
}
else
{
	echo "<script>alert('data not inserted')</script>";
}



?>