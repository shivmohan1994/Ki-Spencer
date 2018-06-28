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
		$query = "SELECT table_name from information_schema.tables where table_schema = 'grocery' ";
		$result = mysql_query($query);
		echo "<div class='col-md-4 table-content' style='margin-right:25px !important; margin-top:7%;margin-left:11%'>";
		echo "<table class='table table-hover table-condensed table-inverse all-table'>";
		echo "<thead>";
		echo "<tr>";
		echo "<th class='text-center'>Table Name</th>";
		echo "</tr>";
		echo "</thead>";
		while($row =mysql_fetch_array($result))
		{
		echo "<tr>";
		echo "<td>".$row[0]."</td>";
		echo "</tr>";
		}
		echo "</table>";
		echo "</div>";
	include('footer2.php');		
	}
	ob_flush();

	?>

