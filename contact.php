<?php
include_once("partials/header.php");

if (isset($_POST['sendEmail'])) {
    $email_to = "emanuel.paz@davinci.edu.ar";
    $email_subject = "Email de prueba";
    $email_message = '';

    function died($error)
    {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error . "<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }


    // validation expected data exists
    if (!isset($_POST['name']) ||
        !isset($_POST['message'])
    ) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }


    $name = $_POST['name']; // required
    $message = $_POST['message']; // required

    $email_message .= "First Name: " . $name . "\n";
    $email_message .= "Message: " . $message . "\n";

    // create email headers
    $headers = 'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
}

?>


</div>
<!-- //Header -->


<!-- Contact -->
<div class="w3aitscontactagile">
    <h1>CONTACT</h1>

    <div class="container">
        <div class="col-md-4 wthreeaddressaits-grid wthreeaddressaits-grid1">
            <div class="aitsaddressw3l">
                <h4>Address</h4>
                <address>
                    <ul>
                        <li>Studio 40019</li>
                        <li>Parma Via Modena</li>
                        <li>Sant'Agata Bolognese</li>
                        <li>BO, Italy</li>
                    </ul>
                </address>
            </div>
            <div class="aitsphonew3l">
                <h4>Phone</h4>
                <ul>
                    <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +1 (734) 123-4567</li>
                    <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +1 (739) 648-7114</li>
                </ul>
            </div>
            <div class="aitsemailw3l">
                <h4>Email</h4>
                <ul>
                    <li><a href="mailto:mail@example.com"><span class="glyphicon glyphicon-envelope"
                                                                aria-hidden="true"></span> info1@example.com</a></li>
                    <li><a href="mailto:mail@example.com"><span class="glyphicon glyphicon-envelope"
                                                                aria-hidden="true"></span> info2@example.com</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="col-md-8 wthreeaddressaits-grid wthreeaddressaits-grid2">
            <form action="" method="post">
                <input type="text" class="text" name="name" placeholder="Name" required="">
                <textarea name="message" class="text" placeholder="Message" required=""></textarea>
                <input type="submit" name="sendEmail" value="SEND MESSAGE">
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //Contact -->


</div>


<?php
include_once("partials/footer.php");
?>
