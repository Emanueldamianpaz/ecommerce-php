<?php
include_once("partials/header.php");
?>

<!-- Banner -->
<div class="agileheader-banner w3mensaits">
    <img src="images/winter.jpg" alt="Groovy Apparel">
</div>
<!-- //Banner -->

</div>
<!-- //Header -->


<!-- Heading -->
<h1 class="w3wthreeheadingaits">Busqueda avanzada</h1>
<!-- //Heading -->


<!-- Men's-Product-Display -->
<div class="wthreeproductdisplay">
    <div id="cbp-pgcontainer" class="cbp-pgcontainer">
        <ul class="cbp-pggrid">


            <?php
            include_once("database/product_detail.php")
            ?>


        </ul>
    </div>
</div>
<!-- //Men's-Product-Display -->


<?php
include_once("partials/footer.php");
?>
