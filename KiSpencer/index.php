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
<body>
	<div class="container">
	<?php
	 include('header.php');
	 include('sidebar_category.php');
	
	// include('slider.php');
	 include_once('Connection.php');
	 $qry = "SELECT category_name FROM category";
	 $result = mysqli_query($con, $qry);
	 $flag = 1;
	 $no_of_rows = mysqli_num_rows($result);
	    echo "<div class='navbar text-center text-primary'>";
            echo "<h3> --Top Categories--</h3>";
        echo "</div>";
	 echo "<div class='row' >";
	 for($k = 1; $k <= 4; $k++) 
	 { 
	 	 
	 	 echo "<div class='col-md-3' >";
	 	 echo "<a href='".$k.".php'><img src='image/".$k.".jpg' class='img-responsive img-rounded' style='height:180px; width:250px;margin:auto !important'/ ></a>";
	 	 echo "<br/>";
				 while($row = mysqli_fetch_array($result))
				 {
				 	$flag++;
				 	echo "<h4 class='text-center text-success' >$row[0]</h4>";
				 		if($flag > $k)
				 		break;

				 }
		 echo "</div>";
	}
	echo "</div>";
  echo "<div class='navbar text-center text-primary'>";
            echo "<h3> --Top Products--</h3>";
            include('top_products.php');
        echo "</div>";
?>
 <?php
           include('advertise.php');
 ?>
 <div class="clearfix"></div>
<div class="navbar text-center text-primary" style="padding-top: 20px;">
           <h3> --Our Brands--</h3>
           <?php
           include('brand_slider.php');
           ?>
        </div>
	<div class="clearfix"></div>
        <div class="row">
	        <div class="col-md-12">

	        	<img src="image/expressbanner.png" width="100%;" / >
	        </div>
        </div>
        <div class="clearfix"></div>
        <?php
        include('footer.php');
        ?>




	</div>
</body>
</html>