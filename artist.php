<!DOCTYPE html>
<html>
<head>
	<title>
		Artist
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
	<h1 style="font-size: 40" "font-family: Carter One"><font style="border: 14px groove floralwhite;" color=red ><u>ARTIST</font></h1>
		<br>
	</center>
       <style> 
       	body{ 
       		/*background: url("https://cdn.createlet.com/wp-content/uploads/2018/04/best-gesso.jpg?iv=11") no-repeat;*/
       		background: url("image/art.gif") no-repeat;
		background-size:cover;
		font-family:"Verdana";
		text-color:white;
		}
		</style>
		<b>
			<font style="font-family: Carter One " font color="snow" size="10">
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
	width:420px;
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
	<li><a href="acontacts.php" >ADD ANOTHER CONTACT</a></li>
	<li><a href="artistsearch.php">SEARCH VALUES FROM THE
				ARTIST</a></li>
	<li><a href="artistdisplay.php">DISPLAY VALUES FROM THE
				ARTIST TABLE</a></li>
	<li><a href="acdisp.php">CUSTOMER INFO</a></li>
    <li><a href="artistinsert.php">UPDATE ARTIST INFO</a></li>
    <li><a href="anotice.php">NOTICE</a></li>
    <li><a href="artwork.php"> ARTWORK INFO</a></li>
</h1>
<p style="font-family: arial"><a href="artist1.html"><font style="color:brown">GO BACK</font></a></p>
<p style="font-family: arial; float: right;"><a href="alogout.php"><font style="color:black">LogOut</font></a></p>
</body>
</html>