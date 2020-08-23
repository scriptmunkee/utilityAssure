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

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-167688480-1');
    </script>


    <!-- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Utility Assure Ltd. We offer a refreshing approach to business energy. We believe business energy costs should be a reflection of business needs. Our first focus is to be fully transparent.">
    <!-- SITE TITLE -->
    <title>Utility Assure ltd</title>
    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="css/bootstrap.css">
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
    if (!isset($_COOKIE['accept-cookies'])) {
    ?>
        <div class="cookie-banner">
            <div class="cookie-container">
                <p>I use cookies on this website. By using this website, I'll assume you consent to <a href="">the cookies I set</a></p>
                <a href="?accept-cookies" class="cookie-button">Ok, Continue</a>
            </div>
        </div>
    <?php
    }
    ?>
    <!-- End cookie banner-->
    <!-- privacy Policy Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Privacy Policy</h4>
                </div>
                <div class="modal-body">
                    <p>This privacy policy sets out how Utility Assure LTD uses and protects any information that you give Utility Assure LTD when you use this website.</p>
                    <p>Utility Assure LTD is committed to ensuring that your privacy is protected. Should we ask you to provide certain information by which you can be identified when using this website, then you can be assured that it will only be used in accordance with this privacy statement.</p>
                    <p>Utility Assure LTD may change this policy from time to time by updating this page. You should check this page from time to time to ensure that you are happy with any changes. This policy is effective from 01/05/2020.</p>
                    <h5><strong>WHAT WE COLLECT</strong>
                        <h5>
                            <p>We may collect the following information:</p>
                            <p>Name and job title</p>
                            <p>Contact information including email address</p>
                            <p>Demographic information such as postcode, preferences and interests</p>
                            <h5><strong>WHAT WE DO WITH THE INFORMATION WE GATHER</strong>
                                <h5>
                                    <p>We require this information to understand your needs and provide you with a better service, and in particular for the following reasons:</p>
                                    <p>Internal record keeping.</p>
                                    <p>We may use the information to improve our products and services.</p>
                                    <p>We may periodically send promotional emails about new products, special offers or other information which we think you may find interesting using the email address which you have provided.</p>
                                    <h5><strong>SECURITY</strong>
                                        <h5>
                                            <p>We are committed to ensuring that your information is secure. In order to prevent unauthorised access or disclosure, we have put in place suitable physical, electronic and managerial procedures to safeguard and secure the information we collect online.</p>
                                            <h5><strong>HOW WE USE COOKIES</strong>
                                                <h5>
                                                    <p>A cookie is a small file which asks permission to be placed on your computer’s hard drive. Once you agree, the file is added and the cookie helps analyse web traffic or lets you know when you visit a particular site. Cookies allow web applications to respond to you as an individual. The web application can tailor its operations to your needs, likes and dislikes by gathering and remembering information about your preferences.</p>
                                                    <p>We use traffic log cookies to identify which pages are being used. This helps us analyse data about webpage traffic and improve our website in order to tailor it to customer needs. We only use this information for statistical analysis purposes and then the data is removed from the system.</p>
                                                    <p>Overall, cookies help us provide you with a better website by enabling us to monitor which pages you find useful and which you do not. A cookie in no way gives us access to your computer or any information about you, other than the data you choose to share with us.</p>
                                                    <p>You can choose to accept or decline cookies. Most web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. This may prevent you from taking full advantage of the website.</p>
                                                    <h5><strong>LINKS TO OTHER WEBSITES</strong>
                                                        <h5>
                                                            <p>Our website may contain links to other websites of interest. However, once you have used these links to leave our site, you should note that we do not have any control over that other website. Therefore, we cannot be responsible for the protection and privacy of any information which you provide whilst visiting such sites and such sites are not governed by this privacy statement. You should exercise caution and look at the privacy statement applicable to the website in question.</p>
                                                            <h5><strong>CONTROLLING YOUR PERSONAL INFORMATION</strong>
                                                                <h5>
                                                                    <p>You may choose to restrict the collection or use of your personal information in the following ways:</p>
                                                                    <p>Whenever you are asked to fill in a form on the website, look for the box that you can click to indicate that you do not want the information to be used by anybody for direct marketing purposes.</p>
                                                                    <p>If you have previously agreed to us using your personal information for direct marketing purposes, you may change your mind at any time by writing to or emailing us at enquiries@utilityassure.co.uk</p>
                                                                    <p>We will not sell, distribute or lease your personal information to third parties unless we have your permission or are required by law to do so. We may use your personal information to send you promotional information about third parties which we think you may find interesting if you tell us that you wish this to happen.</p>
                                                                    <p>You may request details of personal information which we hold about you under the Data Protection Act 1998. A small fee will be payable. If you would like a copy of the information held on you please write to East Durham Business Centre, Wingate, Durham TS28 5HD.</p>
                                                                    <p>If you believe that any information we are holding on you is incorrect or incomplete, please write to or email us as soon as possible at the above address. We will promptly correct any information found to be incorrect.</p>
                                                                    <p>To see Utility Assure’s full privacy policy please contact enquiries@utilityasssure.co.uk</p>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END Privacy policy Modal -->
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
                <div class="col-sm-12 col-header-txt lr-padding">
                    <h1 class="animate delay-c fadeInUp display-none">OFFERING A <span>REFRESHING APPROACH</span> TO BUSINESS ENERGY</h1>
                    <a class="btn-transparent animate delay-c fadeInUp display-none smoothscroll" href="#overview">Discover more</a>
                    <a class="btn-transparent animate delay-c fadeInUp display-none smoothscroll" href="#contact">Contact Us</a>
                </div>

            </div>
        </div>
    </header>
    <!-- END HEADER -->
    <!-- OVERVIEW -->
    <section id="overview" class="sec-overview bg-white">
        <h2 class="sec-title">Overview</h2>
        <p class="subheader">I work with businesses on an array of energy issues. <br>My services include disputing overpayments, billing issues and metering issues. I also procure energy contracts and look at ways of reducing consumption through technology, behavioural changes and auditing. <br>I pride myself on having a transparent and ethical approach when working with my clients building trusted relationships.</p>
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
                        <h5>Resolution<br />Service</h5>
                        <p>I work on businesses behalf to resolve energy related issues which have become time consuming, tedious and stressful.</p>
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
                        <h5>Contract<br /> Procurement</h5>
                        <p>I believe business energy costs should be a reflection of the business needs. There is no one size fits all every business is different.</p>
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
                        <h5>Energy<br />Services</h5>
                        <p>I will complete a full energy audit and report back my findings with honest recommendations.</p>
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
                        <h5>Fully<br />Supported</h5>
                        <p>Complete ongoing relationship management accross all services with a direct line to myself.</p>
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
        <!-- <div class="row row-1">
            <div class="col-sm-12 col-lg-10 col-lg-offset-1">
                <div class="row row-2">
                    <div class="col-sm-4 step-1">
                        <img src="img/steps/4.png" alt="step-1" class="animate delay-a img-responsive">
                    </div>
                    <div class="col-sm-4 step-2">
                        <img src="img/steps/5.png" alt="step-2" class="animate delay-b img-responsive">
                    </div>
                    <div class="col-sm-4 step-3">
                        <img src="img/steps/6.png" alt="step-3" class="animate delay-c img-responsive">
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row row-1 writing">
            <div class="col-sm-12 col-lg-10 col-lg-offset-1">
                <div class="row row-2">
                    <div class="col-sm-4 step-1">
                        <div class="step-desc">
                            <span>01</span>
                            <h4>Consultation</h4>
                            <hr>
                            <p>We will have a detailed and thorough chat regarding your current energy issues your business is facing.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 step-2">
                        <div class="step-desc">
                            <span>02</span>
                            <h4>Evaluation</h4>
                            <hr>
                            <p>With a detailed understanding of the situation I will evaluate all possible solutions.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 step-3">
                        <div class="step-desc">
                            <span>03</span>
                            <h4>Resolution</h4>
                            <hr>
                            <p>I will present our findings and offer a resolution that best fits your business needs.</p>
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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="mcwidget-embed" data-widget-id="12596041"></div>
            </div>
        </div>
    </div>

    <!-- <section id="team" class="sec-team bg-gradient-horizontal bg-img">
        <div class="bg-img"></div>
        <h2 class="sec-title">About Me</h2>

        <p class="subheader">Lorem ipsum dolor sit amet consectetur adipiscing elit donec tempus pellentesque dui <br /> vel tristique purus justo vestibulum eget lectus non gravida ultrices</p>
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
    </section> -->

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
                        <p>I can be found below and contact in any way you like. We look forward to hearing from you.</p>
                        <div class="contact-info">
                            <h5><i class="icon ion-ios-location"></i> Location</h5>
                            <h6>East Durham Business Centre, Station Town, Wingate, TS28 5HD</h6>
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
                    <div class="google-map">

                        <iframe id="iframe" src="https://www.google.com/maps/embed/v1/view?key=AIzaSyDEdxgVop403NB9yZkpDt1bUGyj0-uXBM0&center=54.721486,-1.368433&zoom=18&maptype=satellite" allowfullscreen style="overflow:hidden;height:100%;width:100%" height="100%" width="100%" min-height="533px"></iframe>

                    </div>



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
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> By ticking this box you agree to my
                                <a href="#" data-toggle="modal" data-target="#myModal">privacy policy</a>
                            </label>
                        </div>
                        <button type="submit" value="send">Send message <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>

                        <span id="ffsuccess"></span>
                        <p id="fftext"></p>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <div id="footer" class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="img/nav/logo.png" alt="logo" />
                </div>
                <div class="col-md-7 footer-text">
                    <p>Registered Office: East Durham Business Centre, Station Town, Wingate TS28 5HD</p>
                    <p>Company registration number: 12574854
                </div>
                <div class="col-md-2 footer-privacy">
                    <a href="" data-toggle="modal" data-target="#myModal">Privacy Policy</a>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACT -->

    <a href="#" class="scrollup"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
    <!-- Scripts -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!--        <script type="text/javascript" src="js/cookie.js"></script>-->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <!--        <script type="text/javascript" src="js/gmap.js"></script>-->
    <script type="text/javascript" src="js/custom-animations.js"></script>
    <script type="text/javascript" src="js/google.js"></script>
    <!-- ManyChat -->
<script src="//widget.manychat.com/104142627971426.js" async="async"></script>

    <script type="text/javascript" src="js/theme.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCU2BvWjdUumI0OJSeraypMzUoR5nOB-V8&callback=initMap"></script>

</body>

</html>