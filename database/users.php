<div class="panel-body">
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered"
           id="example">
        <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Permission</th>
            <th>Editar/Eliminar</th>

        </tr>
        </thead>
        <tbody>

        <?php
        include_once("connection.php");

        $sql = 'SELECT * FROM users INNER JOIN permissions on permissions.id = users.id_permission order by 1';
        $results = $con->query($sql);

        foreach ($results as $row) {
            ?>


            <tr class="odd gradeX">
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['password'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['permission'] ?></td>
                <td class="text-center">
                    <div class="btn-group">
                        <button data-toggle="modal" data-target="#modalEdit" class="btn btn-warning disabled">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </button>
                        <button data-toggle="modal" data-target="#modalDelete" class="btn btn-danger disabled">
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


            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-warning">Editar</button>
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