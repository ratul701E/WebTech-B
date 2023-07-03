<?php

    if(!isset($_POST['submit'])) {header('location: signup.php');}

    $con = mysqli_connect('localhost', 'root', '', 'ratul');
    
    $username = $_POST['username'];
    $role = $_POST['role'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];


    if($password != $cpassword) header('location: signup.php?err=1');

    else{
        $sql = "INSERT INTO user Values(
                '$username',
                '$first_name',
                '$last_name',
                '$email',
                '$phone',
                '$gender',
                '$address',
                '$country',
                '$password',
                '$role'
            );";

        if(mysqli_query($con, $sql) === false){
            
        }
        else{
            header('location: signup.php');
        }
    }

    
?>