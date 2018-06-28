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
?>
<div class="col-md-6" style="background-color: white;border:2px ridge floralwhite; margin-left: 20%;margin-right:10%;margin-top: 20px;border-radius:15px;box-shadow:0px 0px 10px dimgrey;height:200px !important">
  <!-- <font>Admin</font> -->
  <span style="font-size:1.5em;margin-top:5%;">&nbsp;Hi' 
          <?php echo $userRow['userEmail']; ?>&nbsp;</span><br/><br/>
          
          <img src=<?php echo "image/".$_SESSION['user'].".png" ?> style="padding: 0px; " class='pull-right'/>
            <span class="glyphicon glyphicon-log-out btn btn-danger" style="margin-top: 90px; box-shadow: 0px 0px 20px grey;font-weight: bolder; " ><a href="logout.php?logout" style="color:white;text-decoration: none;">&nbsp;SignOut</a></span>
 </div>        
  <?php       

include_once('footer2.php');
?>
</body>
</html>