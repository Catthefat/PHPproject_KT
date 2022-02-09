<html>
<style>
    <?php
    include('products.class.php');
    include 'Style/Style.css';
    ?>
</style>

<?php
class ProdView extends Products
{
    public $product = "";

    public function showProduct()
    {
        $results = $this->getProduct();
        while ($row = $results->fetch()) { ?>

            <div class="box">
                <input type="checkbox" class="delete-checkbox" value="<?php echo $row['id']; ?>" name="id[]" />
                <p> <?php echo $row['sku']; ?></p>
                <p> <?php echo $row['name']; ?></p>
                <p> <?php echo $row['price']; ?> $</p>
                <?php
                if ($row['type'] === "furniture") {
                ?><p>Dimensions: <?php echo $row['funHeight'] . "x" . $row['funWidth'] . "x" . $row['funLength'] ?></p>
                <?php
                } else if ($row['type'] === "book") {
                ?><p>Weight: <?php echo $row['bookWeight'] ?>KG</p>
                <?php
                } else if ($row['type'] === "dvd") {
                ?><p>Size: <?php echo $row['dvdSize'] ?>MB</p>
                <?php
                }
                ?>
            </div>
<?php
        }
    }
}
?>

</html>