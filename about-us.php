<?php

// Current Page
$currentPage = 'About Us';

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
        <h4>About Us</h4>
        <p></p>
    </div>
</section>


<section style="min-height:40vh;" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
            <p class="text-muted lead py-4">Eco Moran is an initiative that focuses on providing wholesome, informative, interactive and enjoyable environmental education to disadvantaged and marginalized children specifically between the ages of 6 and 12. "Moran" is a Maasai word that means "Warrior".</p>
            <p class="text-muted"> We believe that in order to achieve the goal of sustainability, we should majorly focus on children as they are the future of the world we hope to see: a green, self-sustaining world.  However, a lot of the materials and teaching methods provided in regards to education for sustainable development are tailored for adults and the youth with very little effective content for children. As Eco Moran, we have created a fun, interactive and hands-on curriculum for children so that at the end of the day the values they learn are ingrained in their minds and will determine how they go about certain situations in whatever career/professional path they want to take or choose.</p>
            <p class="text-muted">As  Eco Moran, we center the learning experience around the 5 pillars of sustainability, that is,  Food, Ecology, Water, Energy, and Waste; at the same time helping the children to understand the concept of the Sustainable Development Goals.  That considered, the themes include the following: Wildlife conservation and protection, Ecosystem protection and restoration, Sustainable Agriculture, Climate Change and Global Warming, Waste Management, Plastic Pollution, Renewable Clean Energy, and Recycling </p>
            </div>

            <div class="col-sm-3">
                <div class="p-3">
                    <h6 class="text-muted">Current Project</h6>
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="..." alt="...">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            Msamaria Mwema
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="min-height:40vh;" class="py-5 text-center brand-bg  text-light">
<div class="container">
<h5 class="my-4">Pillars</h5>
<div class="d-flex flex-row flex-wrap justify-content-between align-content-center">
    <div class="flex-fill p-3 m-2 border shadow" style="min-width:300px; min-height:70px;">Food</div>
    <div class="flex-fill p-3 m-2 border shadow" style="min-width:300px; min-height:70px;">Ecology</div>
    <div class="flex-fill p-3 m-2 border shadow" style="min-width:300px; min-height:70px;">Energy</div>
    <div class="flex-fill p-3 m-2 border shadow" style="min-width:300px; min-height:70px;">Water</div>
    <div class="flex-fill p-3 m-2 border shadow" style="min-width:300px; min-height:70px;">Waste</div>
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