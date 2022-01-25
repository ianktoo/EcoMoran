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
    <?php include 'includes/google-analytics.php';?>
    
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
        <h4>Our Story</h4>
        <p></p>
    </div>
</section>

    <section style="min-height:60vh;" class="py-5">
        <div class="container" >
            <article>
                
                <p>
                EcoMoran wants to build a culture of sustainability and self- reliance among disadvantaged children, 
                articularly children in children’s homes, by teaching them the skills and attitudes for living sustainably 
                and protecting the environment for their health and the health of the planet. 

                </p>
                

                <p>
                Through EcoMoran, the children will learn about the five pillars of environmental sustainability and gain 
                sustainable skills such as composting, creating organic manure, kitchen gardens and growing vegetables. 
                </p>

                <p>
                They can sell the surplus organic manure and vegetables which will earn the homes extra sustainable income.
                </p>

                <p>
                The knowledge and skills acquired by the children will enable them to create an environment of a sustainable home.  
                The goal is to make children’s homes sustainable by teaching the children about the environment and how to live sustainably with the hope that these are attitudes and behaviors that they will take up even in the future as they grow up
                </p>
                

            </article>            
        </div>
    </section>


    <section class="em-section-medium p-5 light-bg">
        <blockquote>
        If you are thinking a year ahead; plant a seed
        If you are thinking a decade ahead; plant a tree
        If you are thinking a century ahead; educate the people
        </blockquote>

    </section>

    <?php include 'includes/social-media-follow.php';?>

    <!-- End content-->
    
    <!-- Footer -->
    <?php include 'includes/footer.php';?>
    <!-- Javascript -->
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>