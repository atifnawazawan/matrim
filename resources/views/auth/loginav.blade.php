<!DOCTYPE html>
<!--[if lte IE 9]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Match4Muslim - Signup/Login</title>

    <!--=================================
    Meta tags
    =================================-->

    <meta name="description" content="">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />

    <!--=================================
    Style Sheets
    =================================-->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/pixeden-fonts.css">
    <link rel="stylesheet" type="text/css" href="assets/css/flexslider.css">
    <link rel="stylesheet" type="text/css" href="assets/css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animations.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dl-menu.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <script src="assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="assets/js/angular.min.js"></script>
    <script src="assets/js/angular-cookies.min.js"></script>
    <script src="assets/js/metri.js"></script>

</head>
<body ng-app="mainApp">

<!--======================
Preloading Splash Screen
=======================-->
<div id="jSplash">
    Match4Muslim, &copy;All Rights Reserved <a href="#">plutoInc.s</a>
</div>

<!--========================================
Body Content
===========================================-->

<div class="quick-access">
    <div class=" container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <ul class="top-level-nav">
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Buyer Protection</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-6">
                <ul class="top-level-nav text-right">
                    <li>
                        <div class="custome-select">
                            <span>English <b class="xv-angle-down"></b></span>
                            <select>
                                <option>English</option>
                                <option>Chinese</option>
                                <option>French</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <div class="custome-select">
                            <span>USD ($) <b class="xv-angle-down"></b></span>
                            <select>
                                <option>GBP (£)</option>
                                <option>EUR (€)</option>
                                <option>RS (PKR)</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <div class="cart-look">
                            <a href="#">
                                <span  class="livicon" data-name="shopping-cart" data-onparent="true" data-size="20"></span>
                            </a>
                            <div class="widget-cart-items">
                                <ul>
                                    <li class="shop-product">
                                        <figure>
                                            <img src="assets/img/shop/4.jpg" alt=""/>
                                        </figure>
                                        <div class="product-info">
                                            <a href="#">FASHION NICE JACKET</a>
                                            <div class="price-tag">$40</div>
                                        </div>
                                    </li>

                                    <li class="shop-product">
                                        <figure>
                                            <img src="assets/img/shop/4.jpg" alt=""/>
                                        </figure>
                                        <div class="product-info">
                                            <a href="#">FASHION NICE JACKET</a>
                                            <div class="price-tag">$40</div>
                                        </div>
                                    </li>
                                    <li class="btn-list">
                                        <a class="btn btn-info" href="#">View Cart</a>
                                        <a class="btn btn-success" href="#">Check out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--=================================
header
=================================-->
<header>
    <nav id="sticktop" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html"><img src="assets/img/basic/logo-nav.png" alt="/"></a>
            </div>

            <div id="dl-menu" class="xv-menuwrapper responsive-menu">
                <button class="dl-trigger">Open Menu</button>
                <div class="clearfix"></div>
                <ul class="dl-menu">
                    <li class="parent"><a>Home</a>
                        <ul class="lg-submenu">
                            <li><a href="index.html">Home <span class="badge badge-yellow">unique</span></a></li>
                            <li><a href="index2.html">Home Two</a></li>
                            <li><a href="index3.html">Home Three</a></li>
                            <li><a href="index4.html">Home Four <span class="badge badge-green">events</span></a></li>
                            <li><a href="index5.html">Home Five <span class="badge">mailchimp</span></a></li>
                        </ul>
                    </li>
                    <li class="parent"><a href="#">Pages</a>
                        <ul class="lg-submenu">
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
                    </li>

                    <li class="parent megamenu"><a href="#">Features</a>
                        <ul class="lg-submenu">

                            <li><a>Features Set one</a>
                                <ul class="lg-submenu">
                                    <li><a href="accordian.html"><i class="fa fa-magic"></i>Accordian</a></li>
                                    <li><a href="tabs.html"><i class="fa fa-folder"></i>Tabs</a></li>
                                    <li><a href="Sitemap.html"><i class="fa fa-sitemap"></i>Sitemap</a></li>
                                </ul>
                            </li>

                            <li><a>Features Set Two</a>
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
                            </li>
                        </ul>
                    </li>


                    <li class="parent megamenu active"><a href="#">Shop</a>
                        <ul class="lg-submenu">
                            <li><a>Shop Pages</a>
                                <ul class="lg-submenu">
                                    <li><a href="shop.html">Shop <span class="badge badge-yellow">unique</span></a></li>
                                    <li><a href="shop2.html">Shop Simple</a></li>
                                    <li><a href="product-detail.html">Product Detail <span class="badge badge-red">hot</span></a></li>
                                    <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                    <li><a href="shop-login.html">login/signup</a></li>
                                    <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                    <li><a href="password-recovery.html">Forgot Password</a></li>
                                    <li><a href="cart.html">Cart <span class="badge">11 items</span></a></li>
                                    <li><a href="checkout.html">Check out</a></li>
                                </ul>
                            </li>
                            <li><a>Best Sale Offers</a>
                                <ul class="lg-submenu">
                                    <li><a href="portfolio-2col.html"><figure><img src="assets/img/extra/offer.jpg" alt=""/></figure></a></li>
                                </ul>
                            </li>
                            <li><a>Weekly Exclusive offers</a>
                                <ul class="lg-submenu">
                                    <li><a href="portfolio-2col.html"><figure><img src="assets/img/extra/offer2.png" alt=""/></figure></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="parent"><a href="#">Blog</a>
                        <ul class="lg-submenu">
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
                        </ul>
                    </li>

                </ul>
            </div><!-- /dl-menuwrapper -->
        </div>
    </nav>
