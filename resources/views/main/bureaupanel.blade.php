@extends('layouts.app')
@section('content')

        <!--=================================
Page Content
=================================-->
<section class="page-template" ng-controller="panelController">

    <div class="container portfolio animatedParent" >
<?php if(isset($loc)=='cli'){;?>
        <div ng-init="loc(2)">
            <?php }?>

        <div class="row">
            <div class="col-xs-12">
                <h2>Bureau Panel</h2>

                <div class="tabs-vertical" >

                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <ul class="nav nav-tabs" id="ornatTabs">
                            <li class="active"><a href="#tab1">
                                    <span class="livicon" data-name="tablet" data-onparent="true" data-size="30"></span>
                                    Mobile Marketing</a>
                            </li>
                            <li><a href="#tab2">
                                    <span class="livicon" data-name="barchart" data-onparent="true" data-size="30"></span>
                                    Upload client</a>
                            </li>
                            <li><a href="#tab3">
                                    <span class="livicon" data-name="presentation" data-onparent="true" data-size="30"></span>
                                    Personal Setting</a>
                            </li>
                            <li><a href="#tab4">
                                    <span class="livicon" data-name="help" data-onparent="true" data-size="30"></span>
                                    View Clients</a>
                            </li>
                            <li><a href="#tab5">
                                    <span class="livicon" data-name="responsive" data-onparent="true" data-size="30"></span>
                                    Responsive Design</a>
                            </li>
                            <li><a href="#tab6">
                                    <span class="livicon" data-name="calendar" data-onparent="true" data-size="30"></span>
                                    Last client viewed</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-8">
                        <div class="tab-content">
                            <div class="tab-pane fade @{{ tab1 }}" id="tab1">
                                <h2>Mobile Marketing</h2>
                                <h4>Lorem ipsum dolor sit amet sectetuer adipiscing elit.</h4>

                                <p>A few brief words about your project or post. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                                <a class=" btn btn-info">Documentations</a>
                                <a href="#" class=" btn btn-danger">Purchase Now</a>
                            </div>

                            <div class="tab-pane fade  @{{ tab2 }}" id="tab2">
                                <form method="POST" enctype="multipart/form-data" action="{{ url('/bclient') }}" >
                                    {{ csrf_field() }}

                                    <div class=" col-xs-12 col-sm-12">
                                        <div class="jumbotron">
                                            <h3>Client Details</h3>


                                            <style>
                                                .thumb {
                                                    width: 133px;
                                                    height: 133px;
                                                    float: none;
                                                    position: relative;
                                                    top: 7px;
                                                }
                                            </style>
                                            <div class="grabr-input grabr-input-images">


                                                <img ng-show="main/orderform.userfile.$valid" ngf-thumbnail="picFile" class="thumb" >
                                                <!--button ng-click="picFile = null" ng-show="picFile">Remove</button-->

                                            </div>

                                            <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                                                <label for="photo">Photo <span class="form-required" title="This field is required.">*</span></label>
                                                {{--    //{{Form::file('photo',null ,['class' => 'form-text'])}}--}}
                                                <input type="file" name="photo"  ngf-select ng-model="picFile"
                                                       accept="image/*" ngf-max-size="2MB"
                                                       ngf-model-invalid="errorFile">

                                                @if ($errors->has('photo'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                                @endif
                                            </div>

                                            <label class="required">Client Name</label>
                                            <br>
                                            @if ($errors->has('client_name'))
                                                <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('client_name') }}</strong>
                                    </span>
                                            @endif
                                            <input type="text" name="client_name" value="{{old('client_name')}}" id="profile-name" placeholder="enter bureau name">

                                            <label class="required">Education</label>
                                            @if ($errors->has('education'))
                                                <br>
                                                <span style="color:red">

                                        <strong>{{ $errors->first('education') }}</strong>
                                    </span>
                                            @endif
                                            <input type="text"  name="education"  id="profile-address" value="{{old('education')}}" placeholder="enter your address">
                                            <label class="required">Profession</label>
                                            @if ($errors->has('profession'))
                                                <br>
                                                <span style="color:red">

                                        <strong>{{ $errors->first('profession') }}</strong>
                                    </span>
                                            @endif
                                            <input type="text"  name="profession"  id="profile-address" value="{{old('profession')}}" placeholder="enter your address">
                                            <label class="required">Phone</label>
                                            @if ($errors->has('phone'))
                                                <br>
                                                <span style="color:red">

                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                            @endif
                                            <input type="text"  name="phone"  value="{{old('phone')}}" placeholder="enter your phone">


                                            <label class="required"> gender</label>
                                            @if ($errors->has('gender'))
                                                <br>
                                                <span style="color:red">

                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                            @endif
                                            <br>

                                            <input type="radio" name="gender" checked value="female"> Female<br>
                                            <input type="radio" name="gender"  value="male"> Male<br>
                                            <br>

                                            <label class="required"> age</label>
                                            @if ($errors->has('age'))
                                                <br>
                                                <span style="color:red">

                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                            @endif
                                            <input type="date" name="age"  max="2000-12-31" value="{{old('age')}}" placeholder="your age">
                                            <br>
                                            <label class="required">Description</label>

                                            @if ($errors->has('description'))
                                                <br>
                                                <span style="color:red">
<strong>            {{ $errors->first('description') }}</strong>
                                    </span>
                                            @endif

                                            <textarea name="description" value="{{old('description')}}"  placeholder="about your bureau"></textarea>

                                            <br>


                                            <label class="required">req_description</label>
                                            @if ($errors->has('req_description'))
                                                <br>
                                                <span style="color:red">

                                        <strong>{{ $errors->first('req_description') }}</strong>
                                    </span>
                                            @endif
                                            <textarea type="text"  name="req_description"  value="{{old('req_description')}}" placeholder="enter the expected's description"></textarea>
                                            <label class="required">req_education</label>
                                            @if ($errors->has('req_education'))
                                                <br>
                                                <span style="color:red">

                                        <strong>{{ $errors->first('req_education') }}</strong>
                                    </span>
                                            @endif
                                            <br>
                                            <input type="text" name="req_education"  value="{{old('req_education')}}" placeholder="enter the expected profession">

                                            <label class="required">req_profession</label>
                                            @if ($errors->has('req_profession'))
                                                <br>
                                                <span style="color:red">

                                        <strong>{{ $errors->first('req_profession') }}</strong>
                                    </span>
                                            @endif
                                            <input type="text"  name="req_profession"  value="{{old('req_profession')}}" placeholder="enter the expected education">
                                            <label class="required">Expected age </label>
                                            @if ($errors->has('req_age'))
                                                <br>
                                                <span style="color:red">

                                        <strong>{{ $errors->first('req_age') }}</strong>
                                    </span>
                                            @endif
                                            <br>
                                            <select name="req_age" value="any">
                                                <option value="zero">any</option>
                                                <option value="one">upto 25</option>
                                                <option value="two">26-30</option>
                                                <option value="three">31-40</option>
                                                <option value="four">40+</option>


                                            </select>
<br>
                                            <input class="btn btn-default"  type="submit" value="Submit">       <br>
                                        </div>
                                    </div>

                                </form>
                            </div>

                            <div class="tab-pane fade" id="tab3">
                                <div class=" col-xs-12 col-sm-12">
                                    <div class="jumbotron">
                                <img src="{{url('uploads/'.Auth::user()->bureauprofiles['photo'])}}" class="thumb" style="float: right;">

                              {{--  <h2>Campaign Analysis</h2>
                                <h4>Lorem ipsum dolor sit amet sectetuer adipiscing elit.</h4>
                                <p>A few brief words about your project or post. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                                <a href="#" class=" btn btn-info">Documentations</a>
                                <a href="#" class=" btn btn-danger">Purchase Now</a>

--}}
                                <?php //$profile=App\Profile::find(12);
                                $profile=Auth::user()->bureauprofiles;
                                ?>

                                <?php                    echo Form::model($profile, array(
                                        'method'=>'PUT',
                                        'files'=>true,
                                        'action' => array('BureauprofileController@update', $profile->id)));
                                ?>   {{ csrf_field() }}
                                        <br><br>
                                @include('partials.bureauprofileform')
                                <div class="form-actions">
                                    <input type="submit" id="edit-submit" name="op" value="Update" class="btn_1 submit">
                                </div>
                                {{Form::close()}}
                            </div>
</div></div>



                            <div class="tab-pane fade" id="tab4" >
                                <h2>All your Clients</h2>


                                        <div  class="animated bounceInUp">
                                   <?php  if(isset($clients)){ ?>
                                            @foreach($clients as $val)

                                            <div class="project">
                                                <figure><img src="{{url('uploads/'.$val['photo'])}}" alt="/"> </figure>
                                                <div class="hover">
                                                    <div class="hover-content">
                                                        <a href="{{url('bureauprofile/'.$val['id'])}}"><span class="livicon" data-name="eye-open" data-onparent="true" data-size="30"></span></a>
                                                        <a href="#"><span class="livicon" data-name="share" data-onparent="true" data-size="30"></span></a>
                                                    </div>
                                                </div>

                                            </div>
                                            @endforeach
                                             <?php }?>
                                            <!--project-->


                                           <!--project-->

                                        </div>
                                        <!--proj wrapper-->

                            </div>

                            <div class="tab-pane fade" id="tab5">
                                <h2>Upcoming Events</h2>
                                <h4>Lorem ipsum dolor sit amet sectetuer adipiscing elit.</h4>
                                <p>A few brief words about your project or post. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                                <a href="#" class=" btn btn-info">Documentations</a>
                                <a href="#" class=" btn btn-danger">Purchase Now</a>
                            </div>

                            <div class="tab-pane @{{ tab6 }}" id="tab6">

<?php if(isset($client)){ ?>
                                <div class="row profil-detail">

                                    @foreach($client as $item)
                                    @endforeach
                                    <div class="col-xs-12 col-md-3">
                                        <figure class="member-fig">
                                            <img style="width: 200px;height: 200px;" src="{{url('uploads/'.$item->photo)}}" alt=""/>
                                        </figure>
                                        {{--@can('send_message')  <span ng-init="pre({{$userdat->id}})"></span>--}}


                                        <a href="#" ng-click="showmessagebox()">
                                            message {{--<span class="livicon" data-name="mail"  data-size="20" id="livicon-3"
                                  style="width: 20px; height: 20px;">
                            </span>--}}
                                        </a>

                                    </div><!--column-->
                                    <div class="col-xs-12 col-md-9">
                                        <h2>Hi, i am <span>{{$item->client_name}}!</span></h2>
                                        <h3>{{$item->profession}}</h3>
                                        <p><strong>{{$item->education}}</strong>

                                    </div><!--column-->
                                </div><!--row-->
                                <div class="row">
                                    <div class="col-md-12 col-xs-12" ng-show="messagebox">
                                        <form ng-submit="messagebody({{Auth::user()->id}})">
                                            <h4>Send message !</h4>


                                            <textarea ng-model="messagetext" style="width:100%" placeholder="Message..."></textarea>
                                            <br>
                                            <button class="btn btn-primary">Send</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="profile-timeline">
                                            <div class="time-box profile-bio">
                                                <div class="box-head">
                                                    <span class="box-icon xv-id"></span>
                                                    <h2>Profile</h2>
                                                </div><!--box-head-->
                                                <div class="box-detail">
                                                    <div class="row">
                                                        <div class="col-xs-4 col-sm-3 col-md-2">
                                                            <h3>Full Name : </h3>
                                                        </div>
                                                        <div class="col-xs-8 col-sm-9 col-md-10">
                                                            <h4>{{$item->client_name. ' '}}</h4>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xs-4 col-sm-3 col-md-2">
                                                            <h3>Birth Date : </h3>
                                                        </div>
                                                        <div class="col-xs-8 col-sm-9 col-md-10">
                                                            <h4>{{$item->age}} </h4>
                                                        </div>
                                                    </div>

                                                    {{--   <div class="row">
                                                           <div class="col-xs-4 col-sm-3 col-md-2">
                                                               <h3>Email : </h3>
                                                           </div>
                                                           <div class="col-xs-8 col-sm-9 col-md-10">
                                                               <h4><a href="#">{{$userdat->email}}</a></h4>
                                                           </div>
                                                       </div>--}}
                                                    <div class="row">
                                                        <div class="col-xs-4 col-sm-3 col-md-2">
                                                            <h3>Phone : </h3>
                                                        </div>
                                                        <div class="col-xs-8 col-sm-9 col-md-10">
                                                            <h4><a href="#">{{$item->phone}}</a></h4>
                                                        </div>
                                                    </div>

                                                    {{--  <div class="row">
                                                          <div class="col-xs-4 col-sm-3 col-md-2">
                                                              <h3>Find me on: </h3>
                                                          </div>
                                                          <div class="col-xs-8 col-sm-9 col-md-10">
                                                              <ul class="social">
                                                                  <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                                  <li ><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                                  <li ><a href="#"><span class="fa fa-pinterest"></span></a></li>
                                                                  <li ><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                                              </ul>
                                                          </div>
                                                      </div>--}}
                                                </div>
                                            </div>
                                            {{--  <div class="time-box profile-bio">
                                                  <div class="box-head">
                                                      <span class="box-icon xv-study"></span>
                                                      <h2>Profession</h2>
                                                  </div><!--box-head-->
                                                  <div class="box-detail">
                                                      <div class="row">
                                                          <div class="col-xs-4 col-sm-3 col-md-3">
                                                              <h3>Profession : </h3>
                                                          </div>
                                                          <div class="col-xs-8 col-sm-9 col-md-9">
                                                              <h4>{{$item->profession}}</h4>
                                                          </div>
                                                      </div>

                                                      <div class="row">
                                                          <div class="col-xs-4 col-sm-3 col-md-3">
                                                              <h3>jobtitle : </h3>
                                                          </div>
                                                          <div class="col-xs-8 col-sm-9 col-md-9">
                                                              <h4>{{$item->jobtitle}} </h4>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <div class="col-xs-4 col-sm-3 col-md-3">
                                                              <h3>Income : </h3>
                                                          </div>
                                                          <div class="col-xs-8 col-sm-9 col-md-9">
                                                              <h4>{{$item->income}} </h4>
                                                          </div>
                                                      </div>

                                                      <div class="row">
                                                          <div class="col-xs-5 col-sm-3 col-md-3">
                                                              <h3>Educaion_Level : </h3>
                                                          </div>
                                                          <div class="col-xs-7 col-sm-9 col-md-9">
                                                              <h4>{{$item->education_level}}</h4>
                                                          </div>
                                                      </div>

                                                      <div class="row">
                                                          <div class="col-xs-4 col-sm-3 col-md-3">
                                                              <h3>Subject Studied : </h3>
                                                          </div>
                                                          <div class="col-xs-8 col-sm-9 col-md-9">
                                                              <h4>{{$item->subject_studied}}</h4>
                                                          </div>
                                                      </div>


                                                  </div>
                                              </div>
                                              <div class="time-box profile-bio">
                                                  <div class="box-head">
                                                      <span class="box-icon xv-id"></span>
                                                      <h2>Marital info</h2>
                                                  </div><!--box-head-->
                                                  <div class="box-detail">
                                                      <div class="row">
                                                          <div class="col-xs-4 col-sm-3 col-md-3">
                                                              <h3>Marital status : </h3>
                                                          </div>
                                                          <div class="col-xs-8 col-sm-9 col-md-9">
                                                              <h4>{{$item->marital_status}}</h4>
                                                          </div>
                                                      </div>

                                                      <div class="row">
                                                          <div class="col-xs-4 col-sm-3 col-md-3">
                                                              <h3>Marry time : </h3>
                                                          </div>
                                                          <div class="col-xs-8 col-sm-9 col-md-9">
                                                              <h4>{{$item->matri_time}} </h4>
                                                          </div>
                                                      </div>

                                                      <div class="row">
                                                          <div class="col-xs-5 col-sm-3 col-md-3">
                                                              <h3>Gender : </h3>
                                                          </div>
                                                          <div class="col-xs-7 col-sm-9 col-md-9">
                                                              <h4>{{$item->gender}}</h4>
                                                          </div>
                                                      </div>



                                                  </div>
                                              </div>
                                              <div class="time-box profile-bio">
                                                  <div class="box-head">
                                                      <span class="box-icon xv-id"></span>
                                                      <h2>Residential info</h2>
                                                  </div><!--box-head-->
                                                  <div class="box-detail">
                                                      <div class="row">
                                                          <div class="col-xs-4 col-sm-3 col-md-3">
                                                              <h3>Language : </h3>
                                                          </div>
                                                          <div class="col-xs-8 col-sm-9 col-md-9">
                                                              <h4>{{$item->first_language}}</h4>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <div class="col-xs-4 col-sm-3 col-md-3">
                                                              <h3>Country : </h3>
                                                          </div>
                                                          <div class="col-xs-8 col-sm-9 col-md-9">
                                                              <h4>{{$item->country}}</h4>
                                                          </div>
                                                      </div>

                                                      <div class="row">
                                                          <div class="col-xs-4 col-sm-3 col-md-3">
                                                              <h3>Province : </h3>
                                                          </div>
                                                          <div class="col-xs-8 col-sm-9 col-md-9">
                                                              <h4>{{$item->province}} </h4>
                                                          </div>
                                                      </div>

                                                      <div class="row">
                                                          <div class="col-xs-5 col-sm-3 col-md-3">
                                                              <h3>City : </h3>
                                                          </div>
                                                          <div class="col-xs-7 col-sm-9 col-md-9">
                                                              <h4>{{$item->city}}</h4>
                                                          </div>
                                                      </div>



                                                  </div>
                                              </div>--}}
                                            <!--time-box-->

                                            {{--  <div class="time-box">
                                                  <div class="box-head">
                                                      <span class="box-icon xv-study"></span>
                                                      <h2>Education</h2>
                                                  </div><!--box-head-->

                                                  <div class="article-post row">
                                                      <div class="col-xs-12 col-sm-3 col-md-2 timebox-info">
                                                          <div class="article-meta">
                                                              <div class="meta-time">
                                                                  <span class="day-month">Aug 2011 - Present</span><span class="year-post">2015-2011</span></div>
                                                          </div>
                                                      </div>
                                                      <div class="col-xs-12 col-sm-9 col-md-10 post-detail">
                                                          <h4>Comsats University of sciences and technology <span>BS Computer sciences</span></h4>
                                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget elit quis est tempor mollis non vel erat. Pellentesque fermentum laoreet arcu, ut scelerisque metus interdum adipiscing. Curabitur interdum pharetra mauris vitae suscipit. Praesent at est aliquet, accumsan justo vel, pretium sem.</p>
                                                      </div>
                                                  </div><!--post-->
                                                  <div class="article-post row">
                                                      <div class="col-xs-12 col-sm-3 col-md-2 timebox-info">
                                                          <div class="article-meta">
                                                              <div class="meta-time"><span class="day-month">Jan 2010 - Passed</span><span class="year-post">2010-2008</span></div>
                                                          </div>
                                                      </div>
                                                      <div class="col-xs-12 col-sm-9 col-md-10 post-detail">
                                                          <h4>Federal Govet. College <span>O Level</span></h4>
                                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget elit quis est tempor mollis non vel erat. Pellentesque fermentum laoreet arcu, ut scelerisque metus interdum adipiscing. Curabitur interdum pharetra mauris vitae suscipit. Praesent at est aliquet, accumsan justo vel, pretium sem.</p>
                                                      </div>
                                                  </div><!--post-->

                                                  <div class="article-post row">
                                                      <div class="col-xs-12 col-sm-3 col-md-2 timebox-info">
                                                          <div class="article-meta">
                                                              <div class="meta-time"><span class="day-month">Aug 2008 - Passed</span><span class="year-post">2002-2008</span></div>
                                                          </div>
                                                      </div>
                                                      <div class="col-xs-12 col-sm-9 col-md-10 post-detail">
                                                          <h4>Federal Govet. School <span>A Level</span></h4>
                                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget elit quis est tempor mollis non vel erat. Pellentesque fermentum laoreet arcu, ut scelerisque metus interdum adipiscing. Curabitur interdum pharetra mauris vitae suscipit. Praesent at est aliquet, accumsan justo vel, pretium sem.</p>
                                                      </div>
                                                  </div><!--post-->

                                              </div><!--time-box-->


                                              <div class="time-box">
                                                  <div class="box-head">
                                                      <span class="box-icon xv-paperclip"></span>
                                                      <h2>Work Experience</h2>
                                                  </div><!--box-head-->

                                                  <div class="article-post row">
                                                      <div class="col-xs-12 col-sm-3 col-md-2 timebox-info">
                                                          <div class="article-meta">
                                                              <div class="meta-time"><span class="day-month">Aug 2014 - Present</span><span class="year-post">2015-2011</span></div>
                                                          </div>
                                                      </div>
                                                      <div class="col-xs-12 col-sm-9 col-md-10 post-detail">
                                                          <h4>Lorem Ipsum Company<span>Designer</span></h4>
                                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget elit quis est tempor mollis non vel erat. Pellentesque fermentum laoreet arcu, ut scelerisque metus interdum adipiscing. Curabitur interdum pharetra mauris vitae suscipit. Praesent at est aliquet, accumsan justo vel, pretium sem.</p>
                                                      </div>
                                                  </div><!--post-->
                                                  <div class="article-post row">
                                                      <div class="col-xs-12 col-sm-3 col-md-2 timebox-info">
                                                          <div class="article-meta">
                                                              <div class="meta-time"><span class="day-month">Jan 2010 - Passed</span><span class="year-post">2010-2008</span></div>
                                                          </div>
                                                      </div>
                                                      <div class="col-xs-12 col-sm-9 col-md-10 post-detail">
                                                          <h4>Lorem Ipsum Company<span>Designer</span></h4>
                                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget elit quis est tempor mollis non vel erat. Pellentesque fermentum laoreet arcu, ut scelerisque metus interdum adipiscing. Curabitur interdum pharetra mauris vitae suscipit. Praesent at est aliquet, accumsan justo vel, pretium sem.</p>
                                                      </div>
                                                  </div><!--post-->

                                                  <div class="article-post row">
                                                      <div class="col-xs-12 col-sm-3 col-md-2 timebox-info">
                                                          <div class="article-meta">
                                                              <div class="meta-time"><span class="day-month">Aug 2008 - Passed</span><span class="year-post">2002-2008</span></div>
                                                          </div>
                                                      </div>
                                                      <div class="col-xs-12 col-sm-9 col-md-10 post-detail">
                                                          <h4>Lorem Ipsum Company<span>Designer</span></h4>
                                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget elit quis est tempor mollis non vel erat. Pellentesque fermentum laoreet arcu, ut scelerisque metus interdum adipiscing. Curabitur interdum pharetra mauris vitae suscipit. Praesent at est aliquet, accumsan justo vel, pretium sem.</p>
                                                      </div>
                                                  </div><!--post-->

                                              </div><!--time-box-->

                                              <div class="time-box">
                                                  <div class="box-head">
                                                      <span class="box-icon xv-graph"></span>
                                                      <h2>My Skills</h2>
                                                  </div><!--box-head-->
                                                  <div class="row">

                                                      <div class="col-xs-12">
                                                          <div class="progress-wrapper">
                                                              <h6>Web Design</h6>
                                                              <div class="progress">
                                                                  <div class="progress-bar progress-default" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                                                      <span class="sr-only">80% Complete</span>
                                                                  </div>
                                                              </div>
                                                          </div><!--progress wrapper-->

                                                          <div class="progress-wrapper">
                                                              <h6>Web Development</h6>
                                                              <div class="progress">
                                                                  <div class="progress-bar progress-default" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                                      <span class="sr-only">90% Complete</span>
                                                                  </div>
                                                              </div>
                                                          </div><!--progress wrapper-->

                                                          <div class="progress-wrapper">
                                                              <h6>Frontend Development</h6>
                                                              <div class="progress">
                                                                  <div class="progress-bar progress-default" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                                                      <span class="sr-only">85% Complete</span>
                                                                  </div>
                                                              </div>
                                                          </div><!--progress wrapper-->
                                                      </div>
                                                  </div>
                                              </div><!--time-box-->
                  --}}
                                        </div><!--profile-timeline-->
                                    </div>
                                </div>
                                <?php } else{?>
        <h2>not viewed yet</h2>
    <?php }?>

                            </div>
                        </div>
                    </div><!--tabs ends-->
                </div><!--tabs-horizontal-->

            </div><!--column-->

            </div>
        </div><!--row-->
    </div>
</section>
    @endsection