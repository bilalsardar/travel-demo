<!DOCTYPE html>
<html lang="en">
    <!-- 
    Developed by : Bilal Sardar
    Css Framwork : MaterializeCss
    contact me : bilalsardar@outlook.com
    -->


    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="demo site for portfolio">
        <meta name="keywords" content="HTML,CSS,XML,Materialize,">
        <meta name="author" content="Bilal Sardar">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Parallax Template - Materialize</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="css/animate.css" rel="stylesheet" type="text/css">        
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">



        <script src="js/wow.min.js" type="text/javascript"></script>
        <script>
            new WOW().init();
        </script>

    </head>
    <body>

        <div class="navbar-fixed">
            <nav class="grey darken-4"> 
                <div class="nav-wrapper grey darken-4 nav_margin_left ">
                    <a href="#" class="brand-logo"><?php include("includes/logo.php"); ?> TRAVEL</a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#">About Us</a></li>                 
                        <li><a href="#">Tours</a></li>       
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Packages</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="#">About Us</a></li>                 
                        <li><a href="#">Tours</a></li>       
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Packages</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>




        <div id="index-banner" class="parallax-container">
            <div class="section no-pad-bot">
                <div class="container wow fadeInUp">
                    <br>   
                    <h1 class="header center light-green-text text-lighten-5"   style="margin : 13.1rem 0 1.68rem 0; text-transform: uppercase"  > Oceans of experience </h1>
                    <div class="row center">
                        <h5 class="header col s12 light" >Better prices. Exceptional people </h5>
                    </div>
                    <div class="row center">
                        <a href="#" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
                    </div>
                    <br><br>
                </div>
            </div>
            <div class="parallax">

                <img id="headerimage" src="img/background1.jpg" alt="Unsplashed background img 1">
                <!--<div class="video_overlays"></div>-->
                <!--                <video id="headervideo" autoplay  style="width: 100%;" height="auto" poster="img/Everything-is-right.jpg" id="bgvid" loop>
                                    <source src="img/Everything-is-right.webm" type="video/webm" />
                                </video>-->
            </div>
        </div>


        <div class="section grey lighten-4">

            <div class="row center ">
                <h3 class="wow fadeInUp" data-wow-delay="0.5s"> Featured Tours </h3>
                <h6 class="wow fadeInUp" data-wow-delay="0.8s">Explore the world with Intense! We offer you a vast variety of tours of all types featuring both exotic and<br/> already well-known destinations, some of which are listed below.</h6>
            </div> 



            <div class="row center" style="padding:0 15px 0 15px;">
                <div class="col l3 m6 s12">
                    <div class="card-container wow fadeInLeft" data-wow-delay="1">
                        <div class="card-heading  grey lighten-3">
                            <h5>new<br> <span>Destinations</span></h5>
                        </div>

                        <div class="img-container" style="background-image:url('https://images.unsplash.com/reserve/7MWItPwYTzOaKwG6SYLl_O14A0436.jpg?dpr=1&auto=format&fit=crop&w=767&h=511&q=80&cs=tinysrgb&crop=');">

                        </div>

                        <div class="card-footer  grey lighten-3">
                            <h5 class="left">turkey</h5>
                            <h5 class="right">$20000</h5>
                        </div>
                    </div>
                </div>


                <div class="col l3 m6 s12">
                    <div class="card-container wow fadeInDown" data-wow-delay="1">
                        <div class="card-heading teal lighten-4">
                            <h5>new<br> <span>Destinations</span></h5>
                        </div>

                        <div class="img-container" style="background-image:url('https://images.unsplash.com/photo-1461237439866-5a557710c921?dpr=1&auto=format&fit=crop&w=767&h=510&q=80&cs=tinysrgb&crop=');">


                        </div>

                        <div class="card-footer teal lighten-4">
                            <h5 class="left">turkey</h5>
                            <h5 class="right">$20000</h5>
                        </div>
                    </div>
                </div>


                <div class="col l3 m6 s12">
                    <div class="card-container wow fadeInUp" data-wow-delay="1">
                        <div class="card-heading grey lighten-2">
                            <h5>new<br> <span>Destinations</span></h5>
                        </div>

                        <div class="img-container" style="background-image:url('https://images.unsplash.com/photo-1443803098578-cb3824137a44?dpr=1&auto=format&fit=crop&w=767&h=1023&q=80&cs=tinysrgb&crop=');">

                        </div>

                        <div class="card-footer grey lighten-2">
                            <h5 class="left">turkey</h5>
                            <h5 class="right">$20000</h5>
                        </div>
                    </div>
                </div>


                <div class="col l3 m6 s12">
                    <div class="card-container wow fadeInRight" data-wow-delay="1">
                        <div class="card-heading  teal lighten-5">
                            <h5>new<br> <span>Destinations</span></h5>
                        </div>

                        <div class="img-container" style="background-image:url('https://images.unsplash.com/photo-1469286663112-f58a16c6f075?dpr=1&auto=format&fit=crop&w=767&h=958&q=80&cs=tinysrgb&crop=');">

                        </div>

                        <div class="card-footer  teal lighten-5">
                            <h5 class="left">turkey</h5>
                            <h5 class="right">$20000</h5>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <div class="parallax-container valign-wrapper">
            <div class="section no-pad-bot">
                <div class="container">
                    <div class="row center">
                        <h3 class="header col s12 panel2" >We Provide Only the Best Tours</h3>
                        <h6 class="col s12">With more than 230 trips to worldwide destinations, including Europe, North & Central, South America, Asia,
                            Australia & New Zealand, we continue to offer new ways and the best tours for traveling every year.</h6>  
                    </div>
                    <div class="row center">
                        <a href="#" class="center round-trans-button"><?php include("includes/plane_icon.php"); ?>Explore all tours</a>
                    </div>



                </div>
            </div>
            <div class="parallax"><img style=" min-width: 100%;min-height: 80%;" src="https://images.unsplash.com/photo-1463836031293-19bb6c6ef441?dpr=1&auto=format&fit=crop&w=1500&h=2250&q=80&cs=tinysrgb&crop=
                                       " alt="Unsplashed background img 2"></div>
        </div>

        <div class="container">
            <div class="section"> 

                <div class="row">
                    <div class="col s12 center">
                        <h4 class="blue-grey-text text-darken-4">What Customers Say</h4>
                        <p class="left-align center light" style="margin-bottom: 30px;line-height: 0.8em; color:#aaa; font-size: 1.2em;">Our clients’ testimonials are the best proof of our high level of service</p>
                    </div>
                </div>

                <!-- Testimonials --> 

                <div class="row">
                    <div class="col s4">
                        <div class="testimonial_image center ">
                            <img class="responsive-img circle" src="http://lorempixel.com/400/400/people" alt="face_image">
                        </div>

                        <div class="row">
                            <div class="testimonial_name center">
                                <h6> David Shepeard</h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="testimonial_text center ">
                                <p>"I always prefer my tours via travel, They have amazing offers and such a nice staff always ready to help, you wont find such coustomer service anywhere else"</p>
                            </div>
                        </div>

                    </div>

                    <div class="col s4">
                        <div class="testimonial_image center ">
                            <img class="responsive-img circle" src="http://lorempixel.com/400/400/people" alt="face_image">
                        </div>

                        <div class="row">
                            <div class="testimonial_name center">
                                <h6> bilal sardar</h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="testimonial_text center ">
                                <p>"Never taught i could get a vacation so cheap. they have amazing support and service. I highly recommend them"</p>
                            </div>
                        </div>

                    </div>
                    <div class="col s4">
                        <div class="testimonial_image center ">
                            <img class="responsive-img circle" src="http://lorempixel.com/400/400/people" alt="face_image">
                        </div>

                        <div class="row">
                            <div class="testimonial_name center">
                                <h6>gordon ramsey</h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="testimonial_text center ">
                                <p>"I have used their services only once, it was a good experience overall."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="parallax-container valign-wrapper">
            <div class="section no-pad-bot">
                <div class="container">
                    <div class="row center forest_div">
                        <h3 class="header col s12">Explore the Distant Corners of the World</h3>
                        <p class="col s12">With more than 230 trips to worldwide destinations, including Europe, North & Central, South America, Asia,
                            Australia & New Zealand, we continue to offer new ways and the best tours for traveling every year.</p>  
                    </div> 
                    <div class="row center">
                        <a href="#" id='svg_white' class="center"><?php include("includes/plane_icon.php"); ?>get in touch</a>
                    </div>
                </div>
            </div>
            <div class="parallax img_filter1"><img src="img/background3.jpg" alt="Unsplashed background img 3"></div>
        </div>







        <footer class="page-footer teal ">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <a href="#" class="logo white-text"><?php include("includes/logo.php"); ?> TRAVEL </a>
                        <p class="grey-text text-lighten-4">
                            Get in touch. will be happy to hear from you.                        
                        </p>


                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Available for <span class=" red-text text-accent-1"> Hire </span> or <span class=" red-text text-accent-1">Freelance</span></h5>
                        <ul>
                            <li><a class="white-text" href="#!">Contact Me</a></li>
                            <li><a class="white-text" href="#!">bilalsardar@outlook.com</a></li>
                            <!--<li><a class="white-text" href="#!">03353295080</a></li>-->
                        </ul> 
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Social Media</h5>
                        <ul>
                            <li><a class="white-text" href="https://linkedin.com/in/bilalsardar/">Linkedin</a></li>
                            <li><a class="white-text" href="https://codepen.io/bilalsardar/">CodePen</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    Made  by <a class=" red-text text-accent-1" href="https://linkedin.com/in/bilalsardar/" style="font-weight: 400;">Bilal Sardar</a>
                </div>
            </div>
        </footer>








        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>--> 
        <script src="js/materialize.js"></script>
        <!--<script src="js/init.js"></script>-->

        <script>



//            $(document).ready(function () {
//                 $('.headerimage').hide();
//                   $('.headervideo').show();
//                   
//                $(window).resize(function () {
//                    var width = $(document).width();
//                    var height = $(document).height();
//
//                    if (width < 600) {
//                        alert("small screen");
//                        $('.headerimage').show();
//                        $('.headervideo').hide();
//                    }
//                    else {
//                        $('.headerimage').hide();
//                        $('.headervideo').show();
//                    }
//                });
//            });




            (function ($) {
                $(function () {

                    $('.button-collapse').sideNav();
                    $('.parallax').parallax();
                }); // end of document ready
            })(jQuery); // end of jQuery name space




            // carousel init
            $('.carousel.carousel-slider').carousel({full_width: true});
            autoplay()
            function autoplay() {
                $('.carousel').carousel('next');
                setTimeout(autoplay, 4500);
            }

        </script>
    </body>
</html>
