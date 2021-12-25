<?php

// Current Page
$currentPage = 'FAQs';

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
    <!-- Page Title Header -->
    <section class="py-5 cover-bg">
            <div class="container text-center">
                <h4><?php echo $currentPage?></h4>
                <p></p>
            </div>
    </section>



    <section style="min-height:40vh;" class="py-5">
        <div class="container">
            <div>
                <div>
                <p class="text-muted lead text-center">Oops! Looks like Frequently asked questions are unavailable at the moment</p>
                <p class="text-muted text-center"><small>You can check back a bit later. Feel free to take a look around.</small></p>
                </div>

                <div>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Who is Ecomoran?
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Eco Moran is an initiative that focuses on providing wholesome, 
                            informative, interactive and enjoyable environmental education 
                            to disadvantaged and marginalized children specifically between 
                            the ages of 6 and 12. "Moran" is a Maasai word that means "Warrior".
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            What are Eco Trips?
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            As part of the learning experience, we aim to take the children on 
                            short trips (excursions, hiking etc.) where they can appreciate 
                            nature and experience first-hand the importance of nature as a 
                            build-up to what they have learnt during our sessions.  
                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Become a Partner or Sponsor 
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>
                                If you believe in our cause to provide marginalized children with education 
                            for sustainable development and would like to partner or provide 
                            financial/non-monetary support, we would love for you to get involved as a 
                            partner or sponsor for our environmental initiative.</p>
                            <br/>

                            <p>
                                Kindly email us at ecomorann@gmail.com with the subject line: RE: Partner or RE: Sponsor
                            </p>
                        </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            How to become a Volunteer in ecom
                        </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>
                                If you believe in our cause to provide marginalized children with education 
                            for sustainable development and would like to partner or provide 
                            financial/non-monetary support, we would love for you to get involved as a 
                            partner or sponsor for our environmental initiative.</p>
                            <br/>

                            <p>
                                Kindly email us at ecomorann@gmail.com with the subject line: RE: Partner or RE: Sponsor
                            </p>
                        </div>
                        </div>
                    </div>


                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End content-->



    <section style="">

    </section>

    
    <!-- Footer -->
    <?php include 'includes/footer.php';?>

    <!-- Javascript -->
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>