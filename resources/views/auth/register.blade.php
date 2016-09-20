@extends('layouts.app')

@section('content')




{{--
<div class="grid_3">
    <div class="container">
        <div class="breadcrumb1">
            <ul>
                <a href="index.html"><i class="fa fa-home home_1"></i></a>
                <span class="divider">&nbsp;|&nbsp;</span>
                <li class="current-page">Register</li>
            </ul>
        </div>
        <div class="services">
            <div-- class="col-sm-6 login_left">
                <form method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="edit-name">Username <span class="form-required" title="This field is required.">*</span></label>
                        <input type="text" id="edit-name" name="name" value="" size="60" maxlength="60" class="form-text required">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>


                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
                        <input type="password" id="password" name="password" size="60" maxlength="128" class="form-text required">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>


                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="edit-pass">Confirm Password <span class="form-required" title="This field is required.">*</span></label>
                        <input type="password" id="password_confirmation" name="password_confirmation" size="60" maxlength="128" class="form-text required">
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                        @endif
                    </div>


                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                        <label for="email">Email <span class="form-required" title="This field is required.">*</span></label>
                        <input type="text" id="email" name="email" value="" size="60" maxlength="60" class="form-text required">

                    </div>
                    <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                        @if ($errors->has('age'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                        @endif
                        <label for="age">Age <span class="form-required" title="This field is required.">*</span></label>
                        <input type="date" id="age" name="age" >

                    </div>
                    <!--div class="age_select form-control--}}
{{-- $errors->has('age') ? ' has-error' : '' --}}{{--
">


                        <label for="edit-pass">Age <span class="form-required" title="This field is required.">*</span></label>
                        <input type="date" name="age">

                        <!--div-- class="age_grid">
                            <div class="col-sm-4 form_box">
                                <div class="select-block1">
                                    <select>
                                        <option value="">Date</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                        <option value="">5</option>
                                        <option value="">6</option>
                                        <option value="">7</option>
                                        <option value="">8</option>
                                        <option value="">9</option>
                                        <option value="">10</option>
                                        <option value="">11</option>
                                        <option value="">12</option>
                                        <option value="">13</option>
                                        <option value="">14</option>
                                        <option value="">15</option>
                                        <option value="">16</option>
                                        <option value="">17</option>
                                        <option value="">18</option>
                                        <option value="">19</option>
                                        <option value="">20</option>
                                        <option value="">21</option>
                                        <option value="">22</option>
                                        <option value="">23</option>
                                        <option value="">24</option>
                                        <option value="">25</option>
                                        <option value="">26</option>
                                        <option value="">27</option>
                                        <option value="">28</option>
                                        <option value="">29</option>
                                        <option value="">30</option>
                                        <option value="">31</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 form_box2">
                                <div class="select-block1">
                                    <select>
                                        <option value="">Month</option>
                                        <option value="">January</option>
                                        <option value="">February</option>
                                        <option value="">March</option>
                                        <option value="">April</option>
                                        <option value="">May</option>
                                        <option value="">June</option>
                                        <option value="">July</option>
                                        <option value="">August</option>
                                        <option value="">September</option>
                                        <option value="">October</option>
                                        <option value="">November</option>
                                        <option value="">December</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 form_box1">
                                <div class="select-block1">
                                    <select>
                                        <option value="">Year</option>
                                        <option value="">1980</option>
                                        <option value="">1981</option>
                                        <option value="">1982</option>
                                        <option value="">1983</option>
                                        <option value="">1984</option>
                                        <option value="">1985</option>
                                        <option value="">1986</option>
                                        <option value="">1987</option>
                                        <option value="">1988</option>
                                        <option value="">1989</option>
                                        <option value="">1990</option>
                                        <option value="">1991</option>
                                        <option value="">1992</option>
                                        <option value="">1993</option>
                                        <option value="">1994</option>
                                        <option value="">1995</option>
                                        <option value="">1996</option>
                                        <option value="">1997</option>
                                        <option value="">1998</option>
                                        <option value="">1999</option>
                                        <option value="">2000</option>
                                        <option value="">2001</option>
                                        <option value="">2002</option>
                                        <option value="">2003</option>
                                        <option value="">2004</option>
                                        <option value="">2005</option>
                                        <option value="">2006</option>
                                        <option value="">2007</option>
                                        <option value="">2008</option>
                                        <option value="">2009</option>
                                        <option value="">2010</option>
                                        <option value="">2011</option>
                                        <option value="">2012</option>
                                        <option value="">2013</option>
                                        <option value="">2014</option>
                                        <option value="">2015</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div->
                    </div-->
                    <div class="form-group form-group1">
                        <label class="col-sm-7 control-lable" for="sex">Sex : </label>
                        <div class="col-sm-5">
                            <div class="radios">
                                <label for="radio-01" class="label_radio">
                                    <input type="radio" value="male" name="gender" checked=""> Male
                                </label>
                                <label for="radio-02" class="label_radio">
                                    <input type="radio" value="female" name="gender"> Female
                                </label>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                        <label for="edit-name">Country <span class="form-required" title="This field is required.">*</span></label>
                        <input type="text" id="edit-name" name="country" value="" size="60" maxlength="60" class="form-text required">
                        @if ($errors->has('country'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-actions">
                        <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">
                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                <ul class="sharing">
                    <li><a href="#" class="facebook" title="Facebook"><i class="fa fa-boxed fa-fw fa-facebook"></i> Share on Facebook</a></li>
                    <li><a href="#" class="twitter" title="Twitter"><i class="fa fa-boxed fa-fw fa-twitter"></i> Tweet</a></li>
                    <li><a href="#" class="google" title="Google"><i class="fa fa-boxed fa-fw fa-google-plus"></i> Share on Google+</a></li>
                    <li><a href="#" class="linkedin" title="Linkedin"><i class="fa fa-boxed fa-fw fa-linkedin"></i> Share on LinkedIn</a></li>
                    <li><a href="#" class="mail" title="Email"><i class="fa fa-boxed fa-fw fa-envelope-o"></i> E-mail</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

</div>
--}}
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
                            <h3>Create account</h3>
                            <form method="POST" action="{{ url('/register') }}">
                                {{ csrf_field() }}
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <label class="required">Username</label>
                                <input type="text"  name="name" required placeholder="enter username">
                                <label class="required">Email</label>
                                <input type="text" ng-model="email" name="email" required placeholder="enter your email">
                                <label class="required">Password</label>
                                <input type="password" name="password"  required placeholder="password">
                                <label class="required">Confirm Password</label>
                                <input type="password" name="password_confirmation" required placeholder="confirm password">
                                <input type="checkbox"><label>keep loged-in for two weak!</label><br>
                                <input class="btn btn-default" type="submit" value="Create Account">
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

