<?php
    include_once('Dbconnect.php');
    if(isset($_POST['upload']))
    {
        $cat_id = $_POST['cat_id'];
        $name   = $_POST['product_name'];
        $price  = $_POST['product_price'];
        $qty    = $_POST['product_quantity'];

        $qry = "INSERT INTO product(product_name, price, category_id, quantity) VALUES ('".$name."','".$price."','".$cat_id."','".$qty."')";
        if(mysql_query($qry))
        {
            echo "<script> alert('Successfully'); </script>";
        }
        else
        {
            echo "<sccript> alert('Unsuccess.!'); </script>";
        }
        
    }
?>