<?php

include_once("connection.php");

$msg_delete =
    '<div class="text-center">
            <h4><strong> Esta seguro que desea borrar este item?</strong></h4>

            <div class="col-lg-12">
                <button name="deleteProduct" class="btn btn-danger col-lg-12">
                    <i class="fa fa-save"></i>
                    Eliminar producto
                </button>
            </div>
        </div>
';

$id_product = $_GET["id"];

if (isset($_POST["deleteProduct"])) {

    $sql = "delete from products where id=" . $id_product;

    if ($con->query($sql)) {
        $msg_delete = '<div class="panel panel-success text-center" style="padding:5px"><h4 class="text-success">Se eliminó el producto!</h4></div>';
    } else {
        $msg_delete = '<div class="panel panel-danger text-center" style="padding:5px"><h4 class="text-danger">Hubo un problema con la baja!</h4></div>';
    }


}
?>

<div class="panel-body">
    <form action="" method="POST">
        <?php echo $msg_delete ?>
    </form>
</div>
