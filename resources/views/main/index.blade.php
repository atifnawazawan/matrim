@extends('layouts.app')
@section('content')
        <!--=================================
Slider
=================================-->
<section class="custom-slider">
    <div id="home-slider" class="xv_slider flexslider">
        <ul class="slides">
            <li class="xv_slide" data-slideBg="url('assets/img/slider/1.jpg')" >
                <div class="flex-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <h1 class="fadeInDown animated">Match4Muslim</h1>
                                <h2 class="fadeInLeft animated slower">Clean pure metrimonial platform</h2>
                                <p class="fadeInRight animated slow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas justo sed sagittis interdum. </p>
                                <?php            $fo=App\Profile::all()->where('user_id',Auth::id());     ?>
                                @if (!$fo->implode('user_id', ', '))
                                    <a href="{{url('/profile/create')}}" class="btn btn-default bounceInUp animated slow">Create your Profile!</a> </div>

                            @else
                                <a href="{{url('profile')}}" class="btn btn-default bounceInUp animated slow">View profile!</a> </div>

                        @endif



                            <div class="col-xs-12 col-md-6 xv-slide-fig">
                                <div class="fadeInUp animated slower"><a href="http://vimeo.com/51740084" data-rel="prettyPhoto" class="trigger_fancy-video"><img src="assets/img/slider/laptop.png" alt=""/></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="xv_slide" data-slideBg="url('assets/img/slider/bg3.jpg')" >
                <div class="flex-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <h1 class="fadeInDown animated">Match4Muslim</h1>
                                <h2 class="fadeInLeft animated slower">Clean pure metrimonial platform</h2>
                                <p class="fadeInRight animated slow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas justo sed sagittis interdum. </p>
                                @if (Auth::guest())
{{--
                                    <a href="{{url('/login')}}"><i class="fa fa-btn fa-sign-in"></i>Login</a>
--}}
                                    <a href="{{url('login')}}" class="btn btn-default bounceInUp animated slow">Login Now!</a> </div>
                                 @endif

                        </div>
                    </div>
                </div>
            </li>
            <li class="xv_slide" data-slideBg="url('assets/img/slider/bg4.jpg')" >
                <div class="flex-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-6 xv-slide-fig">
                                <div class="fadeInUp animated slower"> <a href="http://vimeo.com/51740084" data-rel="prettyPhoto" class="trigger_fancy-video"><img src="assets/img/slider/laptop.png" alt=""/></a> </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <h1 class="bounceInDown animated slower">Fusion</h1>
                                <h2 class="fadeInRight animated slower">fusion of flat and corporate style</h2>
                                <p class="bounceInLeft animated slowest">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas justo sed sagittis interdum. </p>
                                <a href="#" class="btn btn-default bounceInUp animated slow">Purchase Now!</a> </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--=================================
Promo Box
=================================-->
<section id="promo-box">
    <div class="container animatedParent">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-xs-12">
                <div class="promo-line animated bounceInLeft slow">
                    <h2>Match4Muslim is a perfect platform</h2>
                    <h3>for Mariage Bureau, Mature and serious nodes</h3>
                </div>
                @if (Auth::guest())

                <a href="{{url('login')}}" class="btn animated bounceInRight slow">Login Now!</a> </div>
            @endif
        </div>
    </div>
</section>
<!--=================================
Testimonials
=================================-->
<section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-xs-12">
                <h2>satisfied customers</h2>
                <h3>we put customer satisfaction above everything else!</h3>
                <div id="testimonial-slider-style2" class="flexslider">
                    <ul class="slides">
                        <li> <i class="fa fa-quote-left"></i>
                            <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas justo sed sagittis interdum. Pellentesque sed ipsum eu risus sagittis varius. Suspendisse sed sapien dictum.</em></p>
                            <a class="test-web" href="#">JOhn Doe - <span>website.com</span></a> </li>
                        <li> <i class="fa fa-quote-left"></i>
                            <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas justo sed sagittis interdum. Pellentesque sed ipsum eu risus sagittis varius. Suspendisse sed sapien dictum.</em></p>
                            <a class="test-web" href="#">JOhn Doe - <span>website.com</span></a> </li>
                        <li> <i class="fa fa-quote-left"></i>
                            <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas justo sed sagittis interdum. Pellentesque sed ipsum eu risus sagittis varius. Suspendisse sed sapien dictum.</em></p>
                            <a class="test-web" href="#">JOhn Doe - <span>website.com</span></a> </li>
                    </ul>
                </div>
                <!--flex-->
            </div>
        </div>
    </div>
    <ul class="testimonial-slider-coltrols">
        <li class="active"><img src="assets/img/clients/test-01.jpg" alt="/"></li>
        <li><img src="assets/img/clients/test-01.jpg" alt="/"></li>
        <li><img src="assets/img/clients/test-01.jpg" alt="/"></li>
    </ul>
</section>

<!--=================================
Team
=================================-->
<section class="team">
    <div class="container">
        <h2>meet the team</h2>
        <h4>the awsome people working behind the scene </h4>
        <div class="row animatedParent" data-sequence="400">
            <div class="col-md-3 col-xs-12 animated flipInY" data-id="1">
                <div class="member"> <img src="assets/img/team/1.jpg" alt="/">
                    <div class="member-content">
                        <h5>john doe</h5>
                        <h6>Founder/CEO</h6>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class=" fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class=" fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class=" fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--member-->
            </div>
            <div class="col-md-3 col-xs-12 animated flipInY" data-id="2">
                <div class="member"> <img src="assets/img/team/2.jpg" alt="/">
                    <div class="member-content">
                        <h5>john doe</h5>
                        <h6>Founder/CEO</h6>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class=" fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class=" fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class=" fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--member-->
            </div>
            <div class="col-md-3 col-xs-12 animated flipInY" data-id="3">
                <div class="member"> <img src="assets/img/team/3.jpg" alt="/">
                    <div class="member-content">
                        <h5>john doe</h5>
                        <h6>Founder/CEO</h6>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class=" fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class=" fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class=" fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--member-->
            </div>
            <div class="col-md-3 col-xs-12 animated flipInY" data-id="4">
                <div class="member"> <img src="assets/img/team/4.jpg" alt="/">
                    <div class="member-content">
                        <h5>john doe</h5>
                        <h6>Founder/CEO</h6>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class=" fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class=" fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class=" fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--member-->
            </div>
        </div>
    </div>
</section>
<script>
    $('body').jpreLoader({
        splashID: "#jSplash",
        loaderVPos: '0%',
        autoClose: true,
    });
    /*=========Place Google Tracker Code here===========*/
</script>

@endsection