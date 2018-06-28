<?php
    include_once('Dbconnect.php');
    if(isset($_POST['upload']))
    {
        $file_name = $_FILES['image']['name'];
        //echo $file_name;      // This will return a Array type.
        //print_r($file_name);  // To Print all attributes of array.
       $file_type = $_FILES['image']['type'];
        $file_size = $_FILES['image']['size'];
        $file_tmp_loc = $_FILES['image']['tmp_name'];
        $file_taget_dir = "uploads/" . $file_name;
        echo $file_type;

        $category_name = stripslashes($_POST['cat_name']);
        

        $sql = "INSERT INTO category VALUES ('$category_name')";

        if($file_type != "image/jpeg" && $file_type != "image/png" && $file_type != "image/jpg" && $file_type != "image/gif" )
        {
            echo "<script> alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.'); </script>";
            //echo "<script> location.href='Category_upload.php';</script>";
        }
        else
        {
            if(mysqli_query($conn, $sql))
                echo "<script> alert('Data Successfully Inserted.'); </script>";
            else
                echo "<script> alert('Data Not Inserted.'); </script>";

            if(move_uploaded_file($file_tmp_loc, $file_taget_dir))
                echo "<script> alert('Image Successfully Uploaded.'); </script>";
            else
                echo "<script> alert('Unknown Error Occured.!'); </script>";

       
         echo "<script> location.href='category_upload.php'; </script>";
   
        }
  
    }
?>