

<html>
<head>
	<title> CC-feedback  </title>
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
<form method="post">
	<h2> Your Mail : </h2>
	<p>&emsp; &emsp; &emsp;&emsp;&emsp; <textarea class="txtarea" name="mail" rows="1" cols="100" required>
	</textarea> </p>
	<h2> Comments : </h2>
	<p>&emsp; &emsp; &emsp;&emsp;&emsp; <textarea class="txtarea" name="comments" rows="10" cols="100" required>
	</textarea> </p>
	<center> <input class="button button4" name="fdbtn" id="fd_btn" type="button" value="suggest"> </center>
</form>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
	<p class="prompt"> Your Suggestion is taken into Account. </p>
	<center>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("fd_btn");

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

</body>
</html>
