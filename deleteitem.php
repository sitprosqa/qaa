<!DOCTYPE html>
<html>
		<head>
		<title>Delete item </title>
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
  <h2>DELETE ITEM</h2>
</header>
	 <footer>
  


	 <form action="delitem.php" method="POST">
	 
	 
	 <p>
	 <label><b>Name:</b></label>
	 <input type="text" id="name" name="name"/>
	 </p>
	 <p>
	 <input type="submit" id="btn" name="items"/>
	</p>
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
	$sql = "SELECT name FROM product";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	$count=0;
    while($row = $result->fetch_assoc()) {
		$count=$count+1;
        echo " <br><b>Item No :</b> ".$count."<br>"."<br> NAME: ". $row["name"]; }
}
?>
	</article>
	

	</body>

</html>





