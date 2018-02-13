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
		font: 900 30px 'Poiret One', cursive;	
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
<h2> Allocate Resource </h2>
<form method="post">
	<h2> Resource ID: </h2>
	<p>&emsp; &emsp; &emsp;&emsp;&emsp; <textarea class="txtarea" name="id" rows="1" cols="30" required>
	</textarea> </p>
	<h2> Status : </h2>
	<p> 1 - Allocate </p>
	<p>&emsp; &emsp; &emsp;&emsp;&emsp; <textarea class="txtarea" name="status" rows="1" cols="30" required>
	</textarea> </p>
	<center> <input class="button button4" name="Update" id="com_btn" type="submit" value="Update"> </center>
</form>
<?php
	if(isset($_POST['Update']))
	{
	//	echo '<script type="text/javascript"> alert("updated Gowtham ") </script>';
		$resid=$_POST['id'];
		$status=$_POST['status'];
		$query1="select * from resources WHERE id='$resid'";	
		$query_run1=mysqli_query($con,$query1);
		if(mysqli_num_rows($query_run1)==0)
		{
			echo '<script type="text/javascript"> alert("no Resource Query exixts..") </script>';
		}
		else
		{
			$query="update resources SET status='$status' WHERE id='$resid'";
			$query_run= mysqli_query($con,$query);
			if($query_run)
			{
				echo '<script type="text/javascript"> alert("Status updated..") </script>';
			}
			else
			{
				echo '<script type="text/javascript"> alert("ERROR") </script>';
			}		
		}
	}
?>
 </body>
</html>
