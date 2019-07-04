
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
<?php
session_start();
?>
</style>
		</head>
	<body
    <div id="frm">
	 <header>
  <h2>Notification Request For Items</h2>
	</header>
	 <footer>
  
	<form method="post" action="additem2.php">

	 
	 
	 
	 <p>
	 <label><b>Product Name:</b></label>
	 <input type="text" name="Name" class="textInput"/>
	 </p>
	  <p>
	 <label><b>Quantity:</b></label>
	 <input type="text" name="quantity" class="textInput"/>
	 </p>
	 <p>
	 <label><b>Id:</b></label>
	 <input type="text" name="id" class="textInput"/>
	 </p>
	 <p>
	 <p>
	 <input type="Submit" name="register_btn" value="Register"/>
	</p>
	<input type="Submit" name="addproduct" value="Add Product">
	</form>
	</div>
	</footer>
	<nav>
	
	</nav>
	<article>
	<?php
$db_username = 'root';
    $db_password = '';
	$db_name = 'users';
	$db_host = 'localhost';

//connect to MySql						
	$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);						
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	/*
	$sql = "SELECT quantity,Name,modelnumber FROM request";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	$count=0;
    while($row = $result->fetch_assoc()) {
		$count=$count+1;
        echo " <br><b>Request No :</b> ".$count."<br>"."<br> NAME: ". $row["Name"]. "<br> Model Number: ". $row["modelnumber"]."<br> Quantity: ". $row["quantity"]."<br>";
    
	}
}
*/
echo $_SESSION["msg"];
echo $_SESSION["quantity"];
//echo $_SESSION["name"];
?>
<ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="">
                        
                        Remove Notification
                    </a>
					
                </li></ul>
	</article>
	
	
	</body>
	</html>
	 