<?php
include 'includes/class-autoload.inc.php';
include 'classes/prodview.class.php';
?>
<style>
    <?php
    include 'Style/Style.css';
    ?>
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
</head>

<body>
    <form method="post" action="classes/delete.class.php">
        <div class="header">
            <div class="title">
                <h1>Product List</h1>
            </div>
            <div id="buttons">
                <button class="add-button" onclick="location.href='https://ktphpproj.000webhostapp.com/add-product.php'" type="button">ADD</button>
                <button class="dlt-checkbox" type="submit" name="delete-checkbox" value="delete-checkbox" />MASS DELETE
                </button>
            </div>
        </div>
        <div id="outer-box">
            <?php
            $testObj = new ProdView();
            echo $testObj->showProduct();
            ?>
        </div>
    </form>
</body>
<footer id="footer">
    <p>Scandiweb test assignment</p>
</footer>

</html>