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
<div class ="nav">
	<ul>
		<li> <a href="first.php">Home</a></li>
		<li> <a href="news.php">News</a></li>
		<li> <a href="blogs.php">Blog</a></li>
		<li> <a href="feedback.php">Feedback</a></li>
		<li> <a href="about.php">About</a></li>
		<li> <a href="contacts.php">Contact</a></li>
		<li> <a href="loginfirst.php">Login</a></li>
		<li> <a href="registerfirst.php">Register</a></li>
	</ul>
</div>
<h2> Welcome to Credit Complaint </h2><br>
<h3> please Choose Your Stream </h3>
<form  class="myform" action="loginfirst.php" method="post">
	<a href="reslogin.php"><input class="button button4" name="resbtn" type="button" id="res_btn" value="Resident"></a><br><br>
	<input class="button button4" name="empbtn" type="button" id="emp_btn" value="Employee"></a> <br><br>
	<a href="authlogin.php"><input class="button button4" name="authbtn" type="button" id="auth_btn" value="Authority"></a><br>
</form>
<div id="myModal1" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
	<center>
	<form  method="post">
	<img src="Avatar.png" class="Avatar">
	<label> <b><h2 class="heading"> Username  </h2></b></label>
	<input name="uname" type="text" class="inputvalues" placeholder="Type Your Name"> <br>
	<label> <b><h2 class="heading" > Password  </h2></b></label>
	<input name="pword" type="password" class="inputvalues" placeholder="Type Your Password"><br>
	<input class="button button4" name="authloginbtn" type="submit" id="auth_login_btn" value="LOGIN"><br>
	</form>
	<center>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal1');

// Get the button that opens the modal
var btn = document.getElementById("emp_btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<?php
if(isset($_POST['authloginbtn']))
{
	$username=$_POST['uname'];
	$password=$_POST['pword'];
	$query="select * from empinfotbl WHERE username='$username' AND password='$password'";
	$query_run=mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0)
	{
		$row=mysqli_fetch_assoc($query_run);
		$_SESSION['username']=$row['username'];
		$_SESSION['imagelink']=$row['imglink'];
		header('location:empfirst.php');
	}
	else
	{
		echo '<script type="text/javascript"> alert("Invalid Username and password ") </script>';
	}
}
?>
</body>
</html>