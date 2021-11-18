<?php

// Current Page
$currentPage = 'Our Stories';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- css -->
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/standard.css">
    <link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome-free/css/fontawesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 

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
        <h4>Our Stories</h4>
        <p></p>
    </div>
</section>

    <section style="min-height:40vh;" class="py-5">
        <div class="container" >
            <div>
            <p class="text-muted lead text-center">Oops! Looks like Our Stories are unavailable at the moment</p>
            <p class="text-muted text-center"><small>You can check back a bit later. Feel free to take a look around.</small></p>
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