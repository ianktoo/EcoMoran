<?php

// Current Page
$currentPage = 'Contact Us';

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
            <h4>Get In Touch</h4>
            <p>If you have any questions about our program </p>
        </div>
    </section>


    <section class="py-5" style="min-height:60vh;">
        <div class="container">
            <div class="row g-3">
                <div class="col-sm-9 p-3">
        
                    <form action="">
                        <div class="mb-3">
                            <label for="userEmail" class="form-label">Your Email address</label>
                            <input type="email" class="form-control" id="userEmail" placeholder="name@example.com">
                        </div>

                        <div class="mb-3">
                            <label for="userFeedbackMessage" class="form-label">Message</label>
                            <textarea class="form-control" id="userFeedbackMessage" rows="3"></textarea>
                        </div>
                    </form>

                </div>


                <div class="col-sm-3 p-3">
                    
                </div>
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