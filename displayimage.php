<html>
<head>
    <
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
			<div class="col-md-2" style="font-size: 30px;color:#DAF7A6 ;"> XYZ Interpol</div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="index.php"> Home </a> 
				<a href="displayimage.php" style="margin-left: 20px;"> Criminals </a> 
				<a href="search.php" style="margin-left: 20px;"> Search </a> 
			</div>
		</div>
	</section>
	
	
		
    <center>
	<h1> CRIMINALS </h1>
	<form action="" method="POST" enctype="multipart/form-data">
	    <table width="50%" border="1" cellpadding="5" cellspacing="5">
		    <thead>
			    <tr>
				    <th> IMAGE </th>
					<th> ID </th>
					<th> Name </th>
					<th> Gender </th>
					<th> age </th>
				</tr>
			</thead>
			<?php
			    $connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,'criminal database for police');
				
				$query ="SELECT * FROM `criminal` ";
				$query_run = mysqli_query($connection,$query);
				
				while($row = mysqli_fetch_array($query_run))
				{
					?>
					<tr>
					   <td> <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 100px; height: 100px;" >'; ?> </td>
					   <td> <?php echo $row['id']; ?></td>
					   <td> <?php echo $row['name']; ?></td>
					   <td> <?php echo $row['gender']; ?></td>
					   <td> <?php echo $row['age']; ?></td>
					<tr>
					<?php
				}
					
			?>
					
		</table>
	</form>
	</center>
	
</body>
</html>