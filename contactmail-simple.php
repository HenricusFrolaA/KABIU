<?php

$name = $_POST['name'];
$email = $_POST['email'];
//Avoid Email Injection and Mail Form Script Hijacking
if (preg_match("/[\r\n]/", $name) || preg_match("/[\r\n]/", $email)) {
    die("Header injection detected!");
} else {
    //Put your email address here
    $youremail = 'youremail@domain.com';

    //Prepare a "pretty" version of the message
    //Important: if you added any form fields to the HTML, you will need to add them here also
    $body = "This is the form that was just submitted:
    --------------------------------------------------
    Name:  $_POST[name]
    E-Mail: $_POST[email]
    Phone: $_POST[phone]
    Message: $_POST[message]";

    $subject = $_POST['subject'];

    //Set the headers
    $headers = 'From: ' . $youremail . "\r\n" . //Your email. If the email does not appear in your inbox, check your spam folder and mark this email as non spam.
        'Reply-To: ' . $email . "\r\n" . //The value of email input
        'X-Mailer: PHP/' . phpversion();

    //Finally, send the message
    mail($youremail, $subject, $body, $headers);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content>
    <meta name="author" content>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>CORPBOOT | Bootstrap Business Template - Contact</title>

    <!-- CSS
        ===============================================================-->
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Icons -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <!-- Lightbox -->
    <link rel="stylesheet" href="assets/glightbox/css/glightbox.css">
    <!-- Flex Slider -->
    <link rel="stylesheet" href="assets/css/flexslider.css">
    <!-- Animation -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- Select Style -->
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <!-- PRELOADER
        ===============================================================-->
    <div id="preloader">
        <div class="cssload-container">
            <div class="cssload-double-torus"></div>
        </div>
    </div>

    <!-- NAVBAR
        ===============================================================-->
    <nav class="navbar navbar-expand-lg position-fixed navbar-fixed-top navbar-default w-100">
        <div class="container">
            <!-- Change your logo here -->
                <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav navbar-right ml-auto">
                    <li><a href="index.html">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">About Us <i class="fa-solid fa-angle-down small"></i></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="about.html">About Us 1</a></li>
                            <li class="dropdown-item"><a href="about-2.html">About Us 2</a></li>
                        </ul>
                    </li>
                    <li><a href="services.html">Services</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">Portfolio <i class="fa-solid fa-angle-down small"></i></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="portfolio.html">Default</a></li>
                            <li class="dropdown-item"><a href="portfolio-images.html">Images Lightbox</a></li>
                            <li class="dropdown-item"><a href="portfolio-iframes.html">Iframes Lightbox</a></li>
                        </ul>
                    </li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">Blog <i class="fa-solid fa-angle-down small"></i></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="blog.html">Blog Right Sidebar</a></li>
                            <li class="dropdown-item"><a href="blog-left.html">Blog Left Sidebar</a></li>
                            <li class="dropdown-item"><a href="blogpost.html">Single Right Sidebar</a></li>
                            <li class="dropdown-item"><a href="blogpost-left.html">Single Left Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">Elements <i class="fa-solid fa-angle-down small"></i></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="elements.html">Content</a></li>
                            <li class="dropdown-item"><a href="error404.html">404 Error</a></li>
                            <li class="dropdown-item"><a href="login.html">Login</a></li>
                            <li class="dropdown-item"><a href="forms.html">Forms</a></li>
                            <li class="dropdown-item"><a href="maps-js.html">JS Google Maps</a></li>
                        </ul>
                    </li>
                    <li class="active dropdown">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">Contact <i class="fa-solid fa-angle-down small"></i></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="contact.html">Contact Option 1</a></li>
                            <li class="dropdown-item"><a href="contact-simple.html">Contact Option 2</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- BREADCRUMB
        ===============================================================-->
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="active breadcrumb-item">Contact <i class="fa-solid fa-arrow-down ml5"></i></li>
            </ol>
        </div>
    </div>

    <!-- CONTACT
        ===============================================================-->
    <section class="bg-white">
        <div class="container">
            <div class="row wow fadeIn">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <!-- CONTACT INFO -->
                <div class="col-sm-12 col-md-5 cinfo">
                    <div id="map-canvas">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.544153666497!2d-74.0110142845952!3d40.70603607933251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a165bedccab%3A0x2cb2ddf003b5ae01!2sWall%20St%2C%20New%20York%2C%20NY%2C%20EE.%20UU.!5e0!3m2!1ses!2spy!4v1650732591997!5m2!1ses!2spy" class="w-100 h-100 border-0" aria-hidden="false" tabindex="0" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowFullScreen></iframe>
                    </div>
                    <address>
                        <p><i class="fa-solid fa-map-marker"></i>8578 NW 70th Street, 33166, Miami - Florida, USA</p>
                        <p><i class="fa-solid fa-phone"></i>(+385) 593 6888</p>
                        <p><i class="fa-solid fa-envelope"></i>support@styliothemes.com</p>
                        <p><i class="fa-brands fa-skype"></i>corpboot</p>
                    </address>
                    <div class="visible-xs-block visible-sm-block pt20"></div>
                </div><!-- /Contact Info -->
                <!-- CONTACT FORM -->
                <div class="col-sm-12 col-md-7">
                    <h4 class="text-success">Successful validation</h4>
                    <p>Your email has been sent successfully.</p>
                    <p>&#xA0;</p>
                </div><!-- /Contact Form -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- /section -->

    <!-- FOOTER
        ===============================================================-->
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="footer-widget col-sm-12 col-md-4 first">
                        <h3>About us</h3>
                        <p><a href="about.html">Corpboot</a>, is tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters.</p>
                        <ul class="list-unstyled">
                            <li><i class="fa-solid fa-map-marker"></i> 8578 NW 70th Street, 33166, Miami - Florida, USA</li>
                            <li class="number"><i class="fa-solid fa-phone"></i> (+385) 593 6888</li>
                            <li><i class="fa-solid fa-envelope"></i> support@styliothemes.com</li>
                            <li><i class="fa-brands fa-skype"></i> corpboot</li>
                        </ul>
                        <div class="visible-xs-block visible-sm-block pt20"></div>
                    </div>
                    <div class="footer-widget col-sm-6 col-md-4">
                        <h3>Photo Gallery</h3>
                        <a href="https://via.placeholder.com/900x600/BDC3C7/ffffff" class="gallery glightbox" data-type="image" data-draggable="true" title="Photo Gallery 1">
                            <img src="https://via.placeholder.com/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                        </a>
                        <a href="https://via.placeholder.com/900x600/BDC3C7/ffffff" class="gallery glightbox" data-type="image" data-draggable="true" title="Photo Gallery 2">
                            <img src="https://via.placeholder.com/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                        </a>
                        <a href="https://via.placeholder.com/900x600/BDC3C7/ffffff" class="gallery glightbox" data-type="image" data-draggable="true" title="Photo Gallery 3">
                            <img src="https://via.placeholder.com/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                        </a>
                        <a href="https://via.placeholder.com/900x600/BDC3C7/ffffff" class="gallery glightbox" data-type="image" data-draggable="true" title="Photo Gallery 4">
                            <img src="https://via.placeholder.com/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                        </a>
                        <a href="https://via.placeholder.com/900x600/BDC3C7/ffffff" class="gallery glightbox" data-type="image" data-draggable="true" title="Photo Gallery 5">
                            <img src="https://via.placeholder.com/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                        </a>
                        <a href="https://via.placeholder.com/900x600/BDC3C7/ffffff" class="gallery glightbox" data-type="image" data-draggable="true" title="Photo Gallery 6">
                            <img src="https://via.placeholder.com/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                        </a>
                        <a href="https://via.placeholder.com/900x600/BDC3C7/ffffff" class="gallery glightbox" data-type="image" data-draggable="true" title="Photo Gallery 7">
                            <img src="https://via.placeholder.com/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                        </a>
                        <a href="https://via.placeholder.com/900x600/BDC3C7/ffffff" class="gallery glightbox" data-type="image" data-draggable="true" title="Photo Gallery 8">
                            <img src="https://via.placeholder.com/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                        </a>
                        <a href="https://via.placeholder.com/900x600/BDC3C7/ffffff" class="gallery glightbox" data-type="image" data-draggable="true" title="Photo Gallery 9">
                            <img src="https://via.placeholder.com/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                        </a>
                        <a href="https://via.placeholder.com/900x600/BDC3C7/ffffff" class="gallery glightbox" data-type="image" data-draggable="true" title="Photo Gallery 10">
                            <img src="https://via.placeholder.com/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                        </a>
                        <a href="https://via.placeholder.com/900x600/BDC3C7/ffffff" class="gallery glightbox" data-type="image" data-draggable="true" title="Photo Gallery 11">
                            <img src="https://via.placeholder.com/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                        </a>
                        <a href="https://via.placeholder.com/900x600/BDC3C7/ffffff" class="gallery glightbox" data-type="image" data-draggable="true" title="Photo Gallery 12">
                            <img src="https://via.placeholder.com/70x50/BDC3C7/ffffff" alt="Gallery thumbnail">
                        </a>
                        <div class="visible-xs-block visible-sm-block pt20"></div>
                    </div>
                    <div class="footer-widget col-sm-6 col-md-4">
                        <h3>Newsletter Registration</h3>
                        <p>Subscribe today to receive the latest <strong>Corpboot</strong> news via email. You may unsubscribe from this service at any time.</p>
                        <!-- Newsletter Form-->
                        <form method="get">
                            <div class="input-group newsletter">
                                <label class="sr-only" for="subscribe-email">Enter your email...</label>
                                <input type="email" class="form-control" id="subscribe-email" placeholder="Enter your email...">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn"><i class="fa-solid fa-paper-plane"></i></button>
                                </span>
                            </div>
                        </form>
                        <p class="newsletter-desc"><strong>No spam:</strong> consectetur adipisicing elit lorem ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 social">
                        <ul class="list-inline social">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 credits">
                        <p>&#xA9; CORPBOOT 2023. All Rights Reserved.</p>
                        <p class="small">
                            <i class="fa-solid fa-angle-right"></i>
                            Developed by: <a href="#">Your Company</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--back to top-->
        <a href="#" class="scrollToTop" id="scrollToTop"><i class="fa-solid fa-angle-up"></i></a>
    </footer>

    <!-- JAVASCRIPT
        ===============================================================-->
    <!-- JQuery -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/jquery-migrate-3.4.1.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Glightbox -->
    <script src="assets/glightbox/js/glightbox.min.js"></script>
    <!-- Slick Carousel -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Select Style -->
    <script src="assets/js/bootstrap-select.min.js"></script>
    <!-- Contact Form -->
    <script src="assets/js/form-validation.js"></script>
    <!-- Flexslider -->
    <script src="assets/js/jquery.flexslider-min.js"></script>
    <!-- Placeholder for IE9 -->
    <script src="assets/js/jquery.placeholder.min.js"></script>
    <!-- Animation -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Main -->
    <script src="assets/js/main.js"></script>
</body>

</html>
