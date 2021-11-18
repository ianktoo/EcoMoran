<?php

// Current Page
$currentPage = 'FAQs';

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
            <div class="container text-center">
                <h4><?php echo $currentPage?></h4>
                <p></p>
            </div>
    </section>



    <section style="min-height:40vh;" class="py-5">
        <div class="container">
            <div>
            <div>
            <p class="text-muted lead text-center">Oops! Looks like Frequently asked questions are unavailable at the moment</p>
            <p class="text-muted text-center"><small>You can check back a bit later. Feel free to take a look around.</small></p>
            </div>
            </div>
        </div>
    </section>

    <!-- End content-->

    
    <!-- Footer -->
    <?php include 'includes/footer.php';?>

    <!-- Javascript -->
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>