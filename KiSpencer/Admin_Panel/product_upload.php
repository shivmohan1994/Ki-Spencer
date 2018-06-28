<html>
<head>
  <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link href="adminstylesheet.css" rel="stylesheet" type="text/css" media="all" />
	<link href="animate.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/font-awesome.css" rel="stylesheet">
</head>
<body>
<?php include('header.php');?>
<?php include('sidebar.php');?>
  <div class="row center-block">
    <div class="col-md-6" style="padding:15px;margin:10%;background-color: white;border:2px ridge grey;box-shadow: 0px 0px 10px ghostwhite;border-radius:7px;"/>
      <form method="post" action="product_upload-process.php">
        <div class="form-group">
          <input class="form-control" type="number" maxlength="5" name="cat_id" placeholder="Enter Category Id...."  style="margin-top: 13px;" />
        </div>

        <div class="form-group">
          <input class="form-control" type="text" maxlength="50" name="product_name" placeholder="Enter product name...."/>
        </div>
        <div class="form-group">
          <input class="form-control" type="nnumber" maxlength="5" name="product_price" placeholder="Enter product price...." />
        </div>
        <div class="form-group">
          <input class="form-control" type="text" maxlength="10" name="product_quantity" placeholder="Enter Quantity in kg or gm..." />
        </div>
         <div class="form-group">
          <input class="form-control btn btn-success" type="submit" maxlength="10" name="upload" value="Upload" />
        </div>
      </form>
    </div>
  </div>
  <?php include('footer2.php');?> 
</body>
</html>