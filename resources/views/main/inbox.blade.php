@extends('layouts.app')
@section('content')

    <section class="page-template">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3>Messages area</h3>
                </div>
                <div class="col-xs-12 col-md-12">
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="active"><a href="#one" data-toggle="tab">inbox</a></li>
                        <li><a href="#two" data-toggle="tab">sent</a></li>
                        <li><a href="#three" data-toggle="tab">Our Vision</a></li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content justified-tabs">
                        <div class="tab-pane fade in active" id="one">

<?php $data=json_decode($inboxmessages,true);
                            ?>

                            sdf
                            <br>
{{$inboxlinks->links()}}
                                    <ul class="media-list" ng-init='inboxmes = <?php echo json_encode($data['data']);?>'>
                                        @if (count($inboxmessages) > 0)
                                            <label>Search: <input ng-model="inboxsearch.$"></label> <br>


                                            <li class="media" ng-repeat="x in inboxmes | filter:inboxsearch">
                                                <?php  $image="{{x.photo}}";?>
                                                <a class="pull-left" href="profile/@{{ x.profileId }}"><img src="{{url('uploads/'.$image)}}" class="img-responsive" alt=""/>
                                                </a>

                                                <div class="media-body">
                                                    {{-- <ul class="products-ratings">
                                                         <li class="fa fa-star"></li>
                                                         <li class="fa fa-star"></li>
                                                         <li class="fa fa-star"></li>
                                                         <li class="fa fa-star"></li>
                                                         <li class="fa fa-star-half"></li>
                                                     </ul>--}}
                                                    <h4 class="media-heading">@{{ x.first_name }}</h4>
                                                    <p>@{{ x.messagebody }}</p>
                                                    <!-- media object -->

                                                </div>
                                            </li>


                                @endif
