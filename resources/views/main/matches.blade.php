@extends('layouts.app')
@section('content')

<div class="grid_3"  ng-controller="SimpleController">
    <div class="container">
        <div class="breadcrumb1">
            <ul>
                <a href="index.html"><i class="fa fa-home home_1"></i></a>
                <span class="divider">&nbsp;|&nbsp;</span>
                <li class="current-page">New Matches</li>
            </ul>
        </div>
        <div class="col-md-9 profile_left2">
            <form>
                <div class="form_but2">
                    <label class="col-md-2 control-lable1" for="sex">Don't Show : </label>
                    <div class="col-md-10 form_radios">
                        <input type="checkbox" class="radio_1"> Don't show already viewed &nbsp;&nbsp;&nbsp;
                        <input type="checkbox" class="radio_1" checked="checked"> Don't show already contacted &nbsp;&nbsp;&nbsp;
                        <input type="checkbox" class="radio_1" checked="checked"> Show profiles with photo
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </form>
            <div class="profile_top" ng-repeat="x in profiles">
                <a href="profile/@{{ x.id }}">
                    <h2>@{{x.id }} | @{{ x.headline }}</h2>
                    <div class="col-sm-3 profile_left-top">
                        <img src="uploads/@{{ x.photo }}" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-sm-3">
                        <ul class="login_details1">
                            <li>Last Login : 5 days ago</li>
                            <li><p>@{{ x.aboutme }}</p></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <table class="table_working_hours">
                            <tbody>
                            <tr class="opened_1">
                                <td class="day_label1">Income / Height :</td>
                                <td class="day_value">@{{ x.income }}, 5ft 5in / 163cm</td>
                            </tr>
                            <tr class="opened">
                                <td class="day_label1">Last Login :</td>
                                <td class="day_value">4 hours ago</td>
                            </tr>
                            <tr class="opened">
                                <td class="day_label1">Religion :</td>
                                <td class="day_value">Muslim</td>
                            </tr>
                            <tr class="opened">
                                <td class="day_label1">Marital Status :</td>
                                <td class="day_value">@{{ x.marital_status }}</td>
                            </tr>
                            <tr class="opened">
                                <td class="day_label1">Location :</td>
                                <td class="day_value">@{{ x.citizenship }}</td>
                            </tr>
                            <tr class="closed">
                                <td class="day_label1">Profile Created by :</td>
                                <td class="day_value closed"><span>Self</span></td>
                            </tr>
                            <tr class="closed">
                                <td class="day_label1">Education :</td>
                                <td class="day_value closed"><span>@{{ x.education_level }}</span></td>
                            </tr>
                            </tbody>
                        </table></a>
                        <div class="buttons">
                            <a href="{{url('message')}}/@{{ x.user_id }}">  <div class="vertical" >Send Mail</div>
                            </a><div class="vertical">Shortlisted</div>
                            <div class="vertical">Send Interest</div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            <!--div class="profile_top"><a href="view_profile.html">
                    <h2>254879 | Profile Created for self</h2>
                    <div class="col-sm-3 profile_left-top">
                        <img src="images/a7.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-3">
                        <ul class="login_details1">
                            <li>Last Login : 5 days ago</li>
                            <li><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor." More....</p></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <table class="table_working_hours">
                            <tbody>
                            <tr class="opened_1">
                                <td class="day_label1">Age / Height :</td>
                                <td class="day_value">28, 5ft 5in / 163cm</td>
                            </tr>
                            <tr class="opened">
                                <td class="day_label1">Last Login :</td>
                                <td class="day_value">4 hours ago</td>
                            </tr>
                            <tr class="opened">
                                <td class="day_label1">Religion :</td>
                                <td class="day_value">Sikh</td>
                            </tr>
                            <tr class="opened">
                                <td class="day_label1">Marital Status :</td>
                                <td class="day_value">Single</td>
                            </tr>
                            <tr class="opened">
                                <td class="day_label1">Location :</td>
                                <td class="day_value">India</td>
                            </tr>
                            <tr class="closed">
                                <td class="day_label1">Profile Created by :</td>
                                <td class="day_value closed"><span>Self</span></td>
                            </tr>
                            <tr class="closed">
                                <td class="day_label1">Education :</td>
                                <td class="day_value closed"><span>Engineering</span></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="buttons">
                            <div class="vertical">Send Mail</div>
                            <div class="vertical">Shortlisted</div>
                            <div class="vertical">Send Interest</div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </a></div>
            <!--div class="profile_top"><a href="view_profile.html">
                    <h2>254879 | Profile Created for self</h2>
                    <div class="col-sm-3 profile_left-top">
                        <img src="images/a5.jpg" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-sm-3">
                        <ul class="login_details1">
                            <li>Last Login : 5 days ago</li>
                            <li><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor." More....</p></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <table class="table_working_hours">
                            <tbody>
                            <tr class="opened_1">
                                <td class="day_label1">Age / Height :</td>
                                <td class="day_value">28, 5ft 5in / 163cm</td>
                            </tr>
                            <tr class="opened">
                                <td class="day_label1">Last Login :</td>
                                <td class="day_value">4 hours ago</td>
                            </tr>
                            <tr class="opened">
                                <td class="day_label1">Religion :</td>
                                <td class="day_value">Sikh</td>
                            </tr>
                            <tr class="opened">
                                <td class="day_label1">Marital Status :</td>
                                <td class="day_value">Single</td>
                            </tr>
                            <tr class="opened">
                                <td class="day_label1">Location :</td>
                                <td class="day_value">India</td>
                            </tr>
                            <tr class="closed">
                                <td class="day_label1">Profile Created by :</td>
                                <td class="day_value closed"><span>Self</span></td>
                            </tr>
                            <tr class="closed">
                                <td class="day_label1">Education :</td>
                                <td class="day_value closed"><span>Engineering</span></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="buttons">
                            <div class="vertical">Send Mail</div>
                            <div class="vertical">Shortlisted</div>
                            <div class="vertical">Send Interest</div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </a></div>
            <div-- class="profile_top profile_top1"><a href="view_profile.html">
                    <h2>254879 | Profile Created for self</h2>
                    <div class="col-sm-3 profile_left-top">
                        <img src="images/a8.jpg" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-sm-3">
                        <ul class="login_details1">
                            <li>Last Login : 5 days ago</li>
                            <li><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor." More....</p></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <table class="table_working_hours">
                            <tbody>
                            <tr class="opened_1">
                                <td class="day_label1">Age / Height :</td>
                                <td class="day_value">28, 5ft 5in / 163cm</td>
                            </tr>
                            <tr class="opened">
                                <td class="day_label1">Last Login :</td>
                                <td class="day_value">4 hours ago</td>
                            </tr>
                            <tr class="opened">
                                <td class="day_label1">Religion :</td>
                                <td class="day_value">Sikh</td>
                            </tr>
                            <tr class="opened">
                                <td class="day_label1">Marital Status :</td>
                                <td class="day_value">Single</td>
                            </tr>
                            <tr class="opened">
                                <td class="day_label1">Location :</td>
                                <td class="day_value">India</td>
                            </tr>
                            <tr class="closed">
                                <td class="day_label1">Profile Created by :</td>
                                <td class="day_value closed"><span>Self</span></td>
                            </tr>
                            <tr class="closed">
                                <td class="day_label1">Education :</td>
                                <td class="day_value closed"><span>Engineering</span></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="buttons">
                            <div class="vertical">Send Mail</div>
                            <div class="vertical">Shortlisted</div>
                            <div class="vertical">Send Interest</div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </a></div-->
            <ul class="pagination">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
            </ul>
        </div>
        <div class="col-md-3 match_right">
         @include('partials.profiletypes')
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
@endsection