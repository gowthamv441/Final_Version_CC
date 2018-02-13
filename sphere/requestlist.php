<?php
	session_start();
	require 'dbconfig/config.php';
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
		<li> <a href="authfirst.php">Home</a></li>
		<li> <a href="requestlist.php">View plea</a></li>
		<li> <a href="allocation.php">Resource allocation</a></li>
		<li> <a href="empcreate.php">Employee creation</a></li>
		<li> <a href="contacts.php">Contact</a></li>
		<li> <a href="first.php">logout</a></li>
	</ul>
	
</div>
<h2><b> Requested Resources </b></h2>
<?php
	$stat=0;
	$query="select * from Resources WHERE status='$stat'";
	$query_run=mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0)
	{
		while($row = $query_run->fetch_assoc())
		{
			echo "<p> Resource ID ::&emsp;".$row["id"]."</p>";
			echo "<p> Item ::&emsp;".$row["itemname"]."</p>";
			echo "<p> Quantity ::&emsp;".$row["quantity"]."</p><hr><hr>";
		}
	}
	else
	{
		echo "<h3> No complaints yet ....</h3>";
	}
?>

 </body>
</html>
