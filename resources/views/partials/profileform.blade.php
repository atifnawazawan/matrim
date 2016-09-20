
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


<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">


    {{ Form::label('first_name', 'First Name')}}

    <span class="form-required" title="This field is required.">*</span>

    {{Form::text('first_name',null ,['class' => 'form-text'])}}
    @if ($errors->has('first_name'))
        <span class="help-block">
            <strong>{{ $errors->first('first_name') }}</strong>
        </span>
    @endif

</div>



<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">


    {{ Form::label('last_name', 'last Name')}}

    <span class="form-required" title="This field is required.">*</span>

    {{Form::text('last_name',null ,['class' => 'form-text'])}}
    @if ($errors->has('last_name'))
        <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
    @endif

</div>
<div class="form-group{{ $errors->has('headline') ? ' has-error' : '' }}">


    {{ Form::label('headline', 'Head line')}}

    <span class="form-required" title="This field is required.">*</span>

    {{Form::text('headline',null ,['class' => 'form-text'])}}
    @if ($errors->has('headline'))
        <span class="help-block">
                                        <strong>{{ $errors->first('headline') }}</strong>
                                    </span>
    @endif

</div>

<div class="form-group{{ $errors->has('aboutme') ? ' has-error' : '' }}">
    <label for="edit-name">About me <span class="form-required" title="This field is required.">*</span></label>
    {{Form::text('aboutme',null ,['class' => 'form-text'])}}
    @if ($errors->has('aboutme'))
        <span class="help-block">
                                        <strong>{{ $errors->first('aboutme') }}</strong>
                                    </span>
    @endif
</div>

<div class="form-group{{ $errors->has('education_level') ? ' has-error' : '' }}">
    @if ($errors->has('education_level'))
        <span class="help-block">
                                        <strong>{{ $errors->first('education_level') }}</strong>
                                    </span>
    @endif
    <label for="email">education_level <span class="form-required" title="This field is required.">*</span></label>
    {{Form::text('education_level',null ,['class' => 'form-text'])}}

</div>
<div class="form-group{{ $errors->has('subject_studied') ? ' has-error' : '' }}">
    @if ($errors->has('subject_studied'))
        <span class="help-block">
                                        <strong>{{ $errors->first('subject_studied') }}</strong>
                                    </span>
    @endif
    <label for="subject_studied">subject_studied <span class="form-required" title="This field is required.">*</span></label>
    {{Form::text('subject_studied',null ,['class' => 'form-text'])}}


</div>
<div class="clearfix"> </div>
<div class="form-group{{ $errors->has('profession') ? ' has-error' : '' }}">
    <label for="edit-name">profession <span class="form-required" title="This field is required.">*</span></label>
    {{Form::text('profession',null ,['class' => 'form-text'])}}

    @if ($errors->has('profession'))
        <span class="help-block">
                                        <strong>{{ $errors->first('profession') }}</strong>
                                    </span>
    @endif
</div>
<div class="form-group{{ $errors->has('jobtitle') ? ' has-error' : '' }}">
    <label for="edit-name">jobtitle <span class="form-required" title="This field is required.">*</span></label>
    {{Form::text('jobtitle',null ,['class' => 'form-text'])}}

    @if ($errors->has('jobtitle'))
        <span class="help-block">
                                        <strong>{{ $errors->first('jobtitle') }}</strong>
                                    </span>
    @endif
</div>
<div class="form-group{{ $errors->has('first_language') ? ' has-error' : '' }}">
    <label for="edit-name">first_language <span class="form-required" title="This field is required.">*</span></label>
    {{Form::text('first_language',null ,['class' => 'form-text'])}}

    @if ($errors->has('first_language'))
        <span class="help-block">
                                        <strong>{{ $errors->first('first_language') }}</strong>
                                    </span>
    @endif
