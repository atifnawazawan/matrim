@extends('layouts.app')
@section('content')
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
                <script type="text/ng-template" id="myModalContent.html">
                    <div class="modal-header">
                        <h3 class="modal-title">Warning:</h3>
                    </div>
                    <div class="modal-body" >

                        <b>@{{ selected }}</b>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" ng-click="ok()">OK</button>
                        <!--button class="btn btn-warning" type="button" ng-click="cancel()">Cancel</button-->
                    </div>
                </script>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h3>Don't have an account?</h3>
                        <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                        <a class="btn btn-info" href="{{url('register')}}">Create Account</a>
                    </div>
                    <div class=" col-xs-12 col-sm-6">
                        <div class="jumbotron">
                            <h3>Login to your account</h3>
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}

                                <label class="required">Email</label>
                                <input type="email" id="email"  name="email" required placeholder="enter your email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <label class="required">Password</label>
                                <input type="password" name="password"  id="password" required placeholder="password">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
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
@endsection