<style type="text/css">
	@import url('css/Style.css');
	@import url('css/bootstrap.min.css');
	@import url('css/font-awesome.css');
</style>



<!-- view cart box -->
<?php

echo '<div class="container">';

session_start("cart_products");
if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
{
	 //echo 'hello';
	echo '<div class="cart-view-table-front" id="view-cart">';
	echo '<font class="text-center text-success" style="font-size:1.4em; margin-left: 40%;">Your Basket Items...<i class="fa fa-shopping-cart fa-2x"></i></font>';
	echo '<form method="post" action="cart_update.php" style="padding:10px;">';
	echo '<table width="100%"   class="table-hover table-striped cart-items';
	echo '<thead >';
	echo '<tr style="background:linear-gradient(black,dimgrey);color:white;">';
	echo '<th class="text-center">Quantity in packets</th>';
	echo '<th class="text-center">Product Name</th>';
	echo '<th class="text-center">Remove from Cart</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';

	$total =0;
	$b = 0;

	foreach ($_SESSION["cart_products"] as $cart_itm)
	{
		$product_name = $cart_itm["product_name"];
		$product_qty = $cart_itm["product_qty"];
		$product_price = $cart_itm["product_price"];
		$product_id = $cart_itm["product_id"];


		//$bg_color = ($b++%2==1) ? 'odd' : 'even'; //zebra stripe
		echo '<tr class=" ">';
		echo '<td>Qty: <input type="text" size="2" maxlength="2" name="product_qty['.$product_id.']" value="'.$product_qty.'" class="text-center input-quantity"/></td>';
		echo '<td>'.$product_name.'</td>';
		echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_id.'" /> Remove</td>';
		echo '</tr>';
		$subtotal = ($product_price * $product_qty);
		$total = ($total + $subtotal);
	}

	echo '<td colspan="4">';
	echo '<button type="submit" class="btn btn-success">Update</button> &nbsp; &nbsp;<a href="view_cart.php" class="button btn btn-danger">Checkout</a>';
	echo '</td>';
	echo '</tbody>';
	echo '</table>';
	$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
	echo '</form>';
	echo '</div>';
}
echo "</div>";

?>

<!-- end of cart box -->




