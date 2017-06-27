<?php

if (!empty($_GET['id_type'])) {

    $sql = 'SELECT * FROM products where id_type =' . $_REQUEST["id_type"] . ' ORDER BY 1 ';
    $results = $con->query($sql);
} else {
    $sql = 'SELECT * FROM products ORDER BY 1';
    $results = $con->query($sql);
};

if ($results->rowCount() > 0) {
    foreach ($results as $row) {
        ?>


        <li class="wthree aits w3l">
            <div class="cbp-pgcontent" id="men-<?php echo $row['id'] ?>">
                <span class="cbp-pgrotate"><i class="fa fa-exchange" aria-hidden="true"></i></span>
                <a href="product_detail_single.php?id=<?php echo $row['id'] ?>">
                    <div class="cbp-pgitem a3ls">
                        <div class="cbp-pgitem-flip">
                            <img src="images/<?php echo $row['id'] ?>-front.jpg" alt="Groovy Apparel">
                            <img src="images/<?php echo $row['id'] ?>-back.jpg" alt="Groovy Apparel">
                        </div>
                    </div>
                </a>
                <ul class="cbp-pgoptions w3l">
                    <li class="cbp-pgoptcompare">
                        <input type="checkbox" name="checkboxG8" id="checkboxG8" class="css-checkbox w3"><label
                                for="checkboxG8" class="css-label"></label>
                    </li>
                    <li class="cbp-pgoptfav">
                        <span><?php echo $row['stars'] ?> <i class="fa fa-star" aria-hidden="true"></i></span>
                    </li>
                    <li class="cbp-pgoptsize agile">
                        <span data-size="XL"><?php echo $row['size'] ?></span>
                        <div class="cbp-pgopttooltip">
                            <span data-size="XL">XL</span>
                            <span data-size="L">L</span>
                            <span data-size="M">M</span>
                            <span data-size="S">S</span>
                        </div>
                    </li>
                    <li class="cbp-pgoptcart">

                    </li>
                </ul>
            </div>
            <a href="product_detail_single.php?id=<?php echo $row['id'] ?>">
                <div class="cbp-pginfo w3layouts">
                    <h3><?php echo $row['name'] ?></h3>
                    <span class="cbp-pgprice"><?php echo "$" . $row['price'] ?></span>
                </div>
            </a>
        </li>


    <?php }
} else { ?>

    <div class="col-lg-12">
        <img src="images/no_products.jpg" class="img-responsive">
    </div>
    <br>


<?php } ?>