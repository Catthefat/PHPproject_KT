<?php
include('../includes/class-autoload.inc.php');
$pdo = new PDO('mysql:host=localhost;dbname=id18415500_products_crud1', 'id18415500_products1', 'ct\Y]>&M|6w)OE#B');

if (isset($_POST['delete-checkbox'])) {
    if (isset($_POST['id'])) {
        foreach ($_POST['id'] as $id) {
            $stmt = $pdo->prepare('DELETE FROM products_crud WHERE id = :id');
            $stmt->bindValue('id', $id);
            $stmt->execute();
        }
    }
}
header("location: ../index.php");
