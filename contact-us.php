<?php

// Current Page
$currentPage = 'Contact Us';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/styles.php'?> 

    <title>Eco Moran | <?php echo $currentPage?></title>
</head>
<body>
    <!-- Defaults -->
    <?php include 'includes/contact-bar.php';?>
    <?php include 'includes/navigation-bar.php';?>
    <!-- Defaults -->
    
    <!-- Content-->

    <!-- Page Title Header -->
    <section class="py-5 cover-bg">
        <div class="container text-center ">
            <h4>Get In Touch</h4>
            <p>If you have any questions about our program </p>
        </div>
    </section>


    <section class="py-5" style="min-height:40vh;">
        <div class="container">
            <div class="row g-3">
                <h3>Write to us!</h3>
                <p>We'll be glad to hear from you!</p>

                <p>Email: <a href="mailto:info@ecomoran.org">info@ecomoran.org</a> or <a href="mailto:ecomorann@gmail.com">ecomorann@gmail.com</a></p>
                <p> <a href="https://twitter.com/EcoMoran?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-show-screen-name="false" data-show-count="false">Follow @EcoMoran</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </section>

    <?php include 'includes/social-media-follow.php';?>


    <!-- End content-->
    
    <!-- Footer -->
    <?php include 'includes/footer.php';?>

    <!-- Javascript -->
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script></p>

</body>
</html>