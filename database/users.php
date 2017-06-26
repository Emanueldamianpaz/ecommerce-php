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
        </tr>
        </thead>
        <tbody>

        <?php
        session_start();
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
            </tr>


        <?php } ?>
        </tbody>
    </table>
</div>