<?php

// Current Page
$currentPage = 'Projects';
$content

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
    <!-- Page Title Header -->
    <section class="py-5 cover-bg">
        <div class="container text-center">
            <h4><?php echo $currentPage?></h4>
            <p>Be part of us</p>
        </div>
    </section>   


    <!-- Content-->
    <div id="em-projects-content" class="py-5">
        <div class="container">
           <div class="row g-3  ">
           <div class="col-sm-6">
                <h1>It's Never easy <br> but we love it</h1>
                <p class="">
                    We love working with Kids!  
                </p>
            </div>


            <div class="col-sm-6">
                <h4 class="py-3 em-project-title">What we have <br>been working on</h4>
                <div>
                    <p class="em-project-item"><a href="https://ecomoran.wixsite.com/ecomoran/blog" target="_blank">Martha Care Project</a></p>
                </div>

                <div>
                    <p class="em-project-item"><a href="https://ecomoran.wixsite.com/ecomoran/blog" target="_blank" >Msamaria Mwema Project</a></p>
                </div>
            </div>
           </div>
        </div>
    </div>

    <!-- End content-->


    <!-- learn section -->
    <?php include 'includes/learn-section.php';?>
    <!-- learn section -->

    
    <!-- Footer -->
    <?php include 'includes/footer.php';?>

    <!-- Javascript -->
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>