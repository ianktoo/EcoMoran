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
    <meta name="description" content='Eco Moran is an initiative that focuses on providing wholesome, informative, interactive and enjoyable environmental education to disadvantaged and marginalized children specifically between the ages of 6 and 12. "Moran" is a Maasai word that means "Warrior".'>
    <meta name="keywords" content="Environmental Education, EcoMoran, curriculum,Eco Warrior, Children, Education">

    <!-- OG -->
    <meta property="og:title" content="EcoMoran Home" />
    <meta property="og:site_name" content="EcoMoran" />
    <meta property="og:type" content="website" />
    <meta property="og:url"content ="https://ecomoran.org/"/>
    <meta property="og:description" content='Eco Moran is an initiative that focuses on providing wholesome, informative, interactive and enjoyable environmental education to disadvantaged and marginalized children specifically between the ages of 6 and 12. "Moran" is a Maasai word that means "Warrior".' />
    <meta property="og:image" content="https://ecomoran.org/images/brand/logos-plain-background/logo-on-green-bg.png" />
    
    <!-- css -->
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/standard.css">

    <!-- Index Page CSS-->
    <link rel="stylesheet" href="./css/index.css">

    <link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome-free/css/fontawesome.min.css">

    <link rel="stylesheet" href="./node_modules/@splidejs/splide/dist/css/splide.min.css">

    <!-- BS icons -->
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Js -->
    <script src="./node_modules/jquery/dist/jquery.min.js" defer></script>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 

    <?php include 'includes/google-analytics.php';?>

    <style>
      #em_wrapper{
        background-color:red;
      }
    </style>
  
  <!-- Website title -->
  <title>Weclome to Eco Moran - Sustainable Education for children</title>

</head>
<body>

<main id="em_wrapper">
  <!-- Defaults -->
<!--?php include 'includes/contact-bar.php';?-->
<?php include 'includes/navigation-bar.php';?>

<!----------------------------------------------------->
<!-- Defaults -->
<!-- Hero Page section-->
<!--section id="landing-page-header">
  <div class="d-flex align-items-center justify-content-end p-5">
    <div class="">
      <h1>Eco Moran: <br> 
        Sustainable Education for Children
      </h1>
      <p>The Future is Bright Green</p>
      <div class="mt-4"><a href="https://ecomoran.wixsite.com/ecomoran" class="btn btn-outline-light">Learn More</a></div>
    </div>
  </div>
</section-->

<!-- Vision and Mission -->
<!--?php include 'includes/mission-vision.php';?-->

<!-- learn section -->
<!--?php include 'includes/learn-section.php';?-->
<!-- learn section -->

<!-- Social Media -->
<!--?php include 'includes/social-media-follow.php';?-->

<!--------------------------------------------------------->
<!-- Footer -->
<?php include 'includes/views/footer.php';?>
</main>

<!-- Javascript -->

<script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="./js/index.js"></script>
<script src="./node_modules/@splidejs/splide/dist/js/splide.min.js"></script>

<script>
  /* document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '.splide', {
      width : '100vw',
		  height: '80vh',
      cover: true,
    } );
    splide.mount();
  } );*/

</script>

</body>
</html>