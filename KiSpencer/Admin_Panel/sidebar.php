<html>
<head>
<title></title>
  <!-- css tags -->
  <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link href="animate.css" rel="stylesheet" type="text/css" media="all" />
  <link href="../css/font-awesome.css" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="sidebar.css">
  <!-- script tags -->
  <script type="text/javascript" href="sidebar.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>
<body>
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
<nav class="navbar navbar sidebar" role="navigation">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="fa fa-connectdevelop"></i></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="AdminHome.php">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">View<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-eye-open"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="view_tables.php">Tables</a></li>
            <li><a href="feedbacks.php">User-Feedback's</a></li>
            <li><a href="view_categories.php">Categories</a></li>
            <li><a href="view_products.php">Product</a></li>
            <li><a href="View_Users">Reg. Users</a></li>
            </ul>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Update <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-pencil"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="category_upload.php">Category</a></li>
            <li><a href="product_upload.php">Product's</a></li>
          </ul>
      </ul>
        <div class="clearfix"></div>
        
    </div>
  </div>
</nav>
