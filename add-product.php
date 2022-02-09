<?php
include 'includes/class-autoload.inc.php';
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
    <script src="Script/Script.js"></script>
    <title>Add Product Page</title>
</head>

<body>
    <form action="classes/post.class.php" method="POST" id="product_form">
        <div class="header">
            <div class="title">
                <h1>Product Add</h1>
            </div>
            <div id="buttons">
                <button onclick="myFunction()" class="submit-button" type="submit" class="btn btn-primary" name="submit">Save</button>
                <button class="cancel-button" onclick="location.href='https://ktphpproj.000webhostapp.com'" type="button">Cancel</button>
            </div>
        </div>
        <div id="form">
            <div class="form-group">
                <label>SKU</label>
                <input required maxlength="16" type="text" placeholder="Enter SKU" name="sku" value="<?php $sku ?>" id="sku">
            </div>
            <div class="form-group">
                <label>Name</label>
                <input required type="text" maxlength="16" placeholder="Enter Products Name" name="name" value="<?php $name ?>" id="name">
            </div>
            <div class="form-group">
                <label>Price ($)</label>
                <input required max="99999999999" min="0" type="number" step=".01" placeholder="Enter Price in USD" name="price" value="<?php $price ?>" id="price">
            </div>
            <div class="form-group">
                <label for="type">Type Switcher</label>
                <select required class="selectpicker" title="Type" id="productType" name="type">
                    <option value="" disabled selected hidden>Choose one of the folowing...</option>
                    <option value="dvd">DVD</option>
                    <option value="book">Book</option>
                    <option value="furniture">Furniture</option>
                </select>
                <br>
                <br>
                <?php
                $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if (strpos($fullUrl, "book=empty") == true) {
                    echo "<p id='error'>Please, provide book weight!</p>";
                } elseif (strpos($fullUrl, "dvd=empty") == true) {
                    echo "<p id='error'>Please, provide DVD size!</p>";
                } elseif (strpos($fullUrl, "furniture=empty") == true) {
                    echo "<p id='error'>Please, provide furniture dimensions!</p>";
                } elseif (strpos($fullUrl, "sku=invalid") == true) {
                    echo "<p id='error'>Special characters are not allowed!</p>";
                }
                ?>
                <div id="content">
                    <div id="dvd" class="data">
                        <div class="form-group">
                            <label class="input-label">Size (MB)</label>
                            <input min="0" type="number" max="1000000000" step=".1" name="dvdSize" value="<?php $dvdSize ?>" id="size">
                        </div>
                    </div>
                    <div id="book" class="data">
                        <label class="input-label">Weight (KG)</label>
                        <input min="0" type="number" step=".1" max="999999" name="bookWeight" value="<?php $bookWeight ?>" id="weight">
                    </div>
                    <div id="furniture" class="data">
                        <label class="input-label">Height (CM)</label>
                        <input min="0" type="number" step="1" name="funHeight" max="999999" value="<?php $funHeight ?>" id="height"><br>
                        <label class="input-label">Width (CM)</label>
                        <input min="0" type="number" step="1" name="funWidth" max="999999" value="<?php $funWidth ?>" id="width"><br>
                        <label class="input-label">Length (CM)</label>
                        <input min="0" type="number" step="1" name="funLength" max="999999" value="<?php $funLength ?>" id="length"><br>
                    </div>
                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script>
                    showTable();
                </script>
            </div>
    </form>
</body>

</html>