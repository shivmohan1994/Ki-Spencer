 
<?php
include_once('Connection.php');
 $qry = "SELECT product_name FROM product";
	 $result = mysqli_query($con,$qry);
	 $flag = 1;
	 $no_of_rows = mysqli_num_rows($result);
	 echo "<div class='row' >";
	 for($k = 1; $k <= 4; $k++) 
	 { 
	 	 
	 	 echo "<div class='col-md-3' >";
	 	 echo "<img src='image/p".$k.".jpg' class='img-responsive img-rounded' style='height:180px; width:250px;margin:auto !important'/ >";
	 	 echo "<br/>";
				 while($row = mysqli_fetch_array($result))
				 {
				 	$flag++;
				 	echo "<h4 class='text-center text-success' >$row[0]</h4>";
				 		if($flag > $k)
				 		break;

				 }
		 echo "</div>";
	}
	echo "</div>";
?>