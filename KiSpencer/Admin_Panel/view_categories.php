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
		$query = "SELECT * from category";
		$result = mysql_query($query) ;
		echo "<div class='col-xs-10  table-content'>";
		echo "<table class='table table-hover table-condensed table-inverse all-table'>";
		echo "<thead>";
		echo "<th>Category_Id</th>";
		echo "<th>Category_Name</th>";
		echo "</thead>";
		while($row =mysql_fetch_array($result))
		{
		echo "<tr>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "</tr>";
		}
		echo "</table>";
		echo "</div>";
	include('footer2.php');		
	}
	ob_flush();

	?>

