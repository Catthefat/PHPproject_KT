<?php
include('../includes/class-autoload.inc.php');
include('products.class.php');

$products = new Products();
$firstname = '';
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    if (preg_match("/[^a-zA-Z0-9]+/", $firstname)) {
        echo 'Invalid name contains special characters';
    } else {
        echo $firstname;
    }
}

if (isset($_POST['submit'])) {
    $sku = $_POST['sku'];
    if (preg_match("/[^a-zA-Z0-9_-]+/", $sku)) {
        header("location: ../add-product.php?sku=invalid");
        exit();
    }
    $name = $_POST['name'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $dvdSize = $_POST['dvdSize'];
    $bookWeight = $_POST['bookWeight'];
    $funHeight = $_POST['funHeight'];
    $funWidth = $_POST['funWidth'];
    $funLength = $_POST['funLength'];

    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if ($type === "book") {
        if (empty($bookWeight)) {
            header("location: ../add-product.php?book=empty");
            exit();
        }
        $products->setProduct($sku, $name, $price, $type, $dvdSize, $bookWeight, $funHeight, $funWidth, $funLength);
        header("location: ../index.php");
    } elseif ($type === "dvd") {
        if (empty($dvdSize)) {
            header("location: ../add-product.php?dvd=empty");
            exit();
        }
        $products->setProduct($sku, $name, $price, $type, $dvdSize, $bookWeight, $funHeight, $funWidth, $funLength);
        header("location: ../index.php");
    } elseif ($type === "furniture") {
        if (empty($funHeight) || empty($funLength) || empty($funWidth)) {
            header("location: ../add-product.php?furniture=empty");
            exit();
        }
        $products->setProduct($sku, $name, $price, $type, $dvdSize, $bookWeight, $funHeight, $funWidth, $funLength);
        header("location: ../index.php");
    } else {
        $products->setProduct($sku, $name, $price, $type, $dvdSize, $bookWeight, $funHeight, $funWidth, $funLength);
        header("location: ../index.php");
    }
}
