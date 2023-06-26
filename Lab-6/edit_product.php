<?php
    if(!isset($_POST['update'])) header('location: B-DisplayProduct.php');
    else{
        $name = $_POST['name'];
        $pre_name = $_POST['pre_name'];
        $b_p = $_POST['b_p'];
        $s_p = $_POST['s_p'];
        
        if(isset($_POST['display'])) $display = 'true';
        else $display = 'false';



        $con = mysqli_connect('localhost', 'root', '', 'product_db');
        $sql = "UPDATE products SET name='$name', b_p='$b_p', s_p='$s_p', display='$display' where name='$pre_name';";
        mysqli_query($con, $sql);
        
        header('location: B-DisplayProduct.php');
    }

?>