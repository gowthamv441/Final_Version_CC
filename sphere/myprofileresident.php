<?php
	require 'dbconfig/config.php';
	session_start();
?>
<html>
<head>
	<title> CC-first  </title>
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> 
	<link rel ="stylesheet" href="css/style.css" >
	<style>
	h1
	{
		color: #2c3e50;
		font: 900 50px 'Poiret One', cursive;
		margin-top : 20px;
	}
	h2
	{
		color: #2c3e50;
		font: 900 40px 'Poiret One', cursive;
		margin-top : 20px;
	}
	h3
	{
		color: #2c3e50;
		font: 900 30px 'Poiret One', cursive;
		margin-top : 20px;
	}
	p
	{
		color: #2c3e50;
		font: 900 20px 'Poiret One', cursive;	
	}
	ul
	{
		list-style : none;
		padding : 0;
		margin : 0;
		position: absolute;
	}
	li{
		float: left;
		margin-top : 30px;
		margin-right : 50px;
	}
	a
	{
		width : 150 px;
		color : white;
		display: block;
		text-decoration : none;
		font-size : 20 px;
		text-align : center;
		padding : 10px;
		border-radius : 10px;
		font-family : Century Gothic;
		font-weight : bold;
	}
	a:hover
	{
		background: #669900;
		transition : 0.6s;
	}
	.optcontent
	{
		color: #2c3e50;
		font: 900 20px 'Poiret One', cursive;
		margin-right: 30px;
		margin-left: 80px;
	}	
	</style>
</head>
<body  style="background-color: #FFFFFF">
<h1> Credit complaint </h1>

<h3 align="right"> Welcome  
<?php echo $_SESSION['username'] ?>
<?php echo '<img class="avatarlogin" src="'.$_SESSION["imagelink"].'">';?>
</h3>
<div class ="nav">
	<ul>
		<li> <a href="residentlogin.php">Home</a></li>
		<li> <a href="complaintresident.php">complaints</a></li>
		<li> <a href="viewstatus.php">status</a></li>
		<li> <a href="myprofileresident.php">my profile</a></li>
		<li> <a href="contacts.php">Contact</a></li>
		<li> <a href="first.php">logout</a></li>
	</ul>
	
</div>
<center>
<?php echo '<img class="profilepicture" src="'.$_SESSION["imagelink"].'">';?>
<p>
<h2><?php echo $_SESSION['username'] ?></h2>
</center>
<hr><hr>
<h3> Contribution :: 1.3 </h3>
<h3> Activity :: Frequent </h3>
<hr>
<center><p>Credit Complaint</p></center>
 </body>
</html>
