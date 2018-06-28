
<style type="text/css">	
@import url('css/bootstrap.min.css');
@import url('css/style.min.css');
@import url('css/font-awesome.css');
th{
	text-align: center !important;
}
</style>
<?php
include_once("config.php");
?>

 <div class="container">

<?php
include_once("header.php");
?>
<div class="row">
	<div class="bg-success text-center col-md-2 col-md-offset-5" style="padding: 5px;margin:10px; border-radius:0px 15px 15px 0px;border: 2px ridge seagreen; border-left:none !important;"><h4 class="text-danger animated 6s bounceInLeft" style="text-shadow:0px 0px 1px whitesmoke;">Checkout &raquo;</h4></div>
	</div>
	<div class="cart-view-table-back">
	<form method="post" action="cart_update.php">
	<table width="100%" class="table-striped table-condensed" cellpadding="6" cellspacing="0">
		<thead>
			<tr>
				<th>Quantity</th>
				<th>Name</th>
				<th>Price</th>
				<th>Total</th>
				<th>Remove</th>
			</tr>
		</thead>
	  <tbody>
	 	<?php
		if(isset($_SESSION["cart_products"])) //check session var
	    {
			$total = 0; //set initial total value
			$b = 0; //var for zebra stripe table 
			foreach ($_SESSION["cart_products"] as $cart_itm)
	        {
				//set variables to use in content below
				$product_name = $cart_itm["product_name"];
				$product_qty = $cart_itm["product_qty"];
				$product_price = $cart_itm["product_price"];
				$product_code = $cart_itm["product_id"];
				// $product_color = $cart_itm["product_color"];
				$subtotal = ($product_price * $product_qty); //calculate Price x Qty
				
			   	$bg_color = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe 
			    echo '<tr class="'.$bg_color.'">';
				echo '<td><input type="text" size="2" style="border-radius:1px; text-align:center;" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
				echo '<td>'.$product_name.'</td>';
				echo '<td>'.$currency.$product_price.'</td>';
				echo '<td>'.$currency.$subtotal.'</td>';
				echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /></td>';
	            echo '</tr>';
				$total = ($total + $subtotal); //add subtotal to total var
	        }
			
			$grand_total = $total + $shipping_cost; //grand total including shipping cost
			foreach($taxes as $key => $value){ //list and calculate all taxes in array
					$tax_amount     = round($total * ($value / 100));
					$tax_item[$key] = $tax_amount;
					$grand_total    = $grand_total + $tax_amount;  //add tax val to grand total
			}
			
			$list_tax       = '';
			foreach($tax_item as $key => $value){ //List all taxes
				$list_tax .= $key. ' : '. $currency. sprintf("%01.2f", $value).'<br />';
			}
			$shipping_cost = ($shipping_cost)?'Shipping Cost : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';
		}
	    ?>
	    <tr><td colspan="5"><span style="float:right;text-align: right;"><?php echo $shipping_cost. $list_tax; ?>Amount Payable : <?php echo sprintf("%01.2f", $grand_total);?></span></td></tr>
	    <tr><td colspan="5"><a href="index.php" class="button btn btn-primary " style="margin-left:80%;">Add More Items</a> &nbsp; &nbsp;<button type="submit" class="btn btn-success pull-right">Update</button> &nbsp; &nbsp;</td> </tr>
	  </tbody>
	</table>
	<input type="hidden" name="return_url" value="<?php 
	$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	echo $current_url; ?>" />
	</form>
</div>
<div class="col-md-6 col-md-offset-3 additional-info" style="box-shadow:0px 0px 5px dimgrey; border-radius:10px;">
	<form action="thankyou.php" method="post" >
		  <?php
				   if ( isset($errMSG) ) {
				    
				    ?>
				       <div class="form-group">
				             <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
				    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
				                </div>
				             </div>
				                <?php
				   }
				   ?>
		 <div class="form-group">
		 	<hr/>

                <h5 class="text-warning">Give us your Shipping address---</h5>
             <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-address-card-o"></span></span>

             		<textarea class='form-control' style="resize:none;" name="address" class="form-control"></textarea> 
                	<span class="text-danger"><?php echo $addError; ?></</span>
				
                </div><br/>

                <div class="input-group">
                <span class="input-group-addon"><span>+91</span></span>
             		<input type="number" class='form-control' style="resize:none;" name="contact" class="form-control" placeholder="Enter your contact address... ">   
                <span class="text-danger"><?php echo $contError; ?></</span>
                </div>
                <hr/>
                <div class="input group">
                	<input type="submit" name ="submit" class="btn btn-success form-control"/>
                </div>
            </div>
	</form>
</div>







<?php
include('footer2.php');
?>
</div>
