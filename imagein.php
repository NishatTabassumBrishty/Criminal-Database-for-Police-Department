<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'criminal database for police');

if(isset($_POST['upload']))
{
	$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	$imagename=$_POST['imagename'];
	$name =$_POST['name'];
	$gender =$_POST['gender'];
	$age =$_POST['age'];
	
	$query = "INSERT INTO `criminal`(`image`,`imagename`,`name`,`gender`,`age`) VALUES ('$file','$imagename','$name','$gender','$age')";
	$query_run = mysqli_query($connection, $query);
	
	if($query_run)
	{
		
		header("Location: index.php");
	}
	else
	{
		echo'<script type="text/javascript"> alert("Image Profile not Uploaded") </script>';
		
	}
		
}



?>