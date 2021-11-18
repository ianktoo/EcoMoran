<?php

// Current Page
$currentPage = 'Our Curriculum';

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
        <div class="container text-center ">
            <h4>Our Curriculum</h4>
            <p></p>
        </div>
    </section>
    
    <!-- Content-->

    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <p>
                    Tomorrow’s leaders need to be equipped for tomorrow’s challenges, and we must adequately prepare our children for the future they will inherit. We have designed an interactive and engaging environmental education curriculum that includes outdoor and hands-on learning activities, games, quizzes, and art activities for a generation where more children are increasingly disconnected from nature as they have grown up indoors. Studies have also shown that environmental education can help children perform better in social studies, science, language arts, and math.
                    </p>

                    <p>
                    The learning experience is centered around the 5 pillars of sustainability: Food, Ecology, Water, Energy, and Waste; while also helping the children to understand the concept of the Sustainable Development Goals. The curriculum has been developed to include the topic of waste in each of the other pillars. This will be done in a way that is understandable and enjoyable for the children. In this way, we will be able to cover the key aspects of the environmental education experience and that is to change attitudes, provide knowledge, impart skills, develop responsibility, encourage friendship and inspire a generation to act.
                    </p>
                </div>

                <div class="col-sm-3">

                </div>
            </div>
        </div>
    </section>



    <!-- Pillars -->
    <section class="py-5">
        
        <div class="container">
        <h4>Our Pillars</h4>
            <div class="row g-3">
                <div class="col-sm-3 col-xs-6  text-center">
                    <div class="card" style="">
                        <img src="images/brand/logos-plain-background/black-logo-on-grey-bg.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h6 class="card-title">Water</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6  text-center">
                    <div class="card" style="">
                        <img src="images/brand/logos-plain-background/black-logo-on-grey-bg.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h6 class="card-title">Ecology and Climate Change </h6>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 col-xs-6 text-center">
                    <div class="card" style="">
                        <img src="images/brand/logos-plain-background/black-logo-on-grey-bg.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h6 class="card-title">Food </h6>
                        </div>
                    </div>                    
                </div>

                
                <div class="col-sm-3 col-xs-6  text-center">
                    <div class="card" style="">
                        <img src="images/brand/logos-plain-background/black-logo-on-grey-bg.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h6 class="card-title">Energy </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End content-->

    <!-- notices -->
    <?php include 'includes/default-notice.php';?>
    <!-- notices -->
    
    <!-- Footer -->
    <?php include 'includes/footer.php';?>

    <!-- Javascript -->
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>