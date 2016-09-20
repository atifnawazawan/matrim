


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


<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">


    {{ Form::label('name', 'First Name')}}

    <span class="form-required" title="This field is required.">*</span>

    {{Form::text('name',null ,['class' => 'form-text'])}}
    @if ($errors->has('name'))
        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
    @endif

</div>


<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">


    {{ Form::label('phone', 'Phone')}}

    <span class="form-required" title="This field is required.">*</span>

    {{Form::text('phone',null ,['class' => 'form-text'])}}
    @if ($errors->has('phone'))
        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
    @endif

</div>

<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">


    {{ Form::label('address', 'Address')}}

    <span class="form-required" title="This field is required.">*</span>

    {{Form::text('address',null ,['class' => 'form-text'])}}
    @if ($errors->has('address'))
        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
    @endif

</div>
<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">


    {{ Form::label('description', 'Description')}}

    <span class="form-required" title="This field is required.">*</span>

    {{Form::text('description',null ,['class' => 'form-text'])}}
    @if ($errors->has('description'))
        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
    @endif

</div>
