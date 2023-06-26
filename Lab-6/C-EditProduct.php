
<?php
    if(!isset($_GET['name'])) header('location: B-DisplayProduct.php');
    else{
        $con = mysqli_connect('localhost', 'root', '', 'product_db');
        $res = mysqli_query($con, "SELECT * FROM products WHERE name='".$_GET['name']."';");

        $row = mysqli_fetch_assoc($res);
        $name = $row['name'];
        $b_p = $row['b_p'];
        $s_p = $row['s_p'];
        $display = $row['display'];

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>EdiT</title>
</head>
<body>
    <fieldset>
        <legend><h3>EDIT PRODUCT</h3></legend>
        <form action="edit_product.php" method="post">
            <table>
                <tr>
                    <td>Name</td>
                </tr>
                <tr>

                    <td>
                        <input type="text" name="name" value="<?php echo $name ?> " required>
                        <input type="hidden" name="pre_name" value="<?php echo $name?>">
                    </td>
                </tr>
                <tr>
                    <td>Buying Price</td>
                </tr>
                <tr>
                    <td><input type="text" name="b_p" value="<?php echo $b_p ?>" required></td>
                </tr>
                <tr>
                    <td>Selling Price</td>
                </tr>
                <tr>
                    <td><input type="text" name="s_p" value="<?php echo $s_p ?>" required></td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="display" value="true" <?php if($display === 'true') echo 'checked' ?>> Display</td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
                <tr>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>