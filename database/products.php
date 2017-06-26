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
        </tr>
        </thead>
        <tbody>

        <?php
        session_start();
        include_once("connection.php");

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
                <td><a href=""</td>
            </tr>


        <?php } ?>
        </tbody>
    </table>
</div>