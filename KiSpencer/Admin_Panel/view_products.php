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
		$query = "SELECT * from product";
		$result = mysql_query($query) ;
		echo "<div class='col-xs-10  table-content'>";
		echo "<table class='table table-hover table-condensed table-inverse all-table'>";
		echo "<thead>";
		echo "<th>Product_Id</th>";
		echo "<th>Product_Name</th>";
		echo "<th>Product_price (&#8377;)</th>";
		echo "<th>Category_Id</th>";
		echo "<th>Product(in packets)</th>";
		echo "</thead>";
		while($row =mysql_fetch_array($result))
		{
		echo "<tr>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
		echo "<td>".$row[4]."</td>";
		echo "</tr>";
		}
		echo "</table>";
		echo "</div>";
	include('footer2.php');		
	}
	ob_flush();

	?>

