<!DOCTYPE html>
<html>
<head>
<title>Online Grocery Ordering</title>
<link rel="shortcut icon" type="image/x-icon" href="image/cart.ico" />
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link href="Admin_Panel/animate.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 

<!-- script -->
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<?php
	ob_start();
	session_start();
	require_once '/Admin_Panel/dbconnect.php';
	if(isset($_SESSION[customer]))
	{
	// select loggedin users detail
	$res = mysql_query("SELECT * FROM customer WHERE customerId=".$_SESSION['customer']);
	$customerRow=mysql_fetch_array($res);
	}
?>
<nav class="navbar navbar-inverse  header-navbar">
 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
 <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
  </button>
		<div class="row">
		  <div class="col-md-2">
			<a href="index.php" class="navabr-brand"><h3><div class="logo text-center">Ki</div></h3><img src="image/logo.png" height="40px" width="70px"></a>
		</div>
		<div class="col-md-10">
		<div class="col-md-10 collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
			<ul class="list-inline">
	     		<li>
					<form action="http://www.google.com/search" method="post" class="form-inline" style="margin: 3px;">
		    			<input type="text" class="form-control pull-left" name="search" size="50" placeholder="Enter search item...... "  />&nbsp
						<button name="btn" class="btn btn-danger form-control" size="10">Search</button>
				</form>
				</li>
				<li>
				<div class="login-out">
				<!--a href='view_cart_box.php'> <i class="fa fa-shopping-cart fa-2x" aria-hidden="true" style="color:white;"></i></a-->
					
				</li>

					<li>
						<div class="login-out" > <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $customerRow['customerEmail']; ?>&nbsp;<span class="caret"></span></div>
						 </li>
			
			<li>
					<?php
						 if(isset($_SESSION['customer'])) { ?>
					  <a class="link" href="logout.php?logout" style="text-decoration:none">
					<div class="login-out">  <i class="fa fa-sign-out fa-2x " aria-hidden="true"></i> Sign-out
					</div></a>
					</li>
				<?php 
				}
				else {
						?>
						<a class="link" href="login.php" style="text-decoration:none">
						<div class='login-out' ><i class="fa fa-user fa-2x " aria-hidden="true"></i> Sign in/Up</div>
						</a>
				<?php } ?>



	 		</li>
		</ul>

	</div>
	</div>
</div>
</nav>
