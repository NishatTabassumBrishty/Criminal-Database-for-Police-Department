<html lang="en">
<head>
 <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> XYZ Interpol </title>
    
      <!-- core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
	  
      <link href="css/font-awesome.min.css" rel="stylesheet"/>
      <link href="css/animate.min.css" rel="stylesheet"/>
      <link href="css/main.css" rel="stylesheet"/> 
	 
  
	<style>
	body{
		background-color: #454572;
		color:white;
	}
	
	
	form{
		color:white;
		
	}
	

	
	</style>
	
</head>
<body> 
    <!-- following section is used for creating the menubar in the webpage -->
	<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;color:#DAF7A6 ;"> XYZ Interpol</div>
	      
			<div class="col-md-10" style="text-align: right"> 
				<a href="index.php"> Home </a> 
				<a href="displayimage.php" style="margin-left: 20px;"> Criminals </a> 
				<a href="search.php" style="margin-left: 20px;"> Search </a> 
			</div>
		</div>
	</section>
	
    <center>
	    <h1> Insert Image of the Criminal into the Database </h1>
	    
		
		<form action="imagein.php" method="POST" enctype="multipart/form-data">
		
	        <label> Enter Image:  </label><br>
		    <input type="file" name="image" id="image" /><br>
			
			<label> Enter Image name:  </label><br>
		    <input type="text" name="imagename" placeholder="Enter image name" /><br>
		   
            <label> Enter Name:  </label><br>
		    <input type="text" name="name" placeholder="Enter name" /><br>
			
			<label> Enter Gender:  </label><br>
		    <input type="text" name="gender" placeholder="Enter gender" /><br>
			
			<label> Enter Age:  </label><br>
		    <input type="text" name="age" placeholder="Enter age" /><br>
			
		    <input type="submit" name="upload" value="Upload Image/Data" /><br>
			
			
        </form>
		
	</center>

	<!----- Footer ----->
	<section  id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>	
<body>
<html>


<?php
/*$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'criminal database for police');

if(isset($_POST['upload']))
{
	$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	$name =$_POST['name'];
	$gender =$_POST['gender'];
	$age =$_POST['age'];
	
	$query = "INSERT INTO `criminal`(`image`,`name`,`gender`,`age`) VALUES ('$file','$name','$gender','$age')";
	$query_run = mysqli_query($connection, $query);
	
	if($query_run)
	{
		echo'<script type="text/javascript"> alert("Image Profile Uploaded") </script>';
	}
	else
	{
		echo'<script type="text/javascript"> alert("Image Profile not Uploaded") </script>';
	}
		
}



?>*/
	