<!DOCTYPE html>
<html>
<head>
	<title>
		Exhibition
	</title>
</head>
<?php

   session_start();
   $id=$_SESSION['GID'];
   // echo $id;


  ?>
<body>
	<link href='https://fonts.googleapis.com/css?family=Candal' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Carter One' rel='stylesheet'>
	<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Jockey One'>
	<h1>
	<center>
	<h1 style="font-size: 40" "font-family: Carter One"><font style="border: 14px groove lavender;" color=red ><u>EXHIBITION</font></h1>
		<br>
	</center>
       <style> body{ background: url("https://images.pexels.com/photos/69903/pexels-photo-69903.jpeg?cs=srgb&dl=art-exhibition-gallery-69903.jpg&fm=jpg") no-repeat;
		background-size:cover;
		font-family:"Verdana";
		text-color:white;
		}
		</style>
		<b>
			<font style="font-family: Carter One " font color="limegreen" size="10">
				MAKE YOUR CHOICE:</font>
		</b>
<style>
		ul{
	margin:3pc;
	padding:0.1px;
	list-style:none;
	
}
ul li{
	float:initial;
	width:450px;
	height:80px;
	background-color:mediumslateblue;
	opacity:.8;
	line-height:40px;
	text-align:center;
	font-size:35px;
	margin-bottom: 16px;
}
ul li a{
	text-decoration:underline;
	text-align: center;
	font-family: Jockey One; 
	font-weight: bold;
	font-size: 6;
	color:white;
	display:block;
}
ul li a:hover{
	 background-color: white;
    color: black;
	background-size: contain;
}
ul li ul li{
	display:none;
}
ul li:hover ul li{
	display:block;
}
</style><br>
<ul>
	<li><a href="einsert.php" >INSERT VALUES INTO THE EXHIBITION </a></li>
	<li><a href="esearch.php">SEARCH VALUES FROM THE
				EXHIBITION</a></li>
    <li><a href="edisp.php">DISPLAY CONTENTS FROM THE
				EXHIBITION TABLE</a></li>
	<!-- <li><a href="edelete.php">DELETE VALUES FROM THE
				EXHIBITION</a></li> -->
	<li><a href="eupdate.php" >UPDATE EXHIBITION INFO</a></li>			
</h1>
<p style="font-family: arial"><a href="gallery.php"><font style="color:gold">GO BACK</font></a></p>
<p style="font-family: arial; float: right;"><a href="Logout.php"><font style="color:black">LogOut</font></a></p>
</body>
</html>