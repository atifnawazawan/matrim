@extends('layouts.app')

@section('content')



        <!--=================================
Resume
=================================-->
<div class="resume-wrapper" ng-controller="profileController">
    <script type="text/ng-template" id="myModalContent.html" >
        <div style="margin-top: 115px">

            <div class="modal-header" >
                <h3 class="modal-title">Warning:</h3>
            </div>
            <div class="modal-body" >

                <b>@{{ selected }}</b>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" ng-click="ok()">OK</button>
                <!--button class="btn btn-warning" type="button" ng-click="cancel()">Cancel</button-->
            </div>
        </div>

    </script>


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
        </div>
</div>







@endsection