</ul>{{--
                                <p>Lorem sdipsum dolor sit amet, consectetasdaur adipiscing elit. In risus neque, pretium id sollicitudin nec, bibendum at leo. Nullam condimentum, sem scelerisque volutpat  nec odio. </p>

                            <p>Aenean pharetra libero magna, vel facilisis metus suscipit eu. Duis a venenatis risus. Cras at dui est. Vivamus porta nunc eros. Pellentesque vel sodales augue. Nulla placerat orci at urna ultricies adipiscing. Maecenas nec aliquet arcu.</p>--}}

                        </div>
                        <div class="tab-pane fade" id="two">

       {{--                     <ul class="media-list">
                                @if (count($sentmessages) > 0)
                                    @foreach ($sentmessages as $message)


                                        <li class="media">

                                            <a class="pull-left" href="profile/{{$message->profileId}}"><img src="{{url('uploads/'.$message->photo)}}" class="img-responsive" alt=""/>
                                            </a>

                                            <div class="media-body">
                                                --}}{{-- <ul class="products-ratings">
                                                     <li class="fa fa-star"></li>
                                                     <li class="fa fa-star"></li>
                                                     <li class="fa fa-star"></li>
                                                     <li class="fa fa-star"></li>
                                                     <li class="fa fa-star-half"></li>
                                                 </ul>--}}{{--
                                                <h4 class="media-heading">{{$message->first_name}}</h4>
                                                <p>{{$message->messagebody}}</p>
                                                <!-- media object -->

                                            </div>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
--}}
                            <ul class="media-list" ng-init='mes = <?php echo $sentmessages;?>'>
                                @if (count($sentmessages) > 0)

                                    <label>Search: <input ng-model="search.$"></label> <br>


                                    <li class="media" ng-repeat="x in mes | filter:search">
                                        <?php  $image="{{x.photo}}";?>
                                        <a class="pull-left" href="profile/@{{ x.profileId }}"><img src="{{url('uploads/'.$image)}}" class="img-responsive" alt=""/>
                                        </a>

                                        <div class="media-body">
                                            {{-- <ul class="products-ratings">
                                                 <li class="fa fa-star"></li>
                                                 <li class="fa fa-star"></li>
                                                 <li class="fa fa-star"></li>
                                                 <li class="fa fa-star"></li>
                                                 <li class="fa fa-star-half"></li>
                                             </ul>--}}
                                            <h4 class="media-heading">@{{ x.first_name }}</h4>
                                            <p>@{{ x.messagebody }}</p>
                                            <!-- media object -->

                                        </div>
                                    </li>

                                @endif
                            </ul>

                        </div>
                        <div class="tab-pane fade" id="three">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In risus neque, pretium id sollicitudin nec, bibendum at leo. Nullam condimentum, sem scelerisque volutpat  nec odio. </p>

                            <p>Aenean pharetra libero magna, vel facilisis metus suscipit eu. Duis a venenatis risus. Cras at dui est. Vivamus porta nunc eros. Pellentesque vel sodales augue. Nulla placerat orci at urna ultricies adipiscing. Maecenas nec aliquet arcu.</p>

                        </div>

                    </div>
                    <!--tab-pane-->
                </div><!--column->


                <div class="col-xs-12 col-md-6">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#one-2" data-toggle="tab">Tab One</a></li>
                        <li><a href="#two-2" data-toggle="tab">Tab Two</a></li>
                        <li><a href="#three-2" data-toggle="tab">Tab Three</a></li>
                    </ul>

                    <!-- Tab panes ->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="one-2">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In risus neque, pretium id sollicitudin nec, bibendum at leo. Nullam condimentum, sem scelerisque volutpat  nec odio. </p>

                            <p>Aenean pharetra libero magna, vel facilisis metus suscipit eu. Duis a venenatis risus. Cras at dui est. Vivamus porta nunc eros. Pellentesque vel sodales augue. Nulla placerat orci at urna ultricies adipiscing. Maecenas nec aliquet arcu.</p>

                        </div>
                        <div class="tab-pane fade" id="two-2">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In risus neque, pretium id sollicitudin nec, bibendum at leo. Nullam condimentum, sem scelerisque volutpat  nec odio. </p>

                            <p>Aenean pharetra libero magna, vel facilisis metus suscipit eu. Duis a venenatis risus. Cras at dui est. Vivamus porta nunc eros. Pellentesque vel sodales augue. Nulla placerat orci at urna ultricies adipiscing. Maecenas nec aliquet arcu.</p>

                        </div>
                        <div class="tab-pane fade" id="three-2">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In risus neque, pretium id sollicitudin nec, bibendum at leo. Nullam condimentum, sem scelerisque volutpat  nec odio. </p>

                            <p>Aenean pharetra libero magna, vel facilisis metus suscipit eu. Duis a venenatis risus. Cras at dui est. Vivamus porta nunc eros. Pellentesque vel sodales augue. Nulla placerat orci at urna ultricies adipiscing. Maecenas nec aliquet arcu.</p>

                        </div>
                    </div>
                    <!--tab-pane->
                </div><!--column-->

            </div>
            <!--row->

            <div class="row">
                <div class="col-xs-12">
                    <h2>Default Tabs</h2>

                    <div class="tabs-vertical">

                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <ul class="nav nav-tabs" id="ornatTabs">
                                <li class="active"><a href="#tab1">
                                        <span class="livicon" data-name="tablet" data-onparent="true" data-size="30"></span>
                                        Mobile Marketing</a>
                                </li>
                                <li><a href="#tab2">
                                        <span class="livicon" data-name="barchart" data-onparent="true" data-size="30"></span>
                                        Design & Development</a>
                                </li>
                                <li><a href="#tab3">
                                        <span class="livicon" data-name="presentation" data-onparent="true" data-size="30"></span>
                                        Campaign Analysis</a>
                                </li>
                                <li><a href="#tab4">
                                        <span class="livicon" data-name="help" data-onparent="true" data-size="30"></span>
                                        Technical Support</a>
                                </li>
                                <li><a href="#tab5">
                                        <span class="livicon" data-name="responsive" data-onparent="true" data-size="30"></span>
                                        Responsive Design</a>
                                </li>
                                <li><a href="#tab6">
                                        <span class="livicon" data-name="calendar" data-onparent="true" data-size="30"></span>
                                        Upcoming Events</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-9 col-md-9 col-sm-8">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab1">
                                    <h2>Mobile Marketing</h2>
                                    <h4>Lorem ipsum dolor sit amet sectetuer adipiscing elit.</h4>

                                    <p>A few brief words about your project or post. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                                    <a href="#" class=" btn btn-info">Documentations</a>
                                    <a href="#" class=" btn btn-danger">Purchase Now</a>
                                </div>

                                <div class="tab-pane fade" id="tab2">
                                    <h2>Design & Development</h2>
                                    <h4>Lorem ipsum dolor sit amet sectetuer adipiscing elit.</h4>
                                    <p>A few brief words about your project or post. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                                    <a href="#" class=" btn btn-info">Documentations</a>
                                    <a href="#" class=" btn btn-danger">Purchase Now</a>
                                </div>

                                <div class="tab-pane fade" id="tab3">

                                    <h2>Campaign Analysis</h2>
                                    <h4>Lorem ipsum dolor sit amet sectetuer adipiscing elit.</h4>
                                    <p>A few brief words about your project or post. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                                    <a href="#" class=" btn btn-info">Documentations</a>
                                    <a href="#" class=" btn btn-danger">Purchase Now</a>
                                </div>

                                <div class="tab-pane fade" id="tab4">
                                    <h2>Technical Support</h2>
                                    <h4>Lorem ipsum dolor sit amet sectetuer adipiscing elit.</h4>
                                    <p>A few brief words about your project or post. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                                    <a href="#" class=" btn btn-info">Documentations</a>
                                    <a href="#" class=" btn btn-danger">Purchase Now</a>
                                </div>

                                <div class="tab-pane fade" id="tab5">
                                    <h2>Upcoming Events</h2>
                                    <h4>Lorem ipsum dolor sit amet sectetuer adipiscing elit.</h4>
                                    <p>A few brief words about your project or post. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                                    <a href="#" class=" btn btn-info">Documentations</a>
                                    <a href="#" class=" btn btn-danger">Purchase Now</a>
                                </div>

                                <div class="tab-pane fade" id="tab6">
                                    <h2>Design & Development</h2>
                                    <h4>Lorem ipsum dolor sit amet sectetuer adipiscing elit.</h4>
                                    <p>A few brief words about your project or post. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                                    <a href="#" class=" btn btn-info">Documentations</a>
                                    <a href="#" class=" btn btn-danger">Purchase Now</a>
                                </div>
                            </div>
                        </div><!--tabs ends-->
                    </div><!--tabs-horizontal-->
                </div><!--column-->
            </div><!--row-->
        </div>
    </section>


@endsection