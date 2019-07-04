<?php
session_start();

$db=mysqli_connect("localhost","root","","items");
if (isset($_POST['register_btn']))
{
	session_start();
	$modelnumber=$_POST['modelnumber'];
	$Name=$_POST['Name'];
	$quantity=$_POST['quantity'];
		if( $modelnumber!=NULL && $Name!=NULL && $quantity!=NULL )
		{
			//$password=md5($password2);
			$sql="INSERT INTO request(modelnumber,Name,quantity) VALUES('$modelnumber','$Name','$quantity')";
			mysqli_query($db,$sql);
			header("location: home.html");
			
			
		}else{
			$_SESSION['message']="Incorrect";
		}
}
	?>
<!DOCTYPE html>
<html>
		<head>
		<title>ADD Item </title>
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
  <h2>Request Item Form</h2>
	</header>
	 <footer>
  
	<form method="post" action="reqitemadmin.php">

	 
	  <p>
	 <label><b>Model number:</b></label>
	 <input type="text" name="modelnumber" class="textInput"/>
	 </p>
	 <p>
	 <label><b>Name:</b></label>
	 <input type="text" name="Name" class="textInput"/>
	 </p>
	  <p>
	 <label><b>Quantity:</b></label>
	 <input type="text" name="quantity" class="textInput"/>
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
	 