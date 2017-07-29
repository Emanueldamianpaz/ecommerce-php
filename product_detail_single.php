<?php

include_once("partials/header.php");


if (!empty($_GET['id'])) {

    $sql = 'SELECT * FROM products WHERE id = ' . $_REQUEST["id"];
    $result = $con->query($sql)->fetch();
}

?>

<!-- Single-Product-View -->
<div class="w3aitssinglewthree">
    <div class="container">

        <div class="products">


            <div class="single-page">
                <div class="single-page-row" id="detail-21">


                    <div id="myCarousel" class="col-md-6 single-top-left carousel slide " data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/s<?php echo $result['id'] ?>_1.jpg"
                                     data-imagezoom="true" class="img-responsive" alt="Groovy Apparel">
                            </div>


                            <div class="item">
                                <img src="images/s<?php echo $result['id'] ?>_2.jpg"
                                     data-imagezoom="true" class="img-responsive" alt="Groovy Apparel">
                            </div>


                            <div class="item">
                                <img src="images/s<?php echo $result['id'] ?>_3.jpg"
                                     data-imagezoom="true" class="img-responsive" alt="Groovy Apparel"></div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>


                    <div class="col-md-6 single-top-right">
                        <h1 class="item_name"><?php echo $result['name'] ?> -
                            <?php echo $result['stars'] ?> <i class="fa fa-star" aria-hidden="true"> </i>
                        </h1>
                        <div class="single-price">
                            <ul>
                                <li><?php echo "$" . $result['price'] ?>
                                </li>
                            </ul>
                        </div>
                        <p class="single-price-text">
                            <?php echo $result['description'] ?>
                        </p>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="aitsaccordionw3layouts">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title asd">
                                <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Description
                                    <span class="glyphicon glyphicon glyphicon-chevron-down"
                                          aria-hidden="true"></span><i class="glyphicon glyphicon-menu-up"
                                                                       aria-hidden="true"></i>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                             aria-labelledby="headingOne">
                            <div class="panel-body panel_text">
                                <div class="scrollbar" id="style-2">
                                    <?php echo $result['description'] ?>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- TODO Punto extra para mejorar

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title asd">
                    <a class="pa_italic collapsed" role="button" data-toggle="collapse"
                       data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                       aria-controls="collapseThree">Rating & Reviews (40+) <span
                                class="glyphicon glyphicon glyphicon-chevron-down"
                                aria-hidden="true"></span><i class="glyphicon glyphicon-menu-up"
                                                             aria-hidden="true"></i>
                    </a>
                </h4>
            </div>

     <div class="panel panel-default">
         <div class="panel-heading" role="tab" id="headingTwo">
             <h4 class="panel-title asd">
                 <a class="pa_italic collapsed" role="button" data-toggle="collapse"
                    data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                    aria-controls="collapseTwo">More Colors (2) <span
                             class="glyphicon glyphicon glyphicon-chevron-down"
                             aria-hidden="true"></span><i class="glyphicon glyphicon-menu-up"
                                                          aria-hidden="true"></i>
                 </a>
             </h4>
         </div>
         <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
              aria-labelledby="headingTwo">
             <div class="accordion-image">
                 <div class="ac-img">
                     <a href="#"><img src="images/product-1.jpg" alt="Groovy Apparel"></a>
                 </div>
                 <div class="ac-img">
                     <a href="#"><img src="images/product-2.jpg" alt="Groovy Apparel"></a>
                 </div>
                 <div class="clearfix"></div>
             </div>
         </div>
     </div>



            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                 aria-labelledby="headingThree">
                <h3>"Excellent Quality & Fitting!"</h3>
                <h4>Léon, Certified Buyer.</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's standard dummy text ever since the 1500s.</p>
                <span>  <?php echo $result['stars'] ?> Stars</span>
            </div>
        </div>
        -->

                </div>
            </div>
        </div>

    </div>

</div>
</div>
<!-- //Single-Product-View -->


<?php
include_once("partials/footer.php");
?>
