 <?php
    if(!isset($_POST['save'])) header('location: A-AddProduct.php');
    else{
        $name = $_POST['name'];
        $b_p = $_POST['b_p'];
        $s_p = $_POST['s_p'];
        
        if(isset($_POST['display'])) $display = 'true';
        else $display = 'false';



        $con = mysqli_connect('localhost', 'root', '', 'product_db');
        $sql = "INSERT INTO products VALUES('$name', '$b_p', '$s_p', '$display');";

        mysqli_query($con, $sql);
        header('location: B-DisplayProduct.php');
    }
?>