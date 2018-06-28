<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: index.php");
  exit;
 }
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
?>

<html>
<head>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link href="adminstylesheet.css" rel="stylesheet" type="text/css" media="all" />
	<link href="animate.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/font-awesome.css" rel="stylesheet"> 
	<title>Welcome - <?php echo $userRow['userEmail']; ?></title>
</head>
<body>
<?php 
include_once('header.php');
include_once('sidebar.php');
include_once('footer2.php');
?>
</body>
</html>