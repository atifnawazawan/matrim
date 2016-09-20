@extends('layouts.app')

@section('content')
    <div class="grid_3">
        <div class="container">
            @if (count($errors) > 0)
                    <!-- Form Error List -->
            <div class="alert alert-danger">
                <strong>Whoops! Something went wrong!</strong>

                <br><br>

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="breadcrumb1">
                <ul>
                    <a href="index.html"><i class="fa fa-home home_1"></i></a>
                    <span class="divider">&nbsp;|&nbsp;</span>
                    <li class="current-page">Profile</li>
                </ul>
            </div>
            <div class="services">
                <div class="col-sm-9 login_left">
                    <!--form-- method="POST" action="{{ url('/profile') }}">

                        {{method_field('put')}}
                      {{--@include('partials/profileform');--}}

                        <div class="form-actions">
                            <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">
                        </div>
                    </form-->
                    <div class=" col-xs-12 col-sm-12">
                        <div class="jumbotron">
                            <img src="{{url('uploads/'.Auth::user()->profiles['photo'])}}" class="thumb" style="float: right;">
<br><br>
                        <?php $profile=Auth::user()->profiles;?>

<?php                    echo Form::model($profile, array(
                            'method'=>'PUT',
                            'files'=>true,
                            'action' => array('ProfileController@update', $profile->id)));
?>   {{ csrf_field() }}
               @include('partials.profileform')
                    <div class="form-actions">
                        <input type="submit" id="edit-submit" name="op" value="Update" class="btn_1 submit">
                    </div>
                    {{Form::close()}}
                            </div></div>
                </div>
              {{--  <div class="col-sm-3">
                    <ul class="sharing">
                        <li><a href="#" class="facebook" title="Facebook"><i class="fa fa-boxed fa-fw fa-facebook"></i> Share on Facebook</a></li>
                        <li><a href="#" class="twitter" title="Twitter"><i class="fa fa-boxed fa-fw fa-twitter"></i> Tweet</a></li>
                        <li><a href="#" class="google" title="Google"><i class="fa fa-boxed fa-fw fa-google-plus"></i> Share on Google+</a></li>
                        <li><a href="#" class="linkedin" title="Linkedin"><i class="fa fa-boxed fa-fw fa-linkedin"></i> Share on LinkedIn</a></li>
                        <li><a href="#" class="mail" title="Email"><i class="fa fa-boxed fa-fw fa-envelope-o"></i> E-mail</a></li>
                    </ul>
                </div>--}}
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

@endsection

