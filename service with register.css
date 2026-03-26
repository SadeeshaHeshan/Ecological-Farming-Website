<?php
include("Field Officers.php")
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>packages list</title>
<style type="text/css">
		*{
	padding:0px;
	margin:0px;	
}
	body{
font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
background-color: darkslategray;
}
		h1{
			text-align: center;
			font-size: 36px;
			color: #FFFFFF;
		
			
		}
.cards{
	width:25%;
	display: inline-block;
	background-color: aliceblue;
	border-radius:5px;
	margin:200px auto;
	box-shadow: 2px 2px 10px black;
	position: relative;
	top: -120px;
	bottom: 120px;
	right: -250px;
		
}
	.title h1{
	text-align:center;
	font-size: 40px;
		color: #0013EB;
		font-weight: 600;
}
.des{
	text-align:center;
	padding: 4px;
	font-weight: 600;
}

button{
	margin-top:30px;
	margin-bottom:30px;
	background-color:white;
	border:1px solid black;
	padding:5px;
	border-radius:5px;
	transition: pointer;
}
button:hover{
	background-color:black;
	color:white;
	transition:0.5s;
}
	
	
	
	</style>
</head>

<body>
	

<?php
	
	include 'connection.php';	

	
	$result = mysqli_query($conn,"SELECT * FROM service");

?>

	<?php
while($row = mysqli_fetch_array($result))
  {
	  
	   $servicename=$row['servicename'];
	 $escrip= $row['descrip'];
	$place=$row['place'];
	$date=$row['date'];
		$time=$row['time'];
		$phone=$row['phone'];
	?>

	
<div class="cards">

<div class="title">
<h1 ><?php echo($row['servicename']);?></h1>

	
</div>
<div class="des">
<p><br/><?php echo($row['descrip']);?></p>
<p><br/><?php echo($row['place']);?></p>
<p><br/><?php echo($row['time']);?></p>
<p><br/><?php echo($row['phone']);?></p><br/>




	
</div>
</div>
	
<?php
  }//end of while

	
mysqli_close($conn);	

?>	
	

<body>
</body>
</html>