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
	.optcontent
	{
		color: #2c3e50;
		font: 900 20px 'Poiret One', cursive;
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
		<li> <a href="empfirst.php">Home</a></li>
		<li> <a href="viewcomplaint.php">View complaints</a></li>
		<li> <a href="updatestatus.php">update status</a></li>
		<li> <a href="askresource.php">Ask resources</a></li>
		<li> <a href="resourcestatus.php">Resource status</a></li>
		<li> <a href="contacts.php">Contact</a></li>
		<li> <a href="first.php">logout</a></li>
	</ul>
	
</div>
<h2> Ask for Resource </h2>
<form method="post">
	<h2> Resource ID: </h2>
	<p>enter your username with some digit</p>
	<p>&emsp; &emsp; &emsp;&emsp;&emsp; <textarea class="txtarea" name="id" rows="1" cols="30" required>
	</textarea> </p>
	<h2> Item Name : </h2>
	<p>&emsp; &emsp; &emsp;&emsp;&emsp; <textarea class="txtarea" name="item" rows="3" cols="100" required>
	</textarea> </p>
	<h2> Quantity: </h2>
	<p>&emsp; &emsp; &emsp;&emsp;&emsp; <textarea class="txtarea" name="quantity" rows="1" cols="30" required>
	</textarea> </p>
	<center> <input class="button button4" name="Ask" id="com_btn" type="submit" value="Ask"> </center>
</form>

<?php
	if(isset($_POST['Ask']))
	{
	//	echo '<script type="text/javascript"> alert("credited ") </script>';
		$resid=$_POST['id'];
		$item=$_POST['item'];
		$quantity= $_POST['quantity'];
		$status=0;
		$query1="select * from resources WHERE id='$resid'";	
		$query_run1=mysqli_query($con,$query1);
		if(mysqli_num_rows($query_run1)>0)
		{
			echo '<script type="text/javascript"> alert("Resource id already exists. Please enter another.") </script>';
		}
		else
		{
			$query="insert into resources values('$item','$quantity','$resid','$status')";
			$query_run= mysqli_query($con,$query);
			
			if($query_run)
			{
				echo '<script type="text/javascript"> alert("Request Done...") </script>';
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
