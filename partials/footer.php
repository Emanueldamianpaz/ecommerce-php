<!-- Footer -->
<div class="agileinfofooter">
    <div class="agileinfofooter-grids">

        <div class="col-md-4 agileinfofooter-grid agileinfofooter-grid1">
            <ul>
                <li><a href="about.php">Acerca</a></li>
                <li><a href="mens.php">Hombres</a></li>
                <li><a href="womens.php">Mujeres</a></li>
            </ul>
        </div>

        <div class="col-md-4 agileinfofooter-grid agileinfofooter-grid2">
            <ul>
                <li><a href="contact.php">Contacto</a></li>
            </ul>
        </div>

        <div class="col-md-4 agileinfofooter-grid agileinfofooter-grid3">
            <address>
                <ul>
                    <li>40019 Parma Via Modena</li>
                    <li>Sant'Agata Bolognese</li>
                    <li>BO, Italy</li>
                    <li>+1 (734) 123-4567</li>
                    <li><a class="mail" href="mailto:mail@example.com">info@example.com</a></li>
                </ul>
            </address>
        </div>
        <div class="clearfix"></div>

    </div>
</div>
<!-- //Footer -->


<!-- Copyright -->
<div class="w3lscopyrightaits">
    <div class="col-md-8 w3lscopyrightaitsgrid w3lscopyrightaitsgrid1">
        <p>© 2017 Groovy Apparel. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="=_blank">
                W3layouts </a></p>
    </div>
    <div class="col-md-4 w3lscopyrightaitsgrid w3lscopyrightaitsgrid2">
        <div class="agilesocialwthree">
            <ul class="social-icons">
                <li><a href="#" class="facebook w3ls" title="Go to Our Facebook Page"><i
                                class="fa w3ls fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="#" class="twitter w3l" title="Go to Our Twitter Account"><i
                                class="fa w3l fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="#" class="googleplus w3" title="Go to Our Google Plus Account"><i
                                class="fa w3 fa-google-plus-square" aria-hidden="true"></i></a></li>
                <li><a href="#" class="instagram wthree" title="Go to Our Instagram Account"><i
                                class="fa wthree fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#" class="youtube w3layouts" title="Go to Our Youtube Channel"><i
                                class="fa w3layouts fa-youtube-square" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //Copyright -->


<!-- Custom-JavaScript-File-Links -->
<!-- Default-JavaScript -->
<script src="js/jquery-2.2.3.js"></script>
<script src="js/modernizr.custom.js"></script>
<!-- Custom-JavaScript-File-Links -->

<!-- cart-js -->
<script src="js/minicart.js"></script>
<script>
    w3l.render();

    w3l.cart.on('w3agile_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {
            }
        }
    });
</script>
<!-- //cart-js -->


<!-- Dropdown-Menu-JavaScript -->
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //Dropdown-Menu-JavaScript -->

<!-- Popup-Box-JavaScript -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });
    });
</script>
<!-- //Popup-Box-JavaScript -->

<!-- Countdown-Timer-JavaScript-File-Links -->
<script type="text/javascript" src="js/moment.js"></script>
<script type="text/javascript" src="js/moment-timezone-with-data.js"></script>
<script type="text/javascript" src="js/timer.js"></script>
<!-- //Countdown-Timer-JavaScript-File-Links -->

<!-- //Custom-JavaScript-File-Links -->

<!-- Bootstrap-JavaScript -->
<script src="js/bootstrap.js"></script>

</body>
<!-- //Body -->


</html>