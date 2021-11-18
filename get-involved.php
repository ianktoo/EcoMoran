<?php

// Current Page
$currentPage = 'Get Involved';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/google-analytics.php';?>
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
        <div class="container text-center">
            <h4><?php echo $currentPage?></h4>
            <p>Be part of us</p>
        </div>
    </section>    



    <section class="py-5">
        <div class="container">
            <ol>
                <li>Do you want to be a part of our environmental education initiative? </li>

                <li>Are you passionate about marginalized children and their education?</li>
                <li> Do you want to champion tomorrow's leaders, professionals, and pioneers to ensure a just, healthy and sustainable future for all?</li>
            </ol>

            <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSfpxnIpJYrEFq_twcYibzGrJD-VZV-IeJfZapZ0BbVV5M_rXw/viewform?usp=sf_link" target="_blank">Join us</a> as a volunteer, partner or sponsor!</p>
        </div>
    </section>


    <!-- notices -->
<?php include 'includes/default-notice.php';?>
<!-- notices -->

    <!-- End content-->

    <?php include 'includes/social-media-follow.php';?>
    
    <!-- Footer -->
    <?php include 'includes/footer.php';?>

    <!-- Javascript -->
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>