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
    <div class="explorer_europe list_wrap">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="filter_wrap">
                        <h3 class="exp_title">Advanced Filter</h3>
                        <div class="filter_main_wrap">
                                <div class="filter_inner">
                                        <form action="#">
                                            <div class="input_field">
                                                    <input type="text" placeholder="What are you finding?" >
                                                    <button class="submit_btn" type="submit"> <i class="fa fa-search"></i> </button>
                                            </div>
                                            <div class="input_field">
                                                    <select class="wide">
                                                            <option data-display="Choose categories">cat 1</option>
                                                            <option value="1">cat 2</option>
                                                            <option value="2">cat 3</option>
                                                            <option value="3">cat 4</option>
                                                          </select>
                                            </div>
                                            <div class="input_field">
                                                    <select class="wide">
                                                            <option data-display="Location">USA</option>
                                                            <option value="1">Africa</option>
                                                            <option value="2">canada</option>
                                                          </select>
                                            </div>
                                            <div class="input_field ">
                                                <div class="inner">
                                                        <div class="check_1">
                                                                <input type="checkbox" id="fruit1" name="fruit-1" value="Apple">
                                                                <label for="fruit1">Open Now</label>
                                                        </div>
                                                        <div class="check_1">
                                                                <input type="checkbox" id="fruit4" name="fruit-4" value="Strawberry">
                                                                <label for="fruit4">Ratings</label>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="input_field">
                                                    <select class="wide">
                                                            <option data-display="Area (km)">Area (km)</option>
                                                            <option value="1">1km</option>
                                                            <option value="2">2km</option>
                                                          </select>
                                            </div>
                                            <div class="input_field">
                                                    <select class="wide">
                                                            <option data-display="Area (km)">Area (km)</option>
                                                            <option value="1">1km</option>
                                                            <option value="2">2km</option>
                                                          </select>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <div class="last_range">
                                            <label for="amount">Price range:</label>
            
                                                
                                                <div id="slider-range"></div>
                                                <p>
                                                    
                                                        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                                    </p>
                                                    <button class="boxed-btn2" >Reset</button>
                                    </div>
                        </div>
                    </div>
                </div>

             </div>
        </div>
    </div>

















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
  

   






    

    </body>
</html>