</header>

<!--=================================
Page Head
=================================-->
<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>Signup/Login</h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Signup/Login</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--=================================
Page Content
=================================-->

<section class="page-template">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9" ng-controller="LoginController">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h3>Don't have an account?</h3>
                        <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                        <a class="btn btn-info" href="#">Create Account</a>
                    </div>
                    <div class=" col-xs-12 col-sm-6">
                        <div class="jumbotron">
                            <h3>Login to your account @{{ a }}</h3>
                            <form ng-submit="loginform()">
                           {{-- <form action="{{url('allprofile')}}" method="post">--}}
                                {{csrf_field()}}

                                {{--
                                                                <input type="text" name="_token" value="FqprXBqmruRT9l3RNnqtAfba1a8qZ5LRWJJ5ZNkM">
                                --}}
                                <label class="required">Username/Email</label>
                                <input type="text" ng-model="email" name="email" placeholder="enter your email">
                                <label class="required">Password</label>
                                <input type="number" name="id" ng-model="id" required placeholder="password">
                                <input type="checkbox"><label>keep loged-in for two weak!</label><br>
                                <input class="btn btn-default" type="submit" value="Login">
                                <button class="btn btn-default" type="button"><i class="fa fa-facebook"></i></button>
                                <button class="btn btn-default" type="button"><i class="fa fa-twitter"></i></button><br>
                                <small>You can use facebook/ twitter accounts to login</small>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--column-products-->

            <div class="col-xs-12 col-md-3">
                <div class="sidebar">
                    <div class="widget search-widget">
                        <form>
                            <input type="text" placeholder="Search Blog"/>
                            <button type="submit" class=""><span class="fa fa-search"></span></button>
                        </form>
                    </div>
                    <div class="widget widget-best-sellers">
                        <div class="border-blue"></div>
                        <h3>Best Sellers</h3>
                        <ul>
                            <li class="shop-product">
                                <figure>
                                    <img src="assets/img/shop/4.jpg" alt=""/>
                                </figure>
                                <div class="product-info">
                                    <a href="#">FASHION NICE JACKET</a>
                                    <div class="price-tag">$40</div>
                                </div>
                            </li>
                            <li class="shop-product">
                                <figure>
                                    <img src="assets/img/shop/2.jpg" alt=""/>
                                </figure>
                                <div class="product-info">
                                    <a href="#">FASHION NICE JACKET</a>
                                    <div class="price-tag">$40</div>
                                </div>
                            </li>
                            <li class="shop-product">
                                <figure>
                                    <img src="assets/img/shop/8.jpg" alt=""/>
                                </figure>
                                <div class="product-info">
                                    <a href="#">FASHION NICE JACKET</a>
                                    <div class="price-tag">$40</div>
                                </div>
                            </li>
                        </ul>
                    </div><!--widget-best-seller-->

                    <div class="widget widget-tags">
                        <div class="border-blue"></div>
                        <h3>Popular Tags</h3>
                        <ul>
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Jewelry</a></li>
                            <li><a href="#">Art Direction</a></li>
                            <li><a href="#">User Interface</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
        </div><!--column-sidebar-->
    </div> <!--main row-->

</section>
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
<script src="assets/js/jquery-1.10.1.min.js"></script>
<script src="assets/js/raphael-min.js"></script>
<script src="assets/js/liveicon.js"></script>
<script src="assets/js/jpreloader.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.waitforimages.js"></script>
<script src="assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="assets/js/jquery.flexslider-min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="assets/js/jquery.prettyPhoto.js"></script>
<script src="assets/js/jflickrfeed.min.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/jquery.stellar.min.js"></script>
<script src="assets/js/css3-animate-it.js"></script>
<script src="assets/js/jquery.dlmenu.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/tweetie.min.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
    $('body').jpreLoader({
        splashID: "#jSplash",
        loaderVPos: '0%',
        autoClose: true,
    });
    /*=========Place Google Tracker Code here===========*/
</script>

</body>
</html>
