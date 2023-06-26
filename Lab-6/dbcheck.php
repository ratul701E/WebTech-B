<?php
    $con = mysqli_connect('localhost', 'root', '', 'product_db');
    if($con) echo "connected";
    else echo "failed";
?>