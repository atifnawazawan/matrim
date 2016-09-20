@extends('layouts.app')
@section('content')
<div class="panel-body">
    <!-- Display Validation Errors -->
    @include('common.errors')

            <!-- New Task Form -->
    <form action="{{ url('message') }}" method="POST"  class="form-horizontal">
        {{ csrf_field() }}

                <!-- Task Name -->
        <div class="form-group">
            <label for="task" class="col-sm-3 control-label">Message</label>

            <div class="col-sm-6">
                <textarea  name="messagebody"  id="message-messagebody" class="form-control"></textarea>
            </div>
        </div>
        <input type="hidden" name="to" value="{{$id}}">
        <!-- Task Name -->
        <div class="form-group">
            <label for="task" class="col-sm-3 control-label">To</label>

            <div class="col-sm-6">
                <?php $fo=Auth::user()->where('id',$id)->first();?>
                <input type="text" disabled   value="{{$fo->name}}" class="form-control">
            </div>
        </div>


        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Send Message
                </button>
            </div>
        </div>
    </form>
</div>
@endsection