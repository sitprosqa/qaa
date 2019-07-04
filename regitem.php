<!DOCTYPE html>
<html>
		<head>
		<title>Book item </title>
		<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}
<?php 
session_start();
?>
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
  <h2>Book Item</h2>
   <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="reqitemadmin.php">
                        
                        Request For items:
                    </a>
                </li></ul>
</header>
	 <footer>
  


	 <form action="item.php" method="POST">
	 <p>

Product Name<input type="text" name="name">
Product Quantity<input type="text" name="quan">
Issue Date<input type="date" name="issuedate">
Return Date<input type="date" name="returndate">

<!--
	 <label><b>Project Title:</b></label>
	 <input type="text" id="protitle" name="protitle"/>
	 </p>
	 <p>
	 <label><b>Model number:</b></label>
	 <input type="text" id="mdnum" name="mdnum"/>
	 </p>
	 <p>
	 <label><b>Name:</b></label>
	 <input type="text" id="name" name="name"/>
	 </p>
	 <p>
	 <label><b>Quantity:</b></label>
	 <input type="text" id="quan" name="quan"/>
	 </p>
	 <p>
	 <input type="date" name="issuedate">
	 </p>
	 <p>
	 <input type="date" name="returndate">
	 </p>
	 <p>
	 -->
	 <input type="submit" id="btn" name="items"/>
	

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
	$sql = "SELECT DISTINCT name FROM product";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	$count=0;
    while($row = $result->fetch_assoc()) {
		$count=$count+1;
        //echo " <br><b>Item No :</b> ".$count."<br>"."<br> NAME: ". $row["Name"]. "<br> Model Number: ". $row["modelnumber"]."<br> Quantity: ". $row["quantity"]."<br>";
        echo "<br><b>Item No :<b>".$count.$row["name"];
    }
}
?>
	</article>
	

	</body>

</html>





