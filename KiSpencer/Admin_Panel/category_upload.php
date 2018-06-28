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
      <form method="post" action="category_process.php">
        <div class="form-group">
          <input class="form-control" type="text" maxlength="10" name="cat_name" placeholder="Enter category name...."  style="margin-top: 13px;" />
        </div>
        <div class="form-group">
          <input class="form-control" type="file" maxlength="10" name="image" />
        </div>
        <div class="form-group">
          <button name="upload" class="btn btn-success">upload</button>
        </div>
      </form>
    </div>
  </div>
<?php include('footer2.php');?> 
</body>
</html>