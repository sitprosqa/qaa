<?php

$db=mysqli_connect("localhost","root","","users");
if (isset($_POST['register_btn']))
{
	session_start();
	$Name=$_POST['Name'];
	$quantity=$_POST['quantity'];

$query3="UPDATE product set quantity='$total' where id ='$userid'";
			if (mysqli_query($db, $query3)) {
