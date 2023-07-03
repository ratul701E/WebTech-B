<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
</head>
<body>
    <fieldset>
        <legend>Sign In</legend>
        <form action="signin_process.php" method="post">
            <table align = "center">
                <tr>
                    <td>Username/Email</td>
                    <td><input type="text" name="username" id=""></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" id=""></td>
                </tr>
                <tr>
                    <td colspan = "2"><input type="submit" name="submit" value="Sign In" id=""></td>
                </tr>
                <tr>
                    <td colspan = "2">Not a member? <a href="signup.php">Singup here</a> </td>
                </tr>
                <tr>
                    <td colspan = "2"> <a href="">Forget Password</a> </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>