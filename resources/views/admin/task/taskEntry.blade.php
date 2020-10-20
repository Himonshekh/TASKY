@extends('admin.master')

@section('title-area')
	Task manager
@endsection

@section('content-heading')
	Task Entry</br>
	<div class="" style="margin-left: 35%">{{ Session::get('message')}}</div>
	
@endsection
@section('mainContent')

<div class="panel-body">
    <div class="row">
        <div class="col-lg-4">
            {!! Form::open(['url'=>'/task/save','method'=>'post' ,'role'=>'form']) !!}
                
                <div class="form-group">
                    <label>Task Tag </label>
                    <select class="form-control" name="" >
                        @foreach($objs as $obj)
                        <option value="">{{$obj->tagName}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Task info</label>
                    <textarea class="form-control" name="shortDescription" placeholder="Enter Short Description"></textarea>
                </div>

            <!-- Date time -->

                <div class="form-group">
                    <label>Date time </label>
                    <div class='input-group date' id='datetimepicker9'>
                        <input type='text' class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar">
                            </span>
                        </span>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#datetimepicker9').datetimepicker({
                            viewMode: 'years'
                        });
                    });
                </script>

            <!-- End date time -->

                <div class="form-group">
                    <label>*Task Priority </label>
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
        <div class="col-lg-2">
            {!! Form::open(['url'=>'/task/saveFrom','method'=>'post' ,'role'=>'form']) !!}

            <div class="margin-22">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    New Tag?
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered margin-11" role="document">
                        <div class="modal-content popup-width">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Add Tag</h5>
                                <button type="button" class="close close-1" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
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
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->

                                <div class="form-group">
                                    <input type="submit" value="submit" class="btn btn-block btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection