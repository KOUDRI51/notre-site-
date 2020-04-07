<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>evento</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here for home and category  -->
    <link rel="stylesheet" href={{asset('assets/css_home/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{asset('assets/css_home/owl.carousel.min.css')}}>
    <link rel="stylesheet" href={{asset('assets/css_home/magnific-popup.css')}}>
    <link rel="stylesheet" href={{asset('assets/css_home/font-awesome.min.css')}}>
    <link rel="stylesheet" href={{asset('assets/css_home/themify-icons.css')}}>
    <link rel="stylesheet" href={{asset('assets/css_home/nice-select.css')}}>
    <link rel="stylesheet" href={{asset('assets/css_home/flaticon.css')}}>
    <link rel="stylesheet" href={{asset('assets/css_home/gijgo.css')}}>
    <link rel="stylesheet" href={{asset('assets/css_home/animate.css')}}>
    <link rel="stylesheet" href={{asset('assets/css_home/slick.css')}}>
    <link rel="stylesheet" href={{asset('assets/css_home/slicknav.css')}}>
    <link rel="stylesheet" href={{asset('https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css')}}>
    <link rel="stylesheet" href={{asset('assets/css_home/style.css')}}>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->




</head>

<!-- header-start -->
<body>
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <h2>evento</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.html">home</a></li>
                                           <!-- listinng --> 
                                        
                                        <li><a href="Listings.html"> search </a></li>
                                            
                                         <li><a href="about.html">about</a></li>
                                           
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                            @if (Route::has('login'))
                                                       <div class="top-right links">
                                                          @auth
                                                            <a href="{{ url('/home') }}">Home</a>
                                                           @else
                                                            <a href="{{ route('login') }}">Login</a>

                                                             @if (Route::has('register'))
                                                              <a href="{{ route('register') }}">Register</a>
                                                             @endif
                                                          @endauth
                                                      </div>
                                            @endif

            
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->


    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-10">
                        <div class="slider_text text-center justify-content-center">
                            <p>Qui part à la chasse perd sa place </p>
                            <h3>Nous réservons vos entrées pour les meilleurs events</h3>
                            <div class="search_form">
                                <form action="#">
                                    <div class="row align-items-center">
                                        <div class="col-xl-5 col-md-4">
                                            <div class="input_field">
                                                <input type="text" placeholder="What are you finding?">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-4">
                                            <div class="input_field location">
                                                <input type="text" placeholder="Location">
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-4">
                                            <div class="button_search">
                                                <button class="boxed-btn2" type="submit">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="quality">
                                <ul>
                                    <li>
                                        <button>festival</button>
                                    </li>
                                    <li>
                                        <button>concert</button>
                                    </li>
                                    <li>
                                        <button>evenement sportif</button>
                                    </li>
                                    <li>
                                        <button>theatre et comedie</button>
                                    </li>
                                    <li>
                                        <button>musical festival</button>
                                    </li>
                                    <li>
                                        <button>cinema </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
<!-- most popular category -->
<div class="popular_catagory_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60 text-center">
                        <p>Discover</p>
                        <h3>
                            Most Popular Categories
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src={{asset('img/catagory/f.jpg')}} alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                <a href="Listings.html"><h4>festival</h4></a>
                                <span>05 Listings</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src={{asset('img/catagory/2.png')}} alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                <a href="Listings.html"><h4>Concerts</h4></a>
                                <span>05 Listings</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src={{asset('img/catagory/c.jpg')}} alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                    <a href="Listings.html"><h4>cinema</h4></a>
                                <span>05 Listings</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src={{asset('img/catagory/4.png')}} alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                    <a href="Listings.html"><h4>Music Festival</h4></a>
                                <span>05 Listings</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src={{asset('img/catagory/t.jpg')}} alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                    <a href="Listings.html"><h4>theatre et comedie</h4></a>
                                <span>05 Listings</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src={{asset('img/catagory/s.jpg')}} alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                    <a href="Listings.html"><h4>evenement sportif</h4></a>
                                <span>05 Listings</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src={{asset('img/catagory/co.jpg')}} alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                    <a href="Listings.html"><h4>conference</h4></a>
                                <span>05 Listings</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src={{asset('img/catagory/sc.jpg')}} alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                    <a href="Listings.html"><h4>evenement scientifique</h4></a>
                                <span>05 Listings</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- application 
    <div class="container-fluid">
    <section class="pt-5 bg-image overlay-primary fixed overlay" >
      <div class="container">
        <div class="row">
          <div class="col-md-6 align-self-center text-center text-md-left mb-5 mb-md-0">
            <h2 class="text-white">Get The Mobile Apps</h2>
            <p class="mb-5 lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci impedit.</p>
            <p class="mb-0">
              <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span class="icon-apple mr-3"></span>App Store</a>
              <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span class="icon-android mr-3"></span>Play Store</a>
            </p>
          </div>


          <div class="col-md-6 ml-auto align-self-end">
            <img src={{asset('css_app/images/apps.png')}} alt="Free Website Template by Free-Template.co" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
</div>
-->



<!-- footer start -->
<footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-3">
                        <div class="footer_widget">
                        <h3 class="footer_title">
                               evento 
                            </h3>
                            <p>
                                notre site distinee pour vous <br> pour tout reservation de billet  <br>
                                tout type d'evenement 
                            </p>

                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                              category 
                            </h3>
                            <ul>
                                <li><a href="#">festival</a></li>
                                <li><a href="#">cinema</a></li>
                                <li><a href="#">Concerts</a></li>
                                <li><a href="#">theatre et comedie</a></li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Useful Links
                            </h3>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">home</a></li>
                                <li><a href="#">search</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                     have a question ?  
                            </h3>
                            <div class="newsletter_form">
	                                   <ul>
	                                       <li><span class="icon icon-map-marker"></span><span class="text">49 route neuve bouzareah alger </span></li>
	                                       <li><a href="#"><span class="icon icon-phone"></span><span class="text">0776242121</span></a></li>
	                                     <li><a href="#"><span class="icon icon-envelope"></span><span class="text">evento@hotmail.com</span></a></li>
	                                   </ul>
	                       </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        </div>
    </footer>
    <!--/ footer end  -->










 <!-- jQuery -->
 <script src={{asset('assets/js/jquery.min.js')}}></script>
   <!-- Bootstrap -->
  
    <script src={{asset('assets/js/bootstrap.min.js')}}></script>
<!-- link that opens popup -->
<script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src={{asset('assets/css_home/js/vendor/modernizr-3.5.0.min.js')}}></script>
    <script src={{asset('assets/css_home/js/vendor/jquery-1.12.4.min.js')}}></script>
    <script src={{asset('assets/css_home/js/popper.min.js')}}></script>
    <script src={{asset('assets/css_home/js/bootstrap.min.js')}}></script>
    <script src={{asset('assets/css_home/js/owl.carousel.min.js')}}></script>
    <script src={{asset('assets/css_home/js/isotope.pkgd.min.js')}}></script>
    <script src={{asset('assets/css_home/js/ajax-form.js')}}></script>
    <script src={{asset('assets/css_home/js/waypoints.min.js')}}></script>
    <script src={{asset('assets/css_home/js/jquery.counterup.min.js')}}></script>
    <script src={{asset('assets/css_home/js/imagesloaded.pkgd.min.js')}}></script>
    <script src={{asset('assets/css_home/js/scrollIt.js')}}></script>
    <script src={{asset('assets/css_home/js/jquery.scrollUp.min.js')}}></script>
    <script src={{asset('assets/css_home/js/wow.min.js')}}></script>
    <script src={{asset('assets/css_home/js/nice-select.min.js')}}></script>
    <script src={{asset('assets/css_home/js/jquery.slicknav.min.js')}}></script>
    <script src={{asset('assets/css_home/js/jquery.magnific-popup.min.js')}}></script>
    <script src={{asset('assets/css_home/js/plugins.js')}}></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src={{asset('assets/css_home/js/slick.min.js')}}></script>



    <!--contact js-->
    <script src={{asset('assets/css_home/js/contact.js')}}></script>
    <script src={{asset('assets/css_home/js/jquery.ajaxchimp.min.js')}}></script>
    <script src={{asset('assets/css_home/js/jquery.form.js')}}></script>
    <script src={{asset('assets/css_home/js/jquery.validate.min.js')}}></script>
    <script src={{asset('assets/css_home/js/mail-script.js')}}></script>


    <script src={{asset('assets/css_home/js/main.js')}}></script>
  

<!-- js pour login et sign in -->

   
 <!-- JS  login et sign in end -->


   






    

    </body>
</html>
