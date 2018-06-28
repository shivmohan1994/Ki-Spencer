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
</head>
<?php
 ob_start();
 session_start();
 include_once '/Admin_Panel/dbconnect.php';
 $error = false;
if(isset($_POST['submit']))
{
	$name=trim($_POST['customer_name']);
	$name=strip_tags($name);
	$name=htmlspecialchars($name);

	$email=trim($_POST['customer_mail']);
	$email=strip_tags($email);
	$email=htmlspecialchars($email);
	
	$msg=($_POST['customer_msg']);
}
if(empty($email))
{
	$error = true;
	$emailError = 'Please Enter mail Address...';
}

if(empty($msg))
{
	$error = true;
	$msgError = 'Message Box is empty!!! ';
}
if( !$error ) {
   
   $query = "INSERT INTO feedback(name, mail, msg) VALUES('$name','$email','$msg')";
   $res = mysql_query($query);
   if ($res) {
    $errTyp = "success";
    $errMSG = "Thanks for feedback....Enjoy shoppingg...";
    header("Location:index.php");
    unset($name);
    unset($email);
    unset($pass);
   } else {
    $errTyp = "danger";
    $errMSG = "Something went wrong, try again later..."; 
   } 
    
  }

?>







<body>

<div class="container">
<?php
include('header.php');
?>
	<div class="col-md-8 col-md-offset-2">
	    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
			<div class="form-group">
				       <hr />
				     </div>
				            
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
	    			<input type="text" name="customer_name" size="10" placeholder="Enter user name..." class="form-control text-center" />
				</div>
				<div class="form-group">
	    			<input type="email" name="customer_mail" size="10" placeholder="Mail address...." class="form-control text-center" />
	    			<span class="text-danger"><?php echo $emailError; ?></span>
				</div>
				<div class="form-group">
	    			<textarea  height="100" width="100" name="customer_msg" class="form-control" placeholder="typing......" style="resize: none;"></textarea>
					<span class="text-danger"><?php echo $msgError; ?></span>
				</div>
				<div class="form-group text-center">
				<button name="submit" class="btn btn-success" >Submit</button>
				<button name="reset" class="btn btn-danger" value="reset" >Reset</button>
    			</div>
    		</form>
    </div>
	</div>
	</body>
	</html>