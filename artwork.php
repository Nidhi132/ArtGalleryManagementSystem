<!DOCTYPE html>
<html>
<head>
	<title>
		Artwork
	</title>
</head>
<?php

   session_start();
   $id=$_SESSION['AID'];
   // echo $id;


  ?>
<body>
	<link href='https://fonts.googleapis.com/css?family=Candal' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Carter One' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Jockey One' rel='stylesheet'>
	<h1>
	<center>
	<h1 style="font-size: 40" "font-family: Carter One"><font style="border: 14px groove floralwhite;" color=#FF0080><u>ARTWORK</font></h1>
		<br>
	</center>
       <style> 
       	body{ 
       		/*background: url("https://images.wallpaperscraft.com/image/triangle_dark_background_light_line_shape_88539_1280x720.jpg") no-repeat;*/
       		background: url("image/1pic9.jpg") no-repeat;
		background-size:cover;
		font-family:"Verdana";
		text-color:white;
		}
		</style>
		<b>
			<font style="font-family: Carter One " font color="white" size="10">
				SELECT ANY ONE OPTION FROM BELOW:</font>
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
	<li><a href="artinsert.php" >INSERT VALUES INTO THE ARTWORK </a></li>
	<li><a href="artsearch.php">SEARCH VALUES FROM THE
				ARTWORK</a></li>
	<li><a href="artdisplay.php">DISPLAY CONTENTS FROM THE
				ARTWORK TABLE</a></li>
	<!-- <li><a href="artdelete.php">DELETE VALUES FROM THE
				ARTWORK</a></li> -->
	<li><a href="artupdate.php">UPDATE VALUES OF
				ARTWORK</a></li>			
</h1>
<!-- <p style="font-family: arial"><a href="FrontEnd.html"><font style="color:gold">GO BACK</font></a></p> -->
<p style="font-family: arial"><a href="artist.php"><font style="color:gold">GO BACK</font></a></p>
<p style="font-family: arial; float: right;"><a href="alogout.php"><font style="color:black">LogOut</font></a></p>
</body>
</html>