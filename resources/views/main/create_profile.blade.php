@extends('layouts.app')

@section('content')

    <div class="grid_3" ng-controller="testController">

        <div class="container">
            <div class="breadcrumb1">
                <ul>
                    <a href="index.html"><i class="fa fa-home home_1"></i></a>
                    <span class="divider">&nbsp;|&nbsp;@{{ a }}</span>
                </ul>
            </div>


            <div class="services">
                @if (count($errors) > 0)
                       <!-- Form Error List -->
                        <div class="col-sm-4" style="float: right;" >
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
            </div>{{--
                <input type="file" file-model="myFile"/>
                <input type="text" ng-model="tex">
                <button ng-click="uploadFile()">upload me</button>--}}
            <!-- method="POST" action="{{ url('/profile') }}" -->
                <form ng-submit=profileform()>
                    {{ csrf_field() }}

                <div class=" col-xs-12 col-sm-8" ng-show="form1">
                    <div class="jumbotron">
                        <h3>Update Profile</h3>
                        {{--     <style>
                            .thumb {
                                width: 133px;
                                height: 133px;
                                float: none;
                                position: relative;
                                top: 7px;
                            }

                        </style>
                        <span>Item’s picture (at least one picture is required)</span>
                      <ul class="grabr-image-upload">
                                      <!--button ng-click="picFile = null" ng-show="picFile">Remove</button-->
                                   <li>
                                          <input type="file" name="photo"  {{--ngf-select ng-model="picFile"
                                                 accept="image/*" ngf-max-size="2MB"
                                                 ngf-model-invalid="errorFile"-}}>
                                  </li>
                                  <img ng-show="main/orderform.photo.$valid" ngf-thumbnail="picFile" class="thumb">
                       </ul>

                        <br>
                   <label class="required">Profile pic</label>
                        <input type="file" name="photo">
                        --}}
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
                            <span>Item’s picture (at least one picture is required)</span>
                            <p data-ng-show="pic" style="color:red;">Item should have at least one picture
                            </p><br>
                                    <img ng-show="main/orderform.userfile.$valid" ngf-thumbnail="picFile" class="thumb">
                                    <!--button ng-click="picFile = null" ng-show="picFile">Remove</button-->

<br><br>
                                        <input type="file" name="userfile" file-model="myFile" ngf-select ng-model="picFile"
                                               accept="image/*" ngf-max-size="2MB" required
                                               ngf-model-invalid="errorFile">




                        </div>
                            <label class="required">First Name</label>
                            <span ng-show="er_fn" style="color:red">
                                        <br>Please enter your first name
                                    </span>
                            <input type="text" ng-model="first_name"  name="first_name" value="{{old('first_name')}}" id="profile-first_name" placeholder="enter first name">

                            <label class="required">Last Name</label>
