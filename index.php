<?php


if (isset($_GET['accept-cookies'])) {
    setcookie('accept-cookies', 'true', time() + 31556925);
    header('Location: ./');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!--google analytics-->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167688480-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-167688480-1');
        </script>


        <!-- META -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Utility Assure Ltd. We offer a refreshing approach to business energy. Our first focus is to be fully transparent. We believe business energy costs should be a reflection of business needs">
        <!-- SITE TITLE -->
        <title>Utility Assure ltd</title>
        <!-- STYLESHEETS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/preset.css">
        <link rel="stylesheet" href="css/scroll-animation.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" id="triggerColor" href="css/triggerPlate/color0.css">        
        <link rel="stylesheet" id="grad_triggerColor" href="css/triggerPlate/gradient/color-0.css">        
        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="img/Favicon_app.png">
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
        <!--Loader-->
        <div class="loading">
            <div class="loading-center">
                <div class="loading-center-absolute">
                    <div class="object object_one"></div>
                    <div class="object object_two"></div>
                    <div class="object object_three"></div>
                </div>
            </div>
        </div>
        <!-- END LOADER-->
        <!-- cookie banner-->
        <?php
        if(!isset($_COOKIE['accept-cookies'])){
        ?>
        <div class="cookie-banner">
            <div class="cookie-container">
                <p>We use cookies on this website. By using this website, we'll assume you consent to <a href="">the cookies we set</a></p>
                <a href="?accept-cookies" class="cookie-button">Ok, Continue</a>
            </div>
        </div>
        <?php
        }
        ?>
        <!-- End cookie banner-->
        <!-- MAIN NAV -->
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">
                            <img src="img/nav/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right smoothscroll">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#overview">About</a></li>
                            <li><a href="#steps">Steps</a></li>
                            <li><a href="#testimonial">Testimonials</a></li>
                            <!--                            <li><a href="#team">Team</a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- END MAIN NAV -->
        <!-- HEADER -->
        <header id="home" class="header-home bg-img">
            <div class="bg-img"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-header-txt lr-padding">
                        <h1 class="animate display-none">WE OFFER A <span>REFRESHING</span> APPROACH TO BUSINESS ENERGY</h1>
                        <p class="animate delay-a display-none">Our first focus is to be fully transparent. We believe business energy costs should be a reflection of business needs</p>
                        <a class="btn-transparent animate delay-c display-none smoothscroll" href="#overview">Discover more</a>
                        <a class="btn-transparent animate delay-c display-none smoothscroll" href="#contact">Contact Us</a>
                    </div>
                    <div class="col-sm-5 col-md-offset-2 col-md-3 col-header-img right-padding">
                        <img src="img/header/header-img-5-speech.png" alt="header-img" id="mobile-size" class="img-header-lg header-img-new animate delay-c fadeInUp display-none">
                        <!--                        <img src="img/header/header-img-3.png" alt="header-img" class="img-header-sm delay-a display-none">-->
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER -->
        <!-- OVERVIEW -->
        <section id="overview" class="sec-overview bg-white">
            <h2 class="sec-title">Overview</h2>
            <p class="subheader">We work with businesses on an array of energy issues. <br>Our services include disputing overpayments, billing issues and metering issues. We also procure energy contracts and look at ways of reducing consumption through technology, behavioural changes and auditing. <br>We pride ourselves on having a transparent and ethical approach when working with our clients building trusted relationships.</p>
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-md-3">
                        <div class="wrapper ovi-item animate">
                            <div class="wrapper-img">
                                <!-- <img src="img/overview/ov1.png" alt="Overview icon" /> -->
                                <span class="overview-img lnr lnr-cog"></span>
                                <!-- <i class="overview-img fa fa-pencil" aria-hidden="true"></i> -->
                            </div>
                            <hr>
                            <h5>Resolution Service</h5>
                            <p>We work on businesses behalf to resolve energy related issues which have become time consuming, tedious and stressful.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="wrapper ovi-item animate delay-a">
                            <div class="wrapper-img">
                                <!-- <img src="img/overview/ov2.png" alt="Overview icon" /> -->
                                <span class="overview-img lnr lnr-pencil"></span>
                                <!-- <i class="overview-img fa fa-heart" aria-hidden="true"></i> -->
                            </div>
                            <hr>
                            <h5>Contract Procurement</h5>
                            <p>We believe business energy costs should be a reflection of the business needs. There is no one size fits all every business is different.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="wrapper ovi-item animate delay-b">
                            <div class="wrapper-img ">
                                <!-- <img src="img/overview/ov3.png" alt="Overview icon" /> -->
                                <span class="overview-img lnr lnr-chart-bars"></span>
                                <!-- <i class="overview-img fa fa-cog" aria-hidden="true"></i> -->
                            </div>
                            <hr>
                            <h5>Energy Services</h5>
                            <p>Energy auditing with honest recomendations.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="wrapper ovi-item animate delay-c">
                            <div class="wrapper-img">
                                <!-- <img src="img/overview/ov4.png" alt="Overview icon" /> -->
                                <span class="overview-img lnr lnr-phone-handset"></span>
                                <!-- <i class="overview-img fa fa-phone" aria-hidden="true"></i> -->
                            </div>
                            <hr>
                            <h5>Fully supported</h5>
                            <p>Complete ongoing relationship management accross all services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END OVERVIEW -->
        <!-- STEPS -->
        <section id="steps" class="sec-steps bg-img bg-gradient-vertical">
            <div class="bg-img"></div>
            <h2 class="sec-title">How it works</h2>
            <p class="subheader">A brief and simple overview of how we look after you.</p>
            <div class="">
                <div class="row row-1">
                    <div class="col-sm-12 col-lg-10 col-lg-offset-1">
                        <div class="row row-2">
                            <div class="col-sm-4 step-1">
                                <img src="img/steps/4.png" alt="step-1" class="animate delay-a img-responsive">
                                <div class="step-desc">
                                    <span>01</span>
                                    <h4>Consultation</h4>
                                    <hr>
                                    <p>We will have a detailed and thorough chat regarding your current energy issues your business is facing.</p>
                                </div>
                            </div>
                            <div class="col-sm-4 step-2">
                                <img src="img/steps/5.png" alt="step-2" class="animate delay-b img-responsive">
                                <div class="step-desc">
                                    <span>02</span>
                                    <h4>Evaluation</h4>
                                    <hr>
                                    <p>With a detailed understanding of the situation we will evaluate all possible solutions.</p>
                                </div>
                            </div>
                            <div class="col-sm-4 step-3">
                                <img src="img/steps/6.png" alt="step-3" class="animate delay-c img-responsive">
                                <div class="step-desc">
                                    <span>03</span>
                                    <h4>Resolution</h4>
                                    <hr>
                                    <p>We will present our findings and offer a resolution that best fits your business needs.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END STEPS -->
        <!-- TESTIMONIAL -->
        <section id="testimonial" class="sec-testimonial bg-white">
            <h2 class="sec-title">What people are saying</h2>

            <p class="subheader">A word from some of our happy clients.</p>
            <div class="container">
                <div class="row">
                    <div id="owl-testimonial" class="owl-testimonial">
                        <div class="wrapper-testimonial">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/testimonial/pb.png" alt="test2">
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    <p>I deal with a lot of people from a lot of different businesses on a daily basis.
                                        It is not very often that I feel compelled to voice my opinion about someone, however you, in my opinion are are very rare individual indeed.
                                        Sadly it is not very often I have the pleasure of being pleasantly surprised as in your case.
                                        Having suffered and been let down so very badly by my energy supplier over what has turned out to be a number of years, I honestly did not know what to do or where to turn.
                                        Kaylie, you have been absolutely amazing.
                                        Your integrity, attention to detail and professionalism while dealing with my energy issues has been simply fantastic and a refreshing change from the norm!
                                        Furthermore, to actually uncover that I have been overcharged over £4,000 and fight successfully to have that money returned is wonderful. 
                                        Thank you so very much. I do hope your company realise and understands the caliber of work you produce on their behalf.
                                        You are a credit to them and yourself..</p>
                                    <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <h6>Carlo Citrone</h6>
                                    <h6>Peakbody Fitness and Nutrition</h6>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper-testimonial">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/testimonial/church.png" alt="test1">
                                </div>
                                <div class="media-body">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    <p>Thank you so much for helping me with my utility problems. Your clear advice and help has saved us a lot of time and money, we are eternally grateful.</p>
                                    <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <h6>Caroline Martin</h6>
                                    <h6>Ripley Church</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END TESTIMONIAL -->
        <!-- TEAM AMMENDS NEEDED ON CENTERING-->

        <!--
<section id="team" class="sec-team bg-gradient-horizontal bg-img">
<div class="bg-img"></div>
<h2 class="sec-title">Our Team</h2>

<p class="subheader">Lorem ipsum dolor sit amet consectetur adipiscing elit donec tempus pellentesque dui <br/> vel tristique purus justo vestibulum eget lectus non gravida ultrices</p>
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3">
<div class="wrapper animate">
<div class="wrapper-img">
<img class="img-responsive" src="img/team/1.jpg" alt="team">
</div>
<h5>Kaylie Bond</h5>
<h6>Managing Director</h6>
<hr>
<div class="social">
<a href="https://www.facebook.com/Utility-Assure-104142627971426/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
<a href="https://uk.linkedin.com/in/kaylie-louise-bond-394255145"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
</div>
</div>
</div>
<div class="col-md-6"></div>
</div>
</div>
</section>
-->
        <!-- END TEAM -->
        <!-- CONTACT -->
        <section id="contact" class="sec-contact bg-img">
            <div class="bg-img"></div>
            <h2 class="sec-title">Get in touch</h2>

            <p class="subheader">If you're experiencing any issues or want to chat please feel free to reach out and get in touch</p>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 animate contact_map_pad">
                        <div class="contact">
                            <h3>Contact us</h3>
                            <p>We can be found below and contact in any way you like. We look forward to hearing from you.</p>
                            <div class="contact-info">
                                <h5><i class="icon ion-ios-location"></i> Location</h5>
                                <h6>East Durham Business Cnetre, Station Town, Wingate, TS28 5HD</h6>
                            </div>
                            <div class="contact-info">
                                <h5><i class="icon ion-ios-telephone"></i> Phone</h5>
                                <h6>01429 802057</h6>
                            </div>
                            <div class="contact-info">
                                <h5><i class="icon ion-email-unread"></i> Email</h5>
                                <h6>info@utilityassure.co.uk</h6>
                            </div>
                            <div class="social">
                                <a href="https://www.facebook.com/Utility-Assure-104142627971426/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <!--                                <img src="img/contact/LinkedIn.png" href="https://uk.linkedin.com/in/kaylie-louise-bond-394255145" />-->
                            </div>

                        </div>


                    </div>
                    <div class="col-md-4 animate delay-c">
                        <!--                            <div id="googleMap" class="google-maps"></div>-->
                        <!--
<div class="embed-responsive embed-responsive-4by3 contact_map ">
<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed/v1/search?key=AIzaSyDEdxgVop403NB9yZkpDt1bUGyj0-uXBM0&q=record+stores+in+Seattle" allowfullscreen></iframe>
</div>
-->
                        <iframe id="iframe" src="https://www.google.com/maps/embed/v1/view?key=AIzaSyDEdxgVop403NB9yZkpDt1bUGyj0-uXBM0&center=54.721486,-1.368433&zoom=18&maptype=satellite" allowfullscreen style="overflow:hidden;height:100%;width:100%" height="100%" width="100%" min-height="533px"></iframe> 
                        <!--                             https://www.google.com/maps/embed/v1/view?key=AIzaSyDEdxgVop403NB9yZkpDt1bUGyj0-uXBM0&center=54.721486,-1.368433&zoom=8&maptype=satellite-->
                    </div>
                    <div class="col-md-4 animate delay-a">
                        <form class="" action="mail.php" method="POST" enctype="multipart/form-data">
                            <h3>Get in Touch!</h3>
                            <div class="form-group">
                                <input name="uname" type="text" class="form-control uName" placeholder="Your name">
                            </div>
                            <div class="form-group">
                                <input name="uemail" type="email" class="form-control uEmail" placeholder="Your email">
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control msg" placeholder="Message"></textarea>
                            </div>
                            <!--
<div class="form-group">
<ul>
<li>
<input type="checkbox"  name="checkbox1" class=""/>
</li>
<li>
<label>
By using this form you agree with the sotrage and handling of your data by this website in accordance with our <a href="#">Privacy Policy</a>
</label> 
</li>

</ul>

</div>
-->
                            <!--
<div class="">
<p>GDPR</p>
<p>
<input name="gdpr" type="checkbox" class=" checkbox">
I consent to having this website store my submitted information so they can respond to my inquiry.
</p>
</div>
-->
                            <button type="submit" value="send">Send message <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            <p id="fftext"></p>
                            <span id="ffsuccess"></span>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CONTACT -->
        <a href="#" class="scrollup"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
        <!-- Scripts -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <!--        <script type="text/javascript" src="js/cookie.js"></script>-->
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBumN1FxU0vF8HVI_qy9yFlwcZ4Wop_RtY"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.waypoints.min.js" ></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/gmap.js"></script>
        <script type="text/javascript" src="js/custom-animations.js"></script>

        <script type="text/javascript" src="js/theme.js"></script>

    </body>
</html>
