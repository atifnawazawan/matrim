@extends('layouts.app')
@section('content')
    <div class="grid_3">
        <div class="container">
            <div class="breadcrumb1">
                <ul>
                    <a href="index.html"><i class="fa fa-home home_1"></i></a>
                    <span class="divider">&nbsp;|&nbsp;</span>
                    <li class="current-page">Inboax</li>
                </ul>
            </div>
            <div class="col-md-3 col_5">
                <ul class="match_box">
                    <h4>Matches</h4>
                    <li><a href="#">Mutual Matches</a></li>
                    <li><a href="#">Profiles yet to be viewed</a></li>
                    <li><a href="#">Mutual Matches</a></li>
                </ul>
                <img src="images/v1.jpg" class="img-responsive" alt=""/>
            @include('partials.profiletypes')
            </div>
            <div class="col-md-9 members_box2">
                <h3>Sent</h3>
                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                <div class="col_4">
                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
                            <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">All</a></li>
                            <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">New</a></li>
                            <li role="presentation"><a href="#profile1" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Read</a></li>
                            <li role="presentation"><a href="#profile2" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Accepted</a></li>
                            <li role="presentation"><a href="#profile2" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Not Interested</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                <ul class="pagination pagination_1">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                                <div class="clearfix"> </div>

                                @if (count($messages) > 0)
                                    @foreach ($messages as $message)
                                        <div class="jobs-item with-thumb">
                                            <div class="thumb_top">
                                                <?php $fo=Auth::user()->where('id',$message->to)->first();
                                                $profile=App\Profile::where('user_id',$message->to)->first();
                                                ?>

                                                <div class="thumb"><a href="profile/{{$profile->id}}"><img src="{{url('uploads/'.$profile->photo)}}" class="img-responsive" alt=""/></a></div>
                                                <div class="jobs_right">
                                                    <h6 class="title"><a href="view_profile.html">{{$message->messagebody}}</a></h6>
                                                    <ul class="top-btns">
                                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                                        <li><a href="#" class="fa fa-google-plus"></a></li>
                                                    </ul>
                                                    <ul class="login_details1">
                                                        <li>Last Login : 5 days ago</li>
                                                    </ul>
                                                    <p class="description">30 years, 5 Ft 7 In / 170 Cms | <span class="m_1">Reliogion</span> : Islam | <span class="m_1">Education</span> : B.Tech | <span class="m_1">Occupation</span> : Software Professional<br><a href="profile/{{$profile->id}}" class="read-more">view full profile</a></p>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="thumb_bottom">
                                                <div class="thumb"><a href="view_profile.html" class="photo_view">Add Photo</a></div>
                                                <div class="thumb_but"><a href="view_profile.html" class="photo_view">Send Mail</a></div>
                                                <div class="clearfix"> </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif



                            </div>
                            <!--div-- class="jobs-item with-thumb">
                                  <div class="thumb_top">
                                      <div class="thumb"><a href="view_profile.html"><img src="images/p14.jpg" class="img-responsive" alt=""/></a></div>
                                      <div class="jobs_right">
                                          <h6 class="title"><a href="view_profile.html">Lorem (2547189)</a></h6>
                                          <ul class="top-btns">
                                              <li><a href="#" class="fa fa-facebook"></a></li>
                                              <li><a href="#" class="fa fa-twitter"></a></li>
                                              <li><a href="#" class="fa fa-google-plus"></a></li>
                                          </ul>
                                          <ul class="login_details1">
                                              <li>Last Login : 5 days ago</li>
                                          </ul>
                                          <p class="description">30 years, 5 Ft 7 In / 170 Cms | <span class="m_1">Reliogion</span> : Hindu | <span class="m_1">Education</span> : B.Tech | <span class="m_1">Occupation</span> : Software Professional<br><a href="view_profile.html" class="read-more">view full profile</a></p>
                                      </div>
                                      <div class="clearfix"> </div>
                                  </div>
                                  <div class="thumb_bottom">
                                      <div class="thumb"><a href="view_profile.html" class="photo_view">Add Photo</a></div>
                                      <div class="thumb_but"><a href="view_profile.html" class="photo_view">Send Mail</a></div>
                                      <div class="clearfix"> </div>
                                  </div>
                              </div-->
                            <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                                <div class="jobs-item with-thumb">
                                    <div class="thumb_top">
                                        <div class="thumb"><a href="view_profile.html"><img src="images/s3.jpg" class="img-responsive" alt=""/></a></div>
                                        <div class="jobs_right">
                                            <h6 class="title"><a href="view_profile.html">Lorem (2547189)</a></h6>
                                            <ul class="top-btns">
                                                <li><a href="#" class="fa fa-facebook"></a></li>
                                                <li><a href="#" class="fa fa-twitter"></a></li>
                                                <li><a href="#" class="fa fa-google-plus"></a></li>
                                            </ul>
                                            <ul class="login_details1">
                                                <li>Last Login : 5 days ago</li>
                                            </ul>
                                            <p class="description">30 years, 5 Ft 7 In / 170 Cms | <span class="m_1">Reliogion</span> : Hindu | <span class="m_1">Education</span> : B.Tech | <span class="m_1">Occupation</span> : Software Professional<br><a href="view_profile.html" class="read-more">view full profile</a></p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="thumb_bottom">
                                        <div class="thumb"><a href="view_profile.html" class="photo_view">Add Photo</a></div>
                                        <div class="thumb_but"><a href="view_profile.html" class="photo_view">Send Mail</a></div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="jobs-item with-thumb">
                                    <div class="thumb_top">
                                        <div class="thumb"><a href="view_profile.html"><img src="images/s3.jpg" class="img-responsive" alt=""/></a></div>
                                        <div class="jobs_right">
                                            <h6 class="title"><a href="view_profile.html">Lorem (2547189)</a></h6>
                                            <ul class="top-btns">
                                                <li><a href="#" class="fa fa-facebook"></a></li>
                                                <li><a href="#" class="fa fa-twitter"></a></li>
                                                <li><a href="#" class="fa fa-google-plus"></a></li>
                                            </ul>
                                            <ul class="login_details1">
                                                <li>Last Login : 5 days ago</li>
                                            </ul>
                                            <p class="description">30 years, 5 Ft 7 In / 170 Cms | <span class="m_1">Reliogion</span> : Hindu | <span class="m_1">Education</span> : B.Tech | <span class="m_1">Occupation</span> : Software Professional<br><a href="view_profile.html" class="read-more">view full profile</a></p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="thumb_bottom">
                                        <div class="thumb"><a href="view_profile.html" class="photo_view">Add Photo</a></div>
                                        <div class="thumb_but"><a href="view_profile.html" class="photo_view">Send Mail</a></div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="jobs-item with-thumb">
                                    <div class="thumb_top">
                                        <div class="thumb"><a href="view_profile.html"><img src="images/s3.jpg" class="img-responsive" alt=""/></a></div>
                                        <div class="jobs_right">
                                            <h6 class="title"><a href="view_profile.html">Lorem (2547189)</a></h6>
                                            <ul class="top-btns">
                                                <li><a href="#" class="fa fa-facebook"></a></li>
                                                <li><a href="#" class="fa fa-twitter"></a></li>
                                                <li><a href="#" class="fa fa-google-plus"></a></li>
                                            </ul>
                                            <ul class="login_details1">
                                                <li>Last Login : 5 days ago</li>
                                            </ul>
                                            <p class="description">30 years, 5 Ft 7 In / 170 Cms | <span class="m_1">Reliogion</span> : Hindu | <span class="m_1">Education</span> : B.Tech | <span class="m_1">Occupation</span> : Software Professional<br><a href="view_profile.html" class="read-more">view full profile</a></p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="thumb_bottom">
                                        <div class="thumb"><a href="view_profile.html" class="photo_view">Add Photo</a></div>
                                        <div class="thumb_but"><a href="view_profile.html" class="photo_view">Send Mail</a></div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab">
                                <div class="terms">
                                    <h2>Your Privacy Settings</h2>
                                    <div class="terms_top">
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                        <ol class="terms_list">
                                            <li>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum".</li>
                                            <li>Lusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</li>
                                            <li>Praesentium voluptatum deleniti atque corrupti quos</li>
                                            <li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</li>
                                            <li>Mentum eleifend enim a feugiat distinctio lor</li>
                                        </ol>
                                        <h4>There are many variations of passages</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non <a href="#">libero consectetur adipiscing</a> elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                                        <p><strong>Iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non sit amet, consectetur adipiscing elit. Ut adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque lorem ipsum dolor sit amet. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat <a href="#">consectetur adipiscing elit</a>.</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile2" aria-labelledby="profile-tab">
                                <div class="jobs-item with-thumb">
                                    <div class="thumb_top">
                                        <div class="thumb"><a href="view_profile.html"><img src="images/s3.jpg" class="img-responsive" alt=""/></a></div>
                                        <div class="jobs_right">
                                            <h6 class="title"><a href="view_profile.html">Lorem (2547189)</a></h6>
                                            <ul class="top-btns">
                                                <li><a href="#" class="fa fa-facebook"></a></li>
                                                <li><a href="#" class="fa fa-twitter"></a></li>
                                                <li><a href="#" class="fa fa-google-plus"></a></li>
                                            </ul>
                                            <ul class="login_details1">
                                                <li>Last Login : 5 days ago</li>
                                            </ul>
                                            <p class="description">30 years, 5 Ft 7 In / 170 Cms | <span class="m_1">Reliogion</span> : Hindu | <span class="m_1">Education</span> : B.Tech | <span class="m_1">Occupation</span> : Software Professional<br><a href="view_profile.html" class="read-more">view full profile</a></p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="thumb_bottom">
                                        <div class="thumb"><a href="view_profile.html" class="photo_view">Add Photo</a></div>
                                        <div class="thumb_but"><a href="view_profile.html" class="photo_view">Send Mail</a></div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="jobs-item with-thumb">
                                    <div class="thumb_top">
                                        <div class="thumb"><a href="view_profile.html"><img src="images/s3.jpg" class="img-responsive" alt=""/></a></div>
                                        <div class="jobs_right">
                                            <h6 class="title"><a href="view_profile.html">Lorem (2547189)</a></h6>
                                            <ul class="top-btns">
                                                <li><a href="#" class="fa fa-facebook"></a></li>
                                                <li><a href="#" class="fa fa-twitter"></a></li>
                                                <li><a href="#" class="fa fa-google-plus"></a></li>
                                            </ul>
                                            <ul class="login_details1">
                                                <li>Last Login : 5 days ago</li>
                                            </ul>
                                            <p class="description">30 years, 5 Ft 7 In / 170 Cms | <span class="m_1">Reliogion</span> : Hindu | <span class="m_1">Education</span> : B.Tech | <span class="m_1">Occupation</span> : Software Professional<br><a href="view_profile.html" class="read-more">view full profile</a></p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="thumb_bottom">
                                        <div class="thumb"><a href="view_profile.html" class="photo_view">Add Photo</a></div>
                                        <div class="thumb_but"><a href="view_profile.html" class="photo_view">Send Mail</a></div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="jobs-item with-thumb">
                                    <div class="thumb_top">
                                        <div class="thumb"><a href="view_profile.html"><img src="images/s3.jpg" class="img-responsive" alt=""/></a></div>
                                        <div class="jobs_right">
                                            <h6 class="title"><a href="view_profile.html">Lorem (2547189)</a></h6>
                                            <ul class="top-btns">
                                                <li><a href="#" class="fa fa-facebook"></a></li>
                                                <li><a href="#" class="fa fa-twitter"></a></li>
                                                <li><a href="#" class="fa fa-google-plus"></a></li>
                                            </ul>
                                            <ul class="login_details1">
                                                <li>Last Login : 5 days ago</li>
                                            </ul>
                                            <p class="description">30 years, 5 Ft 7 In / 170 Cms | <span class="m_1">Reliogion</span> : Hindu | <span class="m_1">Education</span> : B.Tech | <span class="m_1">Occupation</span> : Software Professional<br><a href="view_profile.html" class="read-more">view full profile</a></p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="thumb_bottom">
                                        <div class="thumb"><a href="view_profile.html" class="photo_view">Add Photo</a></div>
                                        <div class="thumb_but"><a href="view_profile.html" class="photo_view">Send Mail</a></div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="jobs-item with-thumb">
                                    <div class="thumb_top">
                                        <div class="thumb"><a href="view_profile.html"><img src="images/s3.jpg" class="img-responsive" alt=""/></a></div>
                                        <div class="jobs_right">
                                            <h6 class="title"><a href="view_profile.html">Lorem (2547189)</a></h6>
                                            <ul class="top-btns">
                                                <li><a href="#" class="fa fa-facebook"></a></li>
                                                <li><a href="#" class="fa fa-twitter"></a></li>
                                                <li><a href="#" class="fa fa-google-plus"></a></li>
                                            </ul>
                                            <ul class="login_details1">
                                                <li>Last Login : 5 days ago</li>
                                            </ul>
                                            <p class="description">30 years, 5 Ft 7 In / 170 Cms | <span class="m_1">Reliogion</span> : Hindu | <span class="m_1">Education</span> : B.Tech | <span class="m_1">Occupation</span> : Software Professional<br><a href="view_profile.html" class="read-more">view full profile</a></p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="thumb_bottom">
                                        <div class="thumb"><a href="view_profile.html" class="photo_view">Add Photo</a></div>
                                        <div class="thumb_but"><a href="view_profile.html" class="photo_view">Send Mail</a></div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile3" aria-labelledby="profile-tab">
                                <div class="terms">
                                    <h2>Your Privacy Settings</h2>
                                    <div class="terms_top">
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                        <ol class="terms_list">
                                            <li>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum".</li>
                                            <li>Lusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</li>
                                            <li>Praesentium voluptatum deleniti atque corrupti quos</li>
                                            <li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</li>
                                            <li>Mentum eleifend enim a feugiat distinctio lor</li>
                                        </ol>
                                        <h4>There are many variations of passages</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non <a href="#">libero consectetur adipiscing</a> elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                                        <p><strong>Iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non sit amet, consectetur adipiscing elit. Ut adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque lorem ipsum dolor sit amet. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat <a href="#">consectetur adipiscing elit</a>.</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

@endsection