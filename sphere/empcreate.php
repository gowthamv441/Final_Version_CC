<?php
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
	<script type="text/javascript">
		function PreviewImage()
		{
			var oFReader=new FileReader();
			oFReader.readAsDataURL(document.getElementById("imglink").files[0]);
			oFReader.onload=function(oFREvent)
			{
				document.getElementById("uploadPreview").src=oFREvent.target.result;
			};
		};	
	</script>
</head>
<body  style="background-color: #FFFFFF">
<h1> Credit complaint </h1>
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
<h2> Hearty Welcome to Credit Complaint</h2><br>
<h3> Employee Creation </h3>
<form  class="myform" action="loginfirst.php" method="post">
	<input class="button button4" name="resbtn" type="button" id="emp_btn" value="Employee"><br><br>
</form>
<div id="Modal" class="modal1">

  <!-- Modal content -->
  <div class="modal1-content">
    <span class="close">&times;</span>
	<center>
	<form  class="myform" action="empcreate.php" method="post" enctype="multipart/form-data">
	<img id="uploadPreview" src="Avatar.png" class="Avatar">
	<br>
	<input class="button button4" type="file" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="PreviewImage();">
	<label> <b><h3 class="heading"> Fullname  <h3></b></label>
	<input name="fullname" type="text" class="inputvalues" placeholder="Type Your FullName" required>
	<label> <b><h3 class="heading"> Username  </h3></b></label>
	<input name="uname" type="text" class="inputvalues" placeholder="Type Your Name" required>
	<label> <b><h3 class="heading" > Password  </h3></b></label>
	<input name="password" type="password" class="inputvalues" placeholder="Type Your Password" required>
	<label> <b><h3 class="heading" > Confirm Password  </h3></b></label>
	<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm Password" required>
	<input class="button button4" name="submit_btn" type="submit" id="signup_btn" value="Sign up">
	</form>
	<center>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('Modal');

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
			if(isset($_POST['submit_btn']))
			{
				$fullname=$_POST['fullname'];
				$username= $_POST['uname'];
				$password= $_POST['password'];
				$cpassword= $_POST['cpassword'];
				
				$img_name=$_FILES['imglink']['name'];
				$img_size=$_FILES['imglink']['size'];
				$img_tmp=$_FILES['imglink']['tmp_name'];
				
				$directory='uploads/';
				$target_file = $directory.$img_name;
				
				if($password==$cpassword)
				{
					$query="select * from empinfotbl WHERE username='$username'";	
					$query_run=mysqli_query($con,$query);
					if(mysqli_num_rows($query_run)>0)
					{
						echo '<script type="text/javascript"> alert("Username already exists") </script>';
					}
					else if(file_exists($target_file))
					{
						echo '<script type="text/javascript"> alert("Image file already exists") </script>';
					}
					else
					{
						move_uploaded_file($img_tmp,$target_file);
						$query="insert into empinfotbl values('$username','$password','$fullname','$target_file')";
						$query_run= mysqli_query($con,$query);
						
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("Employee registered") </script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("ERROR") </script>';
						}
					}
					
				} 
				else
				{
					echo '<script type="text/javascript"> alert("Password Mismatch ") </script>' ;
				}
			}
		?>
</body>
</html>
