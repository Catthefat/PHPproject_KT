<?php
include('dbh.class.php');


class Products extends Dbh
{
    protected function getProduct()
    {
        $sql = "SELECT * FROM products_crud ORDER BY id DESC";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);
        return $stmt;
    }

    public function setProduct($sku, $name, $price, $type, $dvdSize, $bookWeight, $funHeight, $funWidth, $funLength)
    {
        $sql = 'INSERT INTO products_crud (sku, name, price, type, dvdSize, bookWeight, funHeight, funWidth, funLength) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$sku, $name, $price, $type, $dvdSize, $bookWeight, $funHeight, $funWidth, $funLength]);
        header("location: {$_SERVER['HTTP_REFERER']}");
    }
}
