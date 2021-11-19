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
    <?php include 'includes/google-analytics.php';?>

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

    <section class="pt-3 pb-0">
        <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $currentPage?></li>
            </ol>
        </nav>
        </div>
    </section>

    <section class="py-5" id="our-curriculum">
        <div class="container">
            <div class="row">
                <div class=" col-md-9">
                    <h3 class="text-muted py-3">#We Believe that...</h3>
                    <p>
                    Tomorrow’s leaders need to be equipped for tomorrow’s challenges, and we must adequately prepare our children for the future they will inherit. We have designed an interactive and engaging environmental education curriculum that includes outdoor and hands-on learning activities, games, quizzes, and art activities for a generation where more children are increasingly disconnected from nature as they have grown up indoors. Studies have also shown that environmental education can help children perform better in social studies, science, language arts, and math.
                    </p>

                    <p>
                    The learning experience is centered around the 5 pillars of sustainability: Food, Ecology, Water, Energy, and Waste; while also helping the children to understand the concept of the Sustainable Development Goals. The curriculum has been developed to include the topic of waste in each of the other pillars. This will be done in a way that is understandable and enjoyable for the children. In this way, we will be able to cover the key aspects of the environmental education experience and that is to change attitudes, provide knowledge, impart skills, develop responsibility, encourage friendship and inspire a generation to act.
                    </p>
                </div>

                <div class="d-md-block">

                </div>
               
            </div>
        </div>
    </section>

    


    <?php include 'includes/social-media-follow.php';?>

    <!-- notices -->
    <?php include 'includes/default-notice.php';?>
    <!-- notices -->
    
    <!-- End content-->
    
    <!-- Footer -->
    <?php include 'includes/footer.php';?>

    <!-- Javascript -->
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>