<span ng-show="er_ln" style="color:red">
                                        <br>Please enter your last name
                                    </span>
                            <input type="text"  name="last_name"  value="{{old('last_name')}}" ng-model="last_name" placeholder="enter your last name">
                            <label class="required">Head Line</label>
                           <span ng-show="er_hl" style="color:red">
                                        <br>Please enter your top heading eg. Engineer,Doctor,etc.
                                    </span> <input type="text" name="headline"  value="{{old('headline')}}" ng-model="headline" placeholder="your headline">



                       <label class="required">About me</label>
                       <span ng-show="er_aboutme" style="color:red">
                                       <br>Please write some thing about your self.
                                    </span>
                        <span ng-show="er_aboutmelen" style="color:red">
                                        <br>must be atleast 7 characters!!!
                                    </span>
                    @if ($errors->has('aboutme'))

                            <span style="color:red">
                                        {{ $errors->first('aboutme') }}
                                    </span>
                        @endif

                            <textarea name="aboutme" value="{{old('aboutme')}}" ng-model="aboutme" placeholder="about your self"></textarea>

                        <br>
                          
                          <input class="btn btn-default" ng-click="for2()" type="button" value="Next">       <br>
                    </div>
                </div>
            <div class=" col-xs-12 col-sm-8" ng-show="form2">  

                    <div class="jumbotron">
                        <label class="required"> education level</label>
                         <span ng-show="er_education_level" style="color:red">
                            <br>Education level is required
                         </span>
                        <input type="text" ng-model="education_level" name="education_level" value="{{old('education_level')}}" placeholder="your education">

                        <label class="required"> subject studied</label>
                         <span ng-show="er_subject_studied" style="color:red">
                            <br>major field subject is required
                         </span>
                           <input type="text" name="subject_studied" ng-model="subject_studied" value="{{old('subject_studied')}}" placeholder="your subjects">
                           <label class="required"> profession</label>
                         <span ng-show="er_profession" style="color:red">
                                        <br>your profession is required
                                    </span>
                           <input type="text" name="profession"  ng-model="profession" value="{{old('profession')}}"  placeholder="your profession">
                           <label class="required"> jobtitle</label>
                         <span ng-show="er_jobtitle" style="color:red">
                            <br>job title is required
                         </span>
                           <input type="text" name="jobtitle" ng-model="jobtitle" value="{{old('jobtitle')}}" placeholder="your job title">
                           <label class="required"> first language</label>
                         <span ng-show="er_first_language" style="color:red">
                            <br>First language is required
                         </span>
                           <input type="text" name="first_language" ng-model="first_language"  value="{{old('first_language')}}" placeholder="first language">
                     {{--      <label class="required"> 2nd language</label>
                           <input type="text" name="second_language"  value="{{old('second_language')}}" placeholder="second language">
                    --}}
                        <label class="required"> income</label>
                         <span ng-show="er_income" style="color:red">
                            <br>Avg. income per month is required
                         </span>
                           <input type="text" name="income" ng-model="income" value="{{old('income')}}" placeholder="your income">

                        <label class="required"> gender</label>
                                <br>

                        <input type="radio" name="gender" ng-model="gender" value="female"> Female<br>
                        <input type="radio" name="gender" ng-model="gender" value="male"> Male<br>
                        <br>

                               <label class="required"> age</label>
                         <span ng-show="er_age" style="color:red">
                            <br>Age is required
                         </span> <br>
                           <input type="date" name="age" ng-model="age" max="2000-12-31" value="{{old('age')}}" placeholder="your age">
                           <br>
                      <input class="btn btn-default" ng-click="for1()"type="button" value="back"> 
                      <input class="btn btn-default" ng-click="for3()"type="button" value="Next">       <br>
                       </div>  
             </div>
             <div class=" col-xs-12 col-sm-8" ng-show="form3">
               <div class="jumbotron">
  
                      

                  <label class="required"> country</label>
                   <span ng-show="er_country" style="color:red">
                                        <br>your country is required
                                    </span>
                           <input type="text" name="country" ng-model="country" value="{{old('country')}}"  placeholder="country">
                           <label class="required">province </label>
                         <span ng-show="er_province" style="color:red">
                            <br>Province is required
                         </span>
                           <input type="text" name="province" ng-model="province" value="{{old('province')}}"  placeholder="province">

                           <label class="required">city </label>
                         <span ng-show="er_city" style="color:red">
                            <br>City name is required
                         </span>
                           <input type="text" name="city" ng-model="city"  placeholder="city">
                   <label>Marital status</label><br>


                   <input type="radio" ng-model="marital_status" name="marital_status"  value="single"> single<br>
                   <input type="radio" ng-model="marital_status" name="marital_status" value="divorced"> Divorced<br>
                   <input type="radio" ng-model="marital_status" name="marital_status" value="married"> married
                   <br>
                   <label class="required">marry time </label><br>
                   <input type="radio" ng-model="matri_time"  value="with in six month">with in six month<br>
                   <input type="radio" ng-model="matri_time" value="with in year"> with in year<br>
                   <input type="radio" ng-model="matri_time" value="after one year"> after one year
                   <br>
                   <label class="required"> phone no</label>
                         <span ng-show="er_phone_no" style="color:red">
                            <br>Phone no. is required
                         </span>

                   <input type="text" name="phone_no" ng-model="phone_no" value="{{old('phone_no')}}"  placeholder="your cell no. will remain protected untill your permission">
                   <!--label class="required"> citizenship</label>
                   <input type="text" name="citizenship" ng-model="" value="{{old('citizenship')}}" placeholder="citizen ship">
                   <label class="required"> country of origin</label>
 <input type="text" name="country_of_origin" ng-model="" value="{{old('country_of_origin')}}" placeholder="your country of origin">

                   <label class="required">street </label>
                           <textarea name="street" ng-model=""  placeholder="your street"></textarea>
                           <label class="required">postal code </label>
                           <input type="text" name="postal_code" ng-model="" value="{{old('postal_code')}}"  placeholder="your postal code">
                           <label class="required"> born_country</label>
                           <input type="text" name="born_country" ng-model=""  value="{{old('born_country')}}" placeholder="born country">

                          <label class="required"> profile created by</label>
                           <input type="text" name="pro_create_by" value="{{old('pro_create_by')}}"  placeholder="profile for">
                           <label class="required"> hide profile</label>
                           <br>
                             <input type="checkbox" name="hide_pro" value="yes" >
                            <br>

                           <label class="required">residance type </label>
                           <input type="text" name="residence_type"  value="{{old('residence_type')}}" placeholder="residance type">
                           <label class="required">can relocate </label>
                           <input type="text" name="can_relocate"  value="{{old('can_relocate')}}" placeholder="can you relocate">
                           <label class="required">phone protection </label>

                                    <br>
                           <input type="radio" name="phone_protection" value="male"> for prmimum users only<br>
                            <input type="radio" name="phone_protection" value="female"> for requested ones only<br>
                           <label class="required"> other phone</label>
                           <input type="text" name="other_phone" value="{{old('other_phone')}}"  placeholder="other phone number"-->
                           <input class="btn btn-default" ng-click="for2()"type="button" value="back">
                              <input class="btn btn-primary" type="submit" value="submit">


  
               </div>
           </div>

                </form>

{{--
                <div class="col-sm-6 login_left">
--}}

                        {{--    <style>
                               .thumb {
                                   width: 133px;
                                   height: 133px;
                                   float: none;
                                   position: relative;
                                   top: 7px;
                               }
                           </style>
                           <span>Item’s picture (at least one picture is required)</span>
                           <p data-ng-show="pic" style="color:red;">Item should have at least one picture
                           </p><ul class="grabr-image-upload">

                               <li>

                                   <img ng-show="main/orderform.userfile.$valid" ngf-thumbnail="picFile" class="thumb">
                                   <!--button ng-click="picFile = null" ng-show="picFile">Remove</button-->
                          </li>
                               {{--
                               <li>
                                   <label class="grabr-image-input" >
                                       <div class="placeholder" >
                                           <i class="fa fa-cloud" >

                                           </i></div>
                                       <input type="file" name="userfile"  ngf-select ng-model="picFile"
                                              accept="image/*" ngf-max-size="2MB" required
                                              ngf-model-invalid="errorFile">

                                   </label>


                               </li>
@include('partials/profileform')--}}





          {{--  <div class="col-sm-6">
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

