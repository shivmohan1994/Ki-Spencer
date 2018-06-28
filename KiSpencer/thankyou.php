<div class="container">
<?php
 include('header.php');
 session_start();
 include('Connection.php');
 if(isset($_SESSION['customer']))
 {
if(isset($_POST['submit']))
{
	$addres = $_POST['address'];
	$contct = $_POST['contact'];
	$cust_id = $_SESSION['customer'];
	$qry1 = "SELECT customerName FROM customer WHERE customerId = ".$cust_id.";";
	$res = mysqli_query($con, $qry1);
		if (!$res) {
				    printf("Error: %s\n", mysqli_error($con));
				    exit();
			}
	$row = mysqli_fetch_array($res);
	//echo $row[0];
	$query = "INSERT INTO orders(Address, contact, customer_id, customer_email) VALUES ('".$addres."','".$contct."','".$cust_id."','".$row[0]."');";
	//echo $query;
	if(mysqli_query($con, $query))
		?>
	<div class="navbar"></div>
	<div class="row">
			<div class="col-md-12">
					<i class="fa fa-check fa-5x img-circle text-success"  aria-hidden="true" style="margin-left:46%;border:5px solid green;"></i><br/>
					<div class="col-md-12">
					<h1 class="text-center animated infinite pulse">Thank you</h1>
					</div>
					<div class="col-md-12">
					<h2 class="text-primary text-center">Hello.. <?php echo $row[0];?></h2>
					</hr>
					</div>
					<div class="col-md-12">
					<h3 class="text-center text-muted">Your submission is received and we will contact you soon..</h3>
					
				
			</div>		

	</div>




<?php
}
}
?>
</div>