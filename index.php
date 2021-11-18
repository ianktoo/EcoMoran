<?php
require 'vendor/autoload.php';

$currentPage = "Home";

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

    <link rel="stylesheet" href="./node_modules/@splidejs/splide/dist/css/splide.min.css">

    <!-- BS icons -->
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Js -->
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 

    <title>Eco Moran | Home</title>
</head>
<body>
<!-- Defaults -->
<?php include 'includes/contact-bar.php';?>
<?php include 'includes/navigation-bar.php';?>
<!-- Defaults -->

<!-- Hero Page section-->

<!-- notices -->
<?php include 'includes/default-notice.php';?>
<!-- notices -->
<!-- Home Page -->

<!-- Footer -->
<?php include 'includes/footer.php';?>
<!-- Javascript -->

<script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="./js/index.js"></script>
<script src="./node_modules/@splidejs/splide/dist/js/splide.min.js"></script>

<script>
  document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '.splide', {
      width : '100vw',
		  height: '80vh',
      cover: true,
    } );
    splide.mount();
  } );
</script>

</body>
</html>