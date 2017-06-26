<?php
include_once("partials/header.php");
?>

<div class="page-content">
    <div class="row">
        <?php include_once("partials/menu.php"); ?>
        <div class="col-md-10">

            <div class="row">
                <div class="col-md-12">
                    <div class="content-box-large">
                        <div class="panel-heading">
                            <div class="panel-title"><strong>Cargar producto</strong></div>
                        </div>

                        <?php include_once("../database/createProduct.php") ?>
                    </div>
                </div>
            </div>


            <!--  Page content -->
        </div>
    </div>
</div>

<?php include_once("partials/footer.php"); ?>
