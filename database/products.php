<?php

include_once("connection.php");

$msg_insert = '';


if (isset($_POST["editProduct"])) {

    $sql =
        "INSERT INTO products VALUES(" .
        $_POST["id"] . ",'" .
        $_POST["name"] . "','" .
        $_POST["description"] . "'," .
        $_POST["stock"] . "," .
        $_POST["price"] . "," .
        $_POST["id_type"] . ",'" .
        $_POST["size"] . "'," .
        $_POST["stars"] . ");";


    /* TODO modificacion
       if ($con->query($sql) === TRUE) {
            $msg_insert = '<div class="panel panel-success text-center" style="padding:5px"><h4 class="text-success">Se cargó el producto!</h4></div>';
        } else {
            $msg_insert = '<div class="panel panel-danger text-center" style="padding:5px"><h4 class="text-danger">Hubo un problema con la carga!</h4></div>';
        }
    */
}
?>


<div class="panel-body">
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered"
           id="example">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Stock</th>
            <th>Price</th>
            <th>ID_type</th>
            <th>Size</th>
            <th>Stars</th>
            <th>Editar/Eliminar</th>

        </tr>
        </thead>
        <tbody>

        <?php

        $sql = 'SELECT * FROM products ORDER BY 1';
        $results = $con->query($sql);

        foreach ($results as $row) {
            ?>


            <tr class="odd gradeX">
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['description'] ?></td>
                <td><?php echo $row['stock'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['id_type'] ?></td>
                <td><?php echo $row['size'] ?></td>
                <td><?php echo $row['stars'] ?></td>
                <td class="text-center">
                    <div class="btn-group">
                        <button data-toggle="modal" data-target="#modalEdit" class="btn btn-warning">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </button>
                        <button data-toggle="modal" data-target="#modalDelete" class="btn btn-danger">
                            <i class="glyphicon glyphicon-remove"></i>
                        </button>
                    </div>
                </td>
            </tr>


        <?php } ?>
        </tbody>
    </table>
</div>


<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content panel-warning">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Editar selección</h4>
            </div>
            <div class="modal-body">

                <form action="" method="POST">
                    <fieldset>
                        <div class="form-group col-lg-2">
                            <label>ID</label>
                            <input class="form-control" placeholder="ID" name="id" type="text" required>
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Name</label>
                            <input class="form-control" placeholder="Name" name="name" type="text" required>
                        </div>
                        <div class="form-group col-lg-2">
                            <label>Stock</label>
                            <input class="form-control" placeholder="Stock" name="stock" type="number" required>
                        </div>
                        <div class="form-group col-lg-2">
                            <label>Price</label>
                            <input class="form-control" placeholder="Price" name="price" type="text" required>
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
                                <!-- TODO Desplegable para opciones-->
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label>Description</label>
                            <textarea style="resize: none;" class="form-control" name="description"
                                      placeholder="Description"
                                      rows="3" required></textarea>
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
                            <select class="form-control" name="stars" placeholder="Stars">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>

                            </select>
                        </div>

                    </fieldset>
                </form>


            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-warning" name="editProduct">Editar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content panel-danger">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Eliminar selección</h4>
            </div>
            <div class="modal-body text-center">
                <h4><strong> Esta seguro que desea borrar este item?</strong></h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Borrar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->