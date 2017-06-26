<?php
include_once("partials/header.php");
?>

    <div class="page-content">
        <div class="row">
            <?php
            include_once("partials/menu.php");
            ?>
            <div class="col-md-10">

                <div class="content-box-large">
                    <div class="panel-heading">
                        <div class="panel-title">Productos</div>
                    </div>

                    <?php
                    include_once("../database/products.php");
                    ?>


                </div>


            </div>
        </div>
    </div>
<?php
include_once("partials/footer.php");
?>