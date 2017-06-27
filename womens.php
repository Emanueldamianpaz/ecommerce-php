<?php
include_once("partials/header.php");
?>

<!-- Banner -->
<div class="agileheader-banner">
    <img src="images/womens-banner.jpg" alt="Groovy Apparel">
</div>
<!-- //Banner -->

</div>
<!-- //Header -->


<!-- Heading -->
<h1 class="w3wthreeheadingaits">Ropa de mujer</h1>
<!-- //Heading -->


<!-- Women's-Product-Display -->
<div class="wthreeproductdisplay">
    <div id="cbp-pgcontainer" class="cbp-pgcontainer">
        <ul class="cbp-pggrid">

            <?php
            include_once("database/product_detail.php")
            ?>

        </ul>
    </div>
</div>
<!-- //Women's-Product-Display -->


<?php
include_once("partials/footer.php");
?>
