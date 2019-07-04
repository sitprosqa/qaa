<?php
session_start();

$db=mysqli_connect("localhost","root","","login");
if (isset($_POST['register_btn']))
{
	session_start();
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$password2=$_POST['password2'];
		if($password==$password2 && $password!=NULL && $username!=NULL && $email!=NULL )
		{
			//$password=md5($password2);
			$sql="INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
			mysqli_query($db,$sql);
			$_SESSION['message']="YOU are loggged in";
			$_SESSION['username']=$username;
			header("location: login.php");
			
			
		}else{
			$_SESSION['message']="The two password donot match";
		}
}
	?>
<!DOCTYPE html>
<html>
		<head>
		<title>Sign up </title>
		<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
		</head>
	<body
    <div id="frm">
	 <header>
  <h2>Sign Up</h2>
	</header>
	 <footer>
  
	<form method="post" action="register.php">

	 <p>
	 <label><b>Username:</b></label>
	 <input type="text" name="username" class="textInput""/>
	 </p>
	 <p>
	  <p>
	 <label><b>Email:</b></label>
	 <input type="email" name="email" class="textInput"/>
	 </p>
	 <p>
	 <label><b>Password:</b></label>
	 <input type="password" name="password" class="textInput"/>
	 </p>
	  <p>
	 <label><b>Password again:</b></label>
	 <input type="password" name="password2" class="textInput"/>
	 </p>
	 <p>
	 <p>
	 <input type="Submit" name="register_btn" value="Register"/>
	</p>
	</form>
	</div>
	</footer>
	<nav>
	
	</nav>
	<article>
	
	</article>
	
	
	</body>
	</html>
	 