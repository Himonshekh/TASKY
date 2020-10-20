@extends('admin.master')

@section('title-area')
	Task manager
@endsection

@section('content-heading')
	Category Entry</br>
	<div class="" style="margin-left: 35%">{{ Session::get('message')}}</div>
	
@endsection
@section('mainContent')
<div class="panel-body">
    <div class="row">
        <div class="col-lg-6">
            {!! Form::open(['url'=>'/category/save','method'=>'post' ,'role'=>'form']) !!}
                <div class="form-group">
                    <label>Category Name</label>
                    <input class="form-control" name="categoryName">
                </div>
                <div class="form-group">
                    <label>Short Description</label>
                    <textarea class="form-control" name="shortDescription" placeholder="Enter Short Description"></textarea>
                </div>
                <div class="form-group">
                    <label>Publication Status</label>
                    <select class="form-control" name="publicationStatus" >
                    	<option value="1">Published</option>
                    	<option value="0">Unpublished</option>
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