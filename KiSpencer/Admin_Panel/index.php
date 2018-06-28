<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 // it will never let you open index(login) page if session is set
 if ( isset($_SESSION['user'])!="" ) {
  header("Location: home.php");
  exit;
 }
 
 $error = false;
 
 if( isset($_POST['btn-login']) ) { 
  
  // prevent sql injections/ clear user invalid inputs
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  // prevent sql injections / clear user invalid inputs
  
  
  if(empty($email)){
   $error = true;
   $emailError = "Please enter your email address.";
  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  }

  if(empty($pass)){
   $error = true;
   $passError = "Please enter your password.";
  }
  
  // if there's no error, continue to login
  if (!$error) {
   
   $password = hash('sha256', $pass); // password hashing using SHA256
  
   $res=mysql_query("SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
   $row=mysql_fetch_array($res);
   $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
   
   if( $count == 1 && $row['userPass']==$password ) {
    $_SESSION['user'] = $row['userId'];
    header("Location: home.php");
   } else {
    $errMSG = "Incorrect Credentials, Try again...";
   }
    
  }
  
 }
?>



<html>
<head>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link href="adminstylesheet.css" rel="stylesheet" type="text/css" media="all" />
	<link href="animate.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/font-awesome.css" rel="stylesheet"> 
</head>
<body>
<div class="container-fluid top-banner">
		<div class="logo-section">
			<a href="#"><h1><span class="logo">Ki</span>Spencer</h1></a>
		</div>
	</div>	
	<div class="container">
	<span class=" " style="color:ghostwhite;font-family: cursive;"><h3 class="animated 6s bounce">please Login to enter the admin zone...
	</h3></span>

	</div>
	<div class="container main-content-area">
		<div class="row">
		<legend></legend>
		<div class="container">

			 <div id="login-form">
			    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
			    		<span><h4 class="animated infinite fadeOut" style="color: white;">Sign In</h4></span>
			
			     <div class="col-md-12">
			        
			        
			            <?php
			   if ( isset($errMSG) ) {
			    
			    ?>
			    <div class="form-group">
			             <div class="alert alert-danger">
			    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
			                </div>
			             </div>
			                <?php
			   }
			   ?>
			            
			            <div class="form-group">
			             <div class="input-group">
			                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
			             <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email;?>" maxlength="40"/>
			                </div>
			                <span class="text-danger"><?php echo $emailError; ?></span>
			            </div>
			            
			            <div class="form-group">
			             <div class="input-group">
			                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
			             <input type="password" name="pass" class="form-control" placeholder="Your Password" maxlength="15" />
			                </div>
			                <span class="text-danger"><?php echo $passError; ?></span>
			            </div>
			            
			            <div class="form-group">
			             <button type="submit" class="btn btn-block btn-primary" name="btn-login">Sign In</button>
			            </div>
			            
			        
			        </div>
			   
			    </form>
			    </div> 
			</div>

	




		</div>	
	</div>
	<div class="container adm-role">
		<div class="inner-adm-role">
			<h2 style="font-family: tahoma">Administration Responsibilty</h2>
			You are playing the important role for this online grocery system, You'll carry out a range of tasks within the administration department, from maintaining systems and compiling data and reports to dealing with enquiries in an efficient and helpful manner. A positive attitude, good communication skills and the ability to work well with others are essential. Any knowledge of cash office, personnel or ordering systems would give you a head start.
		</div>
	</div>
	<div class="container-fluid footer-bar">
	<nav class="navbar-fixed-bottom">
		<div class="copy-right-grids">
				<div class="copy-left">
						<p class="footer-gd">© 2017 'Ki-spencer.com'. All Rights Reserved | Design by <a href="#" target="_blank">Ki-spencer</a></p>
				</div>
				<div class="copy-right">
					<ul>
						<li><a href="#">Company Information</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms & Conditions</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
	</nav>
	</div>
</body>
</html>
<?php ob_end_flush(); ?>
