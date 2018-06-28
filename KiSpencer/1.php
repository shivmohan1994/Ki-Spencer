<div class="container">
<?php
include('header.php');
include('config.php');
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>
<div class="clearfix"></div>
<span class="text-center text-primary"></span>
<?php

$path = $_SERVER['PHP_SELF'];
$path =trim($path,'/kirana/.php');
$query = "Select category_name from category where category_id = '".$path."'";
$result = mysql_query($query);
$row1 =mysql_fetch_array($result);
echo "<h3 class='text-center text-primary'>--Products In ".$row1[0]."--</h3>";
$qry = "Select product_name, price, quantity, product_id from product where category_id = 1 ";
$res = mysql_query($qry);
$flag = 1;

	echo "<div class='row'>";
	
	while($row = mysql_fetch_array($res))
	{

		echo "<div class='col-md-6'>";
		for($k = 1; $k <= 2; $k++)
		{ 
			echo "<div class='img-responsive' style='padding:10px; box-shadow:0px 0px 5px solid grey;'>";
	 	 	echo "<img src='image/p".$row[3].".jpg' class='img-responsive img-rounded pro_image'>";
	 	 	echo "</div>";
			$flag++;
	 	 	if($flag > $k)
	 	 		break;
		}
		echo "<form action='cart_update.php' method='post'>";
	 	 	echo "<table class='table table-striped table-hover'>";
			echo "<tr><td class='text-muted'>Product Name</td><td colspan='2'>".$row[0]."</td></tr>";
			echo "<tr><td class='text-muted'>Price</td><td colspan='2'>".$row[1]."&#8377;</td></tr>";
			echo "<tr><td class='text-muted'>Weight</td><td colspan='2'>".$row[2]."</td></tr>";
			echo "<tr><td class='text-muted'>Quantity</td><td class=''><input type='number' name='product_qty' class='form-control' min='0' style='width:55px;float: left;' ></td>
				<input type='hidden' name='product_id' value='".$row[3]."'/>
				<input type='hidden' name='type' value='add' />
				<input type='hidden' name='return_url' value='".$current_url."' />
				<td><input type='submit' class='btn btn-primary pull-right' style='border:1px ridge dimgrey' value='Add to cart'></td></tr>";
			echo "</table>";
			echo "</form>";
		echo "</div>";	
	}
echo "</div>"
?>
<?php include("view_cart_box.php");
?>
</div>