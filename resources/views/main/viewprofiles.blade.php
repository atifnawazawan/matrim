@extends('layouts.appnofoot')
        @section('content')
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
<section class="team" ng-controller="viewProfileController">
    <script type="text/ng-template" id="myModalContent.html">
        <div class="modal-header" style="margin-top: 115px">
            <h3 class="modal-title">Warning:</h3>
        </div>
        <div class="modal-body" >

            <b>@{{ selected }}</b>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="button" ng-click="oks()">OK</button>
            <!--button class="btn btn-warning" type="button" ng-click="cancel()">Cancel</button-->
        </div>
    </script>
    <div class="container">
        <h2>meet the members</h2>
        <h4>the awsome people waiting for you </h4>
        <div ng-repeat="x in profiles" class="animatedParent" data-sequence="400">

            <div class="col-md-3 col-xs-12 animated flipInY" data-id="1">
                <div class="member">
                    <a href="profile/@{{ x.id }}">
                    <img style="width: 400px;height: 200px;" src="{{url('uploads\/')}}@{{ x.photo }}" alt="/">
                    <div class="member-content">
                        <h5>@{{ x.first_name }}</h5>
                        <h6>@{{ x.profession }}</h6>
            </a>
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

@endsection