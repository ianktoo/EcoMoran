<?php

// Current Page
$currentPage = 'Gallery';

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
    
    <!-- Content-->

    <section id="gallery-body">

    <div class="container">
        <h4>Albums</h4>
        <p>Our sessions are always full of activity. Here's what we have done so far.</p>


        <div id="em-albums-container">
            <div class="em-single-album">
                <img src="..\images\our-projects\martha-care-home\Ecomoran-class-session.jpg" alt="" srcset="">
                <p>loosdfdfdfd Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam voluptate laborum animi tenetur. Facilis magni, sunt officia qui cumque, vitae libero hic error eum reprehenderit aperiam quod voluptate? Magni, pariatur.</p>
            </div>

            <div class="em-single-album">
                <img src="..\images\our-projects\martha-care-home\Ecomoran-organic-farm-session-1" alt="" srcset="">
            </div>

            <div class="em-single-album">
                <img src="..\images\our-projects\martha-care-home\ecomoran-sign-language-session" alt="" srcset="">
            </div>


        </div>

    </div>

    </section>

    <?php include 'includes/social-media-follow.php';?>

    
    <!-- Footer -->
    <?php include 'includes/footer.php';?>

    <!-- Javascript -->
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>