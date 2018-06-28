
<?php
 
include('Connection.php');
?>
<?php
	$query ="select category_id, category_name from category ORDER BY category_id ASC";
	$res = mysql_query($query);
	$row = mysql_fetch_array($res);
	$count =mysql_num_rows($res);
//	echo $count;
//	echo $row[0];
?>
<style>
th,td{
padding:10px;

}
th{
	background:linear-gradient(to top ,dimgrey,black);
	color:whitesmoke;
}
th:hover{

}


</style>
<div class="container">
<div class="row">
<!-- <div class="sidebar_category col-md-3" style=" width: 20% !important;"> -->
	<table class="table-striped table-hover col-md-2 text-center">
		<thead>
			<tr>
				<th class="animated 6s slideInDown text-center">Select your Category</th>
			</tr>
		</thead>
			<tbody>
		<?php
		while($row = mysql_fetch_array($res) and $count >= 7)
		{
		echo "<tr><td><a href=".$row[0].".php>".$row[1]."</a></td></tr>";
			$count = $count-1;
			}?>
			<tr><td><a href="categories.php" target="_blank">More&raquo;</a></td></tr>
			</tbody>
	</table>
 <!-- </div> -->
 <div class="col-md-9" style="width:82%">
 	<?php include('slider.php');?>
 </div>
 </div>
 </div>
 