</div>{{--
<div class="form-group{{ $errors->has('second_language') ? ' has-error' : '' }}">
    <label for="edit-name">second_language <span class="form-required" title="This field is required.">*</span></label>
    {{Form::text('second_language',null ,['class' => 'form-text'])}}

    @if ($errors->has('second_language'))
        <span class="help-block">
                                        <strong>{{ $errors->first('second_language') }}</strong>
                                    </span>
    @endif
</div>
<div class="form-group{{ $errors->has('citizenship') ? ' has-error' : '' }}">
    <label for="edit-name">citizenship <span class="form-required" title="This field is required.">*</span></label>
    {{Form::text('citizenship',null ,['class' => 'form-text'])}}

    @if ($errors->has('citizenship'))
        <span class="help-block">
                                        <strong>{{ $errors->first('citizenship') }}</strong>
                                    </span>
    @endif
</div>
<div class="form-group{{ $errors->has('country_of_origin') ? ' has-error' : '' }}">
    <label for="edit-name">country_of_origin <span class="form-required" title="This field is required.">*</span></label>
    {{Form::text('country_of_origin',null ,['class' => 'form-text'])}}

    @if ($errors->has('country_of_origin'))
        <span class="help-block">
                                        <strong>{{ $errors->first('country_of_origin') }}</strong>
                                    </span>
    @endif
</div>--}}
<div class="form-group{{ $errors->has('income') ? ' has-error' : '' }}">
    <label for="edit-name">income <span class="form-required" title="This field is required.">*</span></label>
    {{Form::text('income',null ,['class' => 'form-text'])}}
    @if ($errors->has('income'))
        <span class="help-block">
                                        <strong>{{ $errors->first('income') }}</strong>
                                    </span>
    @endif
</div>

<div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
    <label for="edit-pass">age  <span class="form-required" title="This field is required.">*</span></label>
    {{Form::date('age',null ,['class' => 'form-text'])}}
    @if ($errors->has('age'))
        <span class="help-block">
                                           <strong>{{ $errors->first('age') }}</strong>
                                    </span>
    @endif
</div>


<div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
    <label for="edit-pass">gender  <span class="form-required" title="This field is required.">*</span></label>
    {{Form::text('gender',null ,['class' => 'form-text'])}}
    @if ($errors->has('gender'))
        <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
    @endif
</div><div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
    <label for="edit-pass">country  <span class="form-required" title="This field is required.">*</span></label>
    {{Form::text('country',null ,['class' => 'form-text'])}}
    @if ($errors->has('country'))
        <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
    @endif
</div>
<div class="form-group{{ $errors->has('province') ? ' has-error' : '' }}">
    <label for="edit-pass">province  <span class="form-required" title="This field is required.">*</span></label>
    {{Form::text('province',null ,['class' => 'form-text'])}}
    @if ($errors->has('province'))
        <span class="help-block">
                                        <strong>{{ $errors->first('province') }}</strong>
                                    </span>
    @endif
</div>
<div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
    <label for="edit-pass">city  <span class="form-required" title="This field is required.">*</span></label>
    {{Form::text('city',null ,['class' => 'form-text'])}}
    @if ($errors->has('city'))
        <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
    @endif
</div><div class="form-group{{ $errors->has('phone_no') ? ' has-error' : '' }}">
    <label for="edit-pass">phone_no  <span class="form-required" title="This field is required.">*</span></label>
    {{Form::text('phone_no',null ,['class' => 'form-text'])}}
    @if ($errors->has('phone_no'))
        <span class="help-block">
                                        <strong>{{ $errors->first('phone_no') }}</strong>
                                    </span>
    @endif
</div>
<div class="form-group{{ $errors->has('marital_status') ? ' has-error' : '' }}">
    <label for="edit-pass">marital_status  <span class="form-required" title="This field is required.">*</span></label>
    {{Form::text('marital_status',null ,['class' => 'form-text'])}}
    @if ($errors->has('marital_status'))
        <span class="help-block">
                                        <strong>{{ $errors->first('marital_status') }}</strong>
                                    </span>
    @endif
</div><div class="form-group{{ $errors->has('matri_time') ? ' has-error' : '' }}">
    <label for="edit-pass">matri_time  <span class="form-required" title="This field is required.">*</span></label>
    {{Form::text('matri_time',null ,['class' => 'form-text'])}}
    @if ($errors->has('matri_time'))
        <span class="help-block">
                                        <strong>{{ $errors->first('matri_time') }}</strong>
                                    </span>
    @endif
</div>

