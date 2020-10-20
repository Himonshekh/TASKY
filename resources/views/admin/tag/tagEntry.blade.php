@extends('admin.master')

@section('title-area')
	Task manager
@endsection

@section('content-heading')
	Tag Entry</br>
	<div class="" style="margin-left: 35%">{{ Session::get('message')}}</div>
	
@endsection
@section('mainContent')
<div class="panel-body">
    <div class="row">
        <div class="col-lg-4">
            {!! Form::open(['url'=>'/tag/save','method'=>'post' ,'role'=>'form']) !!}
                <div class="form-group">
                    <label>Tag Name</label>
                    <input class="form-control" name="tagName">
                </div>
                <div class="form-group">
                    <label>*Priority level</label>
                    <select class="form-control" name="priorityId" >
                    	<option value="0">0</option>
                        <option value="1">1</option>
                    	<option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group">
                	<input type="submit" value="submit" class="btn btn-block btn-primary">
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection