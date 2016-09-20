<!DOCTYPE html>
<!--[if lte IE 9]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Match4Muslim - Home</title>

    <!--=================================
    Meta tags
    =================================-->

    <meta name="description" content="">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />

    <!--=================================
    Style Sheets
    =================================-->
{{--
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,600,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
--}}
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/pixeden-fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/flexslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/jquery.vegas.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/prettyPhoto.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/animations.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/dl-menu.css')}}">
    <link rel="stylesheet" typr="text/css" href="{{url('assets/css/main.css')}}">

    <script src="{{url('assets/js/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
    <script src="{{url('assets/js/angular.min.js')}}"></script>
    <script src="{{url('assets/js/angular-cookies.min.js')}}"></script>
    <script src="{{url('assets/js/ngclipboard.min.js')}}"></script>
    <script src="{{url('assets/js/ng-file-upload.min.js')}}"></script>
    <script src="{{url('assets/js/ng-file-upload-shim.min.js')}}"></script>
    <script src="{{url('assets/js/ui-bootstrap-tpls-1.3.3.js')}}"></script>
    <script src="{{url('assets/js/metri.js')}}"></script>

</head>
<body ng-app="mainApp">

<!--======================
Preloading Splash Screen
=======================->
<div id="jSplash">
    Match4Muslim, &copy;All Rights Reserved <a href="#">Match4Muslim</a>
</div>
<!--========================================
Body Content
===========================================-->

{{--
<div class="quick-access">
    <div class=" container">
        <ul class="getintouch">
            <li>Get in touch:</li>
            <li>
                <a href="tel:18001231234">
                    <span class="livicon" data-name="tablet" data-onparent="true" data-size="20"></span>1.800.123.1234
                </a>
            </li>
            <li>
                <a href="mailto:info@yourdomain.com">
                    <span class="livicon" data-name="mail" data-onparent="true" data-size="20"></span>info@yourdomain.com
                </a>
            </li>

        </ul>
        <ul class="social">
            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li ><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li ><a href="#"><span class="fa fa-pinterest"></span></a></li>
            <li ><a href="#"><span class="fa fa-linkedin"></span></a></li>
            <li ><a href="#"><span class="fa fa-flickr"></span></a></li>
            <li ><a href="#"><span class="fa fa-youtube"></span></a></li>
            <li ><a href="#"><span class="fa fa-google-plus"></span></a></li>
        </ul>
    </div>
</div>--}}
<!--=================================
header
=================================-->
<header >
    <nav id="sticktop" class="navbar navbar-default">
        <div class="container" ng-controller="specificProfileController">
           {{-- <h4>Inline</h4>
            <div style="display:inline-block; min-height:290px;">
                <div uib-datepicker ng-model="dt" class="well well-sm" datepicker-options="options"></div>
            </div>
--}}
            <div class="navbar-header">
                <a class="navbar-brand" href="{{url('index')}}"><img src="{{url('assets/img/basic/logo-nav1.png')}}" alt="/"></a>
            </div>

            <div id="dl-menu" class="xv-menuwrapper responsive-menu">
                <button class="dl-trigger">Open Menu</button>
                <div class="clearfix"></div>
                <ul class="dl-menu">
                    <li class="parent active"><a href="{{url('index')}}">Home</a>
                        <ul class="lg-submenu">
                            <li><a href="{{url('index')}}">Home <span class="badge badge-yellow">unique</span></a></li>
                            <!--li><a href="index2.html">Home Two</a></li>
                            <li><a href="index3.html">Home Three</a></li>
                            <li><a href="index4.html">Home Four <span class="badge badge-green">events</span></a></li>
                            <li><a href="index5.html">Home Five <span class="badge">mailchimp</span></a></li-->
                        </ul>
                    </li>
                    <li class="parent"><a href="{{url('about')}}">About Us</a>
                  {{--      <ul class="lg-submenu">
                            <li class="parent"><a href="#">Landing pages <span class="badge badge-red">Hot</span></a>
                                <ul class="lg-submenu">
                                    <li><a href="index-onepage.html">Creative</a></li>
                                    <li><a href="index-onepage2.html">Creative Large</a></li>
                                    <li><a href="resume.html">Resume/CV</a></li>
                                    <li><a href="index-blog.html">Blogger/Writter</a></li>
                                </ul>
                            </li>
                            <li class="parent"><a href="#">General pages</a>
                                <ul class="lg-submenu">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="about-2.html">About 2</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="services-styles.html">Services Styles</a></li>
                                    <li><a href="events.html">Events</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </li>
                            <li class="parent"><a href="#">Portfolio pages</a>
                                <ul class="lg-submenu">
                                    <li><a href="portfolio-2col.html">Two Column</a></li>
                                    <li><a href="portfolio-3col.html">Three Column</a></li>
                                    <li><a href="portfolio-4col.html">Four Column</a></li>
                                </ul>
                            </li>
                            <li class="parent"><a href="#">Single pages</a>
                                <ul class="lg-submenu">
                                    <li><a href="event-detail.html">Event Single</a></li>
                                    <li><a href="portfolio-detail.html">Portfolio Single</a></li>
                                    <li><a href="portfolio-detail2.html">Portfolio Single 2</a></li>
                                    <li><a href="member-timeline.html">Member/User</a></li>
                                </ul>
                            </li>
                            <li class="parent"><a href="#">Special pages <span class="badge badge-green">bonus</span></a>
                                <ul class="lg-submenu">
                                    <li><a href="coming-soon.html">Coming soon</a></li>
                                    <li><a href="error-404.html">404 error</a></li>
                                </ul>
                            </li>
                        </ul>
                  --}}  </li>
                    <li class="parent ">
                        <a href="{{url('bureaupanel')}}">Bureau</a>

<ul class="lg-submenu">
                    @if (Auth::guest())

                        <li><a href="{{url('/login')}}"><i class="fa fa-btn fa-sign-in"></i>Bureau Login</a></li>
                    @elseif(Auth::user()->bureauprofiles)
                        <li>
                            <a href="{{url('/bureaupanel')}}">
                                Bureau Panel
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{url('bureauprofile/create')}}">
                                Bureau Profile
                            </a>
                        </li>
                    @endif

                                </ul>
                    </li>

                    <li class="parent megamenu"><a href="{{url('viewprofiles#?id=1')}}">Search</a>
                        <ul class="lg-submenu">

                            <li><a>Search Country</a>
                                <ul class="lg-submenu">
                                    <li ng-click="profilefilter()"><a href="{{url('viewprofiles#?id=2')}}"><i class="fa fa-magic"></i>USA</a></li>
                                    <li ng-click="profilefilter()"><a href="{{url('viewprofiles#?id=3')}}"><i class="fa fa-folder"></i>UK</a></li>
                                    <li><a href="Sitemap.html"><i class="fa fa-sitemap"></i>Arabia</a></li>
                                </ul>
                            </li> <li><a>Search Category</a>
                                <ul class="lg-submenu">
                                    <li><a href="accordian.html"><i class="fa fa-magic"></i>with in last week</a></li>
                                    <li><a href="tabs.html"><i class="fa fa-folder"></i>last month</a></li>
                                    <li><a href="Sitemap.html"><i class="fa fa-sitemap"></i>all</a></li>
                                </ul>
                            </li> <li><a>Search Profession</a>
                                <ul class="lg-submenu">
                                    <li><a href="accordian.html"><i class="fa fa-magic"></i>Manager</a></li>
                                    <li><a href="tabs.html"><i class="fa fa-folder"></i>Engineer</a></li>
                                    <li><a href="Sitemap.html"><i class="fa fa-sitemap"></i>Doctor</a></li>
                                </ul>
                            </li>
                            <li><a>Search language</a>
                                <ul class="lg-submenu">
                                    <li><a href="accordian.html"><i class="fa fa-magic"></i>Arabic</a></li>
                                    <li><a href="tabs.html"><i class="fa fa-folder"></i>English</a></li>
                                    <li><a href="Sitemap.html"><i class="fa fa-sitemap"></i>Chinees</a></li>
                                </ul>
                            </li> <li><a>Search </a>
                                <ul class="lg-submenu">
                                    <li><a href="accordian.html"><i class="fa fa-magic"></i>your match</a></li>
                                    <li><a href="tabs.html"><i class="fa fa-folder"></i>near by</a></li>
                                    <li><a href="Sitemap.html"><i class="fa fa-sitemap"></i>celebrities</a></li>
                                </ul>
                            </li>

                           {{-- <li><a>Search Set one</a>
                                <ul class="lg-submenu">
                                    <li><a href="accordian.html"><i class="fa fa-magic"></i>Accordian</a></li>
                                    <li><a href="tabs.html"><i class="fa fa-folder"></i>Tabs</a></li>
                                    <li><a href="Sitemap.html"><i class="fa fa-sitemap"></i>Sitemap</a></li>
                                </ul>
                            </li>

                            <li><a>Search Set Two</a>
                                <ul class="lg-submenu">
                                    <li><a href="pagers.html"><i class="fa fa-sort-numeric-asc"></i>Pagers</a></li>
                                    <li><a href="panels.html"><i class="fa fa-certificate"></i>Panels</a></li>
                                    <li><a href="alerts.html"><i class="fa fa-compass"></i>Alerts</a></li>
                                </ul>
                            </li>
                            <li><a>Features Set Three</a>
                                <ul class="lg-submenu">
                                    <li><a href="pricing.html"><i class="fa fa-money"></i>Pricing</a></li>
                                    <li><a href="testimonials.html"><i class="fa fa-user"></i>Testimonials</a></li>
                                    <li><a href="thumbnails.html"><i class="fa fa-picture-o"></i>Thumbnails</a></li>
                                </ul>
                            </li>
                            <li><a>Features Set Four</a>
                                <ul class="lg-submenu">
                                    <li><a href="page-template.html"><i class="fa fa-file-o"></i>Page template</a></li>
                                    <li><a href="page-sidebar.html"><i class="fa fa-thumbs-o-up"></i>Page sidebar</a></li>
                                    <li><a href="popovers.html"><i class="fa fa-bookmark"></i>Popovers</a></li>
                                </ul>
                            </li>
                            <li><a>Features Set Five</a>
                                <ul class="lg-submenu">
                                    <li><a href="list-group.html"><i class="fa fa-list"></i>List Group</a></li>
                                    <li><a href="media-list.html"><i class="fa fa-list-alt"></i>Media List</a></li>
                                    <li><a href="index-blog.html"><i class="fa fa-laptop"></i>Parallax</a></li>
                                </ul>
                            </li>--}}
                        </ul>
                    </li>


                    <li class="parent megamenu"><a href="#">Packages</a>
                        <ul class="lg-submenu">
                            <li><a>Best Offers</a>
                                <ul class="lg-submenu">
                                    <li><a href="shop.html">premimum  <span class="badge badge-yellow">unique</span></a></li>
                                    <li><a href="shop2.html">3 months </a></li>
                                    <li><a href="product-detail.html">6 months </a></li>
                                    <li><a href="shop-sidebar.html">1 year</a></li>
                                    <li><a href="shop-login.html">unlimited<span class="badge badge-red">hot</span></a></li>
                                   {{-- <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                    <li><a href="password-recovery.html">Forgot Password</a></li>
                                    <li><a href="cart.html">Cart <span class="badge">11 items</span></a></li>
                                    <li><a href="checkout.html">Check out</a></li>
                            --}}    </ul>
                            </li>
                            <li><a>Best Sale Offers</a>
                                <ul class="lg-submenu">
                                    <li><a href="portfolio-2col.html"><figure><img src="assets/img/extra/offer.jpg" alt=""/></figure></a></li>
                                </ul>
                            </li>
                            <li><a>Weekly Exclusive offers</a>
                                <ul class="lg-submenu">
                                    <li><a href="portfolio-2col.html"><figure><img src="assets/img/extra/offer.jpg" alt=""/></figure></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="parent"><a href="#">
                            @if (Auth::guest())
                                <a href="{{url('/login')}}"><i class="fa fa-btn fa-sign-in"></i>Login</a>
                            @else
                                <a href="#">
                                    <i class="fa fa-btn fa-sign-out"></i>Inside</a>
                            @endif                        </a>


                        <ul class="lg-submenu">
                            @if (Auth::guest())

                                <li><a href="{{url('/login')}}"><i class="fa fa-btn fa-sign-in"></i>Login</a></li>
                            @else
                                <li>
                                    <?php $profileid=App\Profile::where('user_id',Auth::User()->id)->value('id')?>

                                
                                    <a href="{{ url('/premessage') }}">
                                        <i class="fa fa-btn fa fa-message"></i>messages</a></li> <li>
                                    <a href="{{ url('/profile/'.$profileid.'/edit/') }}">
                                    
                                        <i class="fa fa-btn fa fa-message"></i>Profile settings</a></li> <li>
                                    <a href="{{ url('/logout') }}">
                                        <i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            @endif
                            {{--
                                                        <li class="parent"><a href="#">Main Pages</a>
                                                            <ul class="lg-submenu">
                                                                <li><a href="blog.html">Blog Clasic</a></li>
                                                                <li><a href="index-blog.html">Blog Magzine <span class="badge badge-yellow">special</span></a></li>
                                                                <li><a href="blog-timeline.html">Blog Timeline</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="parent"><a href="#">Masonary</a>
                                                            <ul class="lg-submenu">
                                                                <li><a href="blog-masonary.html">Blog Masonary</a></li>
                                                                <li><a href="blog-masonary-full.html">Blog masonary Full</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="blog-detail.html">Blog Single</a></li>
                            --}}
                        </ul>


                    </li>

                </ul>
            </div><!-- /dl-menuwrapper -->
        </div>
    </nav>
</header>



@yield('content')
        <!--=================================
Footer
=================================-->
<footer>
    <section class="widgets-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <a href="#" class="logo-footer"><img src="assets/img/basic/logo-nav.png" alt=""/></a>
                    <p>Donec at malesuada arcu. Sed interdum tortor id odio elementum. Donec tempor tellus elementum</p>
                </div>
                <!--col-->

                <div class="col-md-3 col-xs-12">
                    <h3>latest tweets</h3>
                    <div id="tweet-slider" class="flexslider latest-tweet"><i class="fa fa-twitter"></i></div>
                </div>
                <!--col-->

                <div class="col-md-3 col-xs-12">
                    <h3>Flicker Feed</h3>
                    <ul id="flicker-feed"></ul>
                </div>
                <!--col-->

                <div class="col-md-3 col-xs-12">
                    <h3>contact</h3>
                    <ul class="contact-info">
                        <li><a href="#">
                                <i class="livicon" data-name="location" data-onparent="true" data-size="22"></i>
                                123 Street Down Town, Newyork
                            </a>
                        </li>
                        <li><a href="#">
                                <i class="livicon" data-name="phone" data-onparent="true" data-size="22"></i>
                                1.800.321.9876
                            </a>
                        </li>
                        <li><a href="#">
                                <i class="livicon" data-name="mail" data-onparent="true" data-size="22"></i>
                                hello@Match4Muslim.com
                            </a>
                        </li>
                    </ul>
                </div>
                <!--col-->
            </div>
            <!--row-->
        </div>
    </section>
    <div class="privacy-rights">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="rights"> ©2013 Match4Muslim. All rights reserved. A product by <a href="#">plutoInc.s</a>. </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <ul class="rights">
                        <li><a href="#">Disclaimer |</a></li>
                        <li><a href="#">Privacy Policy |</a></li>
                        <li><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--=================================
Script Source
=================================-->
<script src="{{url('assets/js/jquery-1.10.1.min.js')}}"></script>
<script src="{{url('assets/js/raphael-min.js')}}"></script>
<script src="{{url('assets/js/liveicon.js')}}"></script>
<script src="{{url('assets/js/jpreloader.min.js')}}"></script>
<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/js/jquery.waitforimages.js')}}"></script>
<script src="{{url('assets/js/jquery.carouFredSel-6.2.1-packed.js')}}"></script>
<script src="{{url('assets/js/jquery.flexslider-min.js')}}"></script>

{{--
<script src="https://maps.googleapis.com/maps/api/js"></script>
--}}
<script src="{{url('assets/js/jquery.prettyPhoto.js')}}"></script>

<script src="{{url('assets/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{url('assets/js/jflickrfeed.min.js')}}"></script>
<script src="{{url('assets/js/isotope.js')}}"></script>
<script src="{{url('assets/js/jquery.stellar.min.js')}}"></script>
<script src="{{url('assets/js/css3-animate-it.js')}}"></script>
<script src="{{url('assets/js/jquery.dlmenu.js')}}"></script>
<script src="{{url('assets/js/jquery.sticky.js')}}"></script>
<script src="{{url('assets/js/tweetie.min.js')}}"></script>
<script src="{{url('assets/js/masonry.pkgd.min.js')}}"></script>
<script src="{{url('assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{url('assets/js/main.js')}}"></script>


</body>
</html>
