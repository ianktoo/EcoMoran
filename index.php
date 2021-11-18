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

    <!-- Index Page CSS-->
    <link rel="stylesheet" href="./css/index.css">

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
<section id="landing-page-header">
  <div class="py-5" >
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <h1>Eco Moran: <br> 
            Sustainable Education for Children
          </h1>
          <p>The Future is Bright Green</p>
          <p><a href="https://ecomoran.wixsite.com/ecomoran" class="btn btn-outline-light">LEARN MORE</a></p>
        </div>

        <div class="col-sm-8">

        </div>
      </div>
    </div>
  </div>
</section>



<!-- Vision and Mission -->
<section id="landing-page-vision-mission">
<div class="container">
  <div class="pt-5 text-muted text-center">
    <h4>#WeAreEcoMoran!</h4>
  </div>
  <div class="row p-5 gx-2">
    <div class="col-md-6">
      <h5>Our Mission</h5>
      <p>
        To equip children with attitudes, values, knowledge, and 
        skills necessary to rethink and change current and future 
        patterns of action in order to ensure healthy, environmentally 
        just and sustainable futures for all.
      </p>
    </div>

    <div class="col-md-6">
      <h5>Our Vision</h5>
      <p>
        To achieve the goal of global sustainability and foster global 
        citizenship by positively influencing, shaping and teaching 
        tomorrow’s leaders, professionals, and innovators.
      </p>
    </div>
  </div>
</div>
</section>



<?php include 'includes/social-media-follow.php';?>


<section id="landing-page-learn">
  <div class="container-fluid">

  <div class="text-center pt-4 pb-3">
    <h4 class="text-muted">#Our curriculum</h4>
  </div>
    <div class="d-flex flex-wrap align-items-center justify-content-evenly p-3" id="card-box-learn" style="min-height:inherit;">
      <div class="border shadow-sm m-2 p-3">
        <h4>Knowledge</h4>
        <p class="lead">Our Curriculum</p>
        <p>
        Provide the children with new  insight and knowledge on different elements of the environment and nature.
        </p>
        <p><a href="https://ecomoran.wixsite.com/ecomoran/our-curriculum" class="btn btn-outline-dark">Show Me How</a></p>
      </div>

      <div class=" border shadow-sm  m-2 p-3">
        
        <h4>Skills</h4>
        <p class="lead">Our Curriculum </p>
        <p>
        Allow the children to learn new skills that can contribute to environmental as well as their own personal well-being.
        </p>
        <p><a href="https://ecomoran.wixsite.com/ecomoran/our-curriculum" class="btn btn-outline-dark">Our Curriculum</a></p>
      </div>

      <div class=" border shadow-sm  m-2 p-3">
        <h4>The Organic Garden</h4>
        <p class="lead">Hands-on Activities </p>
        <p>We have set up an organic/kitchen garden in the establishment we are working at where the children have the responsibility to take care of the garden. We will be setting up a kitchen garden in each establishment we engage with.  </p>
        <p><a href="https://ecomoran.wixsite.com/ecomoran/blog" class="btn btn-outline-dark">Our Blog</a></p>
      </div>
    </div>
  </div>
</section>

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