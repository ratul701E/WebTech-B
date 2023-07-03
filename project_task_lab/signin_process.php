<?php
    session_start();

     if(!isset($_POST['submit'])) {header('location: signin.php');}
     $con = mysqli_connect('localhost', 'root', '', 'ratul');

     $username = $_POST['username'];
     $password = $_POST['password'];

     $sql = "SELECT * FROM user where (username='$username' or email='$username') && password='$password';";
     
     $res = mysqli_query($con, $sql);
     $users = mysqli_num_rows($res);
     $row = mysqli_fetch_assoc($res);

     if( $users == 1){
        //signin done
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $row['role'];
        header('location: profile.php?username='.$username);
     }
     else header('location: signin.php?');

?>