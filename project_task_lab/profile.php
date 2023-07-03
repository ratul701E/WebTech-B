<?php
    session_start();
    if(!isset($_SESSION['logged_in']) ) header('location: signin.php');
    if(!isset($_GET['username'])) header('location: signin.php');
    $username = $_GET['username'];

    $con = mysqli_connect('localhost', 'root', '', 'ratul');

    $sql = "SELECT * FROM user where username='$username';";
    $res = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($res);

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
</head>
<body>

    <fieldset>
        <legend>
            Profile • @<?= $user['username']?> • <?=$user['role'] ?>
        </legend>

        <table>
            <tr>
                <td colspan="2">
                    <img src="profile.jpg" alt="" width="200"> <br> <br> <br>
                    <fieldset>
                        <table>
                            <?php
                                if($user['role'] == 'Professional'){
                                    ?>
                                        <tr><td><a href="">Followers</a><hr></td></tr>
                                        <tr><td><a href="">Communication</a><hr></td></tr>
                                        <tr><td><a href="">My Paths</a><hr></td></tr>
                                        <tr><td><a href="">Discussion</a><hr></td></tr>
                                        <tr><td><a href="">Update Profile</a><hr></td></tr>
                                        <tr><td><a href="">Change Password</a><hr></td></tr>

                                    <?php
                                }
                                else if($user['role'] == 'Aspirant'){
                                    ?>
                                        <tr><td><a href="">Following</a><hr></td></tr>
                                        <tr><td><a href="">Communication</a><hr></td></tr>
                                        <tr><td><a href="">Discussion</a><hr></td></tr>
                                        <tr><td><a href="">Update Profile</a><hr></td></tr>
                                        <tr><td><a href="">Change Password</a><hr></td></tr>

                                    <?php
                                }

                                else if($user['role'] == 'Admin'){
                                    ?>
                                        <tr><td><a href="">Manage Users [ Aspirant, Professional ]</a><hr></td></tr>
                                        <tr><td><a href="">Manage Discussion Post</a><hr></td></tr>
                                        <tr><td><a href="">Professional List [ For Verify]</a><hr></td></tr>
                                        <tr><td><a href="">Update Profile</a><hr></td></tr>
                                        <tr><td><a href="">Change Password</a><hr></td></tr>

                                    <?php
                                }
                                else if($user['role'] == 'SuperAdmin'){
                                    ?>
                                        <tr><td><a href="">Manage Users [ Aspirant, Professional, Admin ]</a><hr></td></tr>
                                        <tr><td><a href="">Manage Discussion Post</a><hr></td></tr>
                                        <tr><td><a href="">Professional List [ For Verify]</a><hr></td></tr>
                                        <tr><td><a href="">Update Profile</a><hr></td></tr>
                                        <tr><td><a href="">Change Password</a><hr></td></tr>

                                    <?php
                                }
                            ?>
                        </table>
                            
                    </fieldset>
                </td>

                <td width="20"> </td>

                <td>
                    <h3>Account Informaion</h3>
                    <table>
                        <tr>
                            <td><b>Name:</b></td>
                            <td><?=$user['first_name']." ". $user['last_name']?></td>
                        </tr>
                        <tr>
                            <td><b>Email:</b></td>
                            <td><?=$user['email']?></td>
                        </tr>
                        <tr>
                            <td><b>Phone:</b></td>
                            <td><?=$user['phone']?></td>
                        </tr>
                        <tr>
                            <td><b>Address:</b></td>
                            <td><?=$user['address']?></td>
                        </tr>
                        <tr>
                            <td><b>Country:</b></td>
                            <td><?=$user['country']?></td>
                        </tr>
                    </table>



                </td>
            </tr>
        </table>
    </fieldset>

    <a href="logout.php">Logut</a>
    
</body>
</html>