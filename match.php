<html>
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
	h1{
		color: #DECEC8;
		
	}
	body{
	background-color:#454572;
	color: white;
	font-size:25px;
	}
	
	table{
		background: #C8C8DE;
	}
	
	</style>
</head>
<body>
<!-- following section is used for creating the menubar in the webpage -->
	<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;color:#DAF7A6 ;"> XYZ Interpol </div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="index.php"> Home </a> 
				<a href="displayimage.php" style="margin-left: 20px;"> Criminals </a> 
				<a href="search.php" style="margin-left: 20px;"> Search </a> 
			</div>
		</div>
	</section>
	
	
		
    <center>
	<h1> You Searched For </h1>
	<form action="" method="POST" enctype="multipart/form-data">
	    
			<?php
			    $connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,'criminal database for police');
				
				if(isset($_POST['imagename'])){

	
	$i = $_POST['imagename'];
	
	
	$sql = "SELECT * from criminal WHERE imagename='$i'";
	
	//Execute the query 
	$result = mysqli_query($connection, $sql);
	                 $id= "Criminal-ID:  ";
					 $name= "Name:  ";
					 $gender= "Gender:  ";
					 $age= "Age:  ";
	
	//check if it returns an empty set
	if(mysqli_num_rows($result) !=0 ){
	
		
					while($row = mysqli_fetch_array($result))
				{
					?>
					
					   <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 200px; height: 200px;" >'; ?> <br>
					   <br><?php echo $id,$row['id']; ?><br>
					   <br><?php echo $name,$row['name']; ?><br>
					   <br><?php echo $gender,$row['gender']; ?><br>
					  <br> <?php echo $age,$row['age']; ?>
					
				<?php
					
				}
	}
	
			
    else{
		?> <?php<br><br><br><br><br> no image found <?php
		//header("Location: search.php");
	}
	

}



?>				
				
					
		
	</form>
	</center>
	
</body>
</html>