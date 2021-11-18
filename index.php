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

    <meta property="og:title" content="EcoMoran : Home" />
    <meta property="og:site_name" content="EcoMoran" />
    <meta property="og:type" content="website" />
    <meta property="og:url"content ="https://ecomoran.org/"/>
    
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

    <?php include 'includes/google-analytics.php';?>

    <title>Eco Moran | Home</title>
</head>
<body>
<!-- Defaults -->
<?php include 'includes/contact-bar.php';?>
<?php include 'includes/navigation-bar.php';?>
<!-- Defaults -->

<!-- Hero Page section-->
<section id="landing-page-header">

    
      <div class="d-flex align-items-center justify-content-start p-5">
          <div class="">
            <h1>Eco Moran: <br> 
              Sustainable Education for Children
            </h1>
            <p>The Future is Bright Green</p>
            <div class="mt-4"><a href="https://ecomoran.wixsite.com/ecomoran" class="btn btn-outline-light">Learn More</a></div>
          </div>

    </div>

</section>



<!-- Vision and Mission -->
<section id="landing-page-vision-mission" class="py-5">
  <div  class="container">

  <div class="p-5 text-center">
    <h4>We are EcoMoran</h4>
  </div>
    <div class=" g-3 row justify-content-center align-items-strech row-cols-1 row-cols-sm-2">

    <div class="p-3 col-sm-6 bg-white">
      <h3>Our Mission</h3>
      <p>

      To equip children with attitudes, values, knowledge, and skills necessary to rethink and change current and future patterns of action in order to ensure healthy, environmentally just and sustainable futures for all.

</p>
    </div>

    <div class="p-3 col-sm-6 brand-bg">
      <h3>Our Vision</h3>
      <p>
      To achieve the goal of global sustainability and foster global citizenship by positively influencing, shaping and teaching tomorrow’s leaders, professionals, and innovators. 
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
    <div class="d-flex flex-wrap align-items-stretch justify-content-center p-3" id="card-box-learn" style="min-height:inherit;">
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