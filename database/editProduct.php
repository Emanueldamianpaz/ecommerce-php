<?php

include_once("connection.php");

$msg_edit = '';

$id_product = $_GET["id"];

$sql = 'SELECT * FROM products where id=' . $id_product;
$results = $con->query($sql);
$product = $results->fetch();

if (isset($_POST["editProduct"])) {

    $sql =
        "UPDATE products SET" .
        " id=" . $_POST["id"] . "," .
        " name='" . $_POST["name"] . "'," .
        " description='" . $_POST["description"] . "'," .
        " stock=" . $_POST["stock"] . "," .
        " price=" . $_POST["price"] . "," .
        " id_type=" . $_POST["id_type"] . "," .
        " size='" . $_POST["size"] . "'," .
        " stars=" . $_POST["stars"] . "" .
        " where id=" . $id_product;

    $msg_edit = $con->query($sql) ? '<div class="panel panel-success text-center" style="padding:5px"><h4 class="text-success">Se modificó el producto!</h4></div>' : '<div class="panel panel-danger text-center" style="padding:5px"><h4 class="text-danger">Hubo un problema con la modificación!</h4></div>';


}
?>

<div class="panel-body">
    <form action="" method="POST">
        <fieldset>
            <div class="form-group col-lg-2">
                <label>ID</label>
                <input class="form-control" value="<?php echo $product["id"] ?>" placeholder="ID" name="id" type="text"
                       required>
            </div>
            <div class="form-group col-lg-4">
                <label>Name</label>
                <input class="form-control" value="<?php echo $product["name"] ?>" placeholder="Name" name="name"
                       type="text" required>
            </div>
            <div class="form-group col-lg-2">
                <label>Stock</label>
                <input class="form-control" value="<?php echo $product["stock"] ?>" placeholder="Stock" name="stock"
                       type="number" required>
            </div>
            <div class="form-group col-lg-2">
                <label>Price</label>
                <input class="form-control" value="<?php echo $product["price"] ?>" placeholder="Price" name="price"
                       type="text" required>
            </div>
            <div class="form-group col-lg-2">
                <label>Type_product</label>
                <select class="form-control" name="id_type" placeholder="Type">
                    <?php
                    $sql = 'SELECT * FROM typeProducts ORDER BY 1';
                    $results = $con->query($sql);

                    foreach ($results as $row) {
                        ?>
                        <option class="text-capitalize" value="<?php echo $row['id'] ?>">
                            <?php echo $row['name'] . ' - ' . $row['genre'] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group col-lg-6">
                <label>Description</label>
                <textarea style="resize: none;" class="form-control"
                          name="description" placeholder="Description"
                          rows="3" required><?php echo $product["description"] ?></textarea>
            </div>
            <div class="form-group col-lg-3">
                <label>Size</label>
                <select class="form-control" name="size" placeholder="Size">
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                    <option>XXL</option>

                </select>
            </div>
            <div class="form-group col-lg-3">
                <label>Stars</label>
                <select class="form-control" value="<?php echo $product["stars"] ?>" name="stars" placeholder="Stars">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>

                </select>
            </div>

            <div class="col-lg-6">
                <button name="editProduct" class="btn btn-success col-lg-12">
                    <i class="fa fa-save"></i>
                    Editar producto
                </button>
            </div>
        </fieldset>
    </form>
    <?php echo $msg_edit ?>
</div>
