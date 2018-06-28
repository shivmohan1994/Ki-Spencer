<?php
ob_start();
 session_start();
 require_once 'dbconnect.php';
 
	if (!isset($_SESSION['user']) ) {
	  header("Location: index.php");
	  exit;
	 }
 	else
 	{
 		include('header.php');
 		include('sidebar.php');
		$query = "SELECT customerId, customerName, customerEmail from customer";
		$result = mysql_query($query) or die(mysql_error());
		echo "<span class='text-center text-white all-text'><h3 class='animated 6s bounce'>--Registered Customer's--</h3></span>";
		echo "<div class='col-xs-10  table-content'>";
		echo "<table class='table table-hover table-condensed table-inverse all-table'>";
		echo "<thead>";
		echo "<th>CustomerId</th>";
		echo "<th>CustomerName</th>";
		echo "<th>customerEmail</th>";
		echo "</thead>";
		while($row =mysql_fetch_array($result))
		{
		echo "<tr>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "</tr>";
		}
		echo "</table>";
		echo "</div>";
	include('footer2.php');		
	}
	ob_flush();

	?>

