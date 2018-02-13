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
		<li> <a href="residentlogin.php">Home</a></li>
		<li> <a href="complaintresident.php">complaints</a></li>
		<li> <a href="viewstatus.php">status</a></li>
		<li> <a href="myprofileresident.php">my profile</a></li>
		<li> <a href="contacts.php">Contact</a></li>
		<li> <a href="first.php">logout</a></li>
	</ul>
	
</div>
<h2> Credit Your Complaint </h2>
<form method="post">
	<h2> Complaint ID: </h2>
	<p>enter your username with some digit</p>
	<p>&emsp; &emsp; &emsp;&emsp;&emsp; <textarea class="txtarea" name="id" rows="1" cols="30" required>
	</textarea> </p>
	<h2> Domain of Complaint : </h2>
	<p>&emsp; &emsp; &emsp;&emsp;&emsp; <textarea class="txtarea" name="issues" rows="1" cols="30" required>
	</textarea> </p>
	<h2> Site Address : </h2>
	<p>&emsp; &emsp; &emsp;&emsp;&emsp; <textarea class="txtarea" name="address" rows="3" cols="100" required>
	</textarea> </p>
	<h2> Complaint : </h2>
	<p>(*note within 1000 Characters) </p>
	<p>&emsp; &emsp; &emsp;&emsp;&emsp; <textarea class="txtarea" name="complaint" rows="10" cols="100" required>
	</textarea> </p>
	<h2> Phone Number : </h2>
	<p>&emsp; &emsp; &emsp;&emsp;&emsp; <textarea class="txtarea" name="phno" rows="1" cols="30" required>
	</textarea> </p>
	<h2> Mail ID : </h2>
	<p>&emsp; &emsp; &emsp;&emsp;&emsp; <textarea class="txtarea" name="mail" rows="1" cols="100" required>
	</textarea> </p>
	<center> <input class="button button4" name="credit" id="com_btn" type="submit" value="Credit"> </center>
</form>

<?php
	if(isset($_POST['credit']))
	{
	//	echo '<script type="text/javascript"> alert("credited ") </script>';
		$compid=$_POST['id'];
		$address=$_POST['address'];
		$complaint= $_POST['complaint'];
		$domain= $_POST['issues'];
		$phno= $_POST['phno'];
		$mail= $_POST['mail'];
		$status=0;
		$query1="select * from complaints WHERE id='$compid'";	
		$query_run1=mysqli_query($con,$query1);
		if(mysqli_num_rows($query_run1)>0)
		{
			echo '<script type="text/javascript"> alert("Complaint id already exists. Please enter another.") </script>';
		}
		else
		{
			$query="insert into complaints values('$compid','$domain','$address','$complaint','$phno','$mail','$status')";
			$query_run= mysqli_query($con,$query);
			
			if($query_run)
			{
				echo '<script type="text/javascript"> alert("Complaint Credited Successfully") </script>';
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
