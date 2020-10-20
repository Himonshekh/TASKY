@extends('admin.master')

@section('title-area')
    Task manager
@endsection

@section('content-heading')
    Tag Edit</br>
    <div class="" style="margin-left: 35%">{{ Session::get('message')}}</div>
    
@endsection
@section('mainContent')
<div class="panel-body">
    <div class="row">
        <div class="col-lg-4">
            {!! Form::open(['url'=>'/tag/edit','name'=>'editForm' ,'method'=>'post' ,'role'=>'form']) !!}
                <div class="form-group">
                    <label>Tag Name</label>
                    <input class="form-control" name="tagName" value="{{ $obj->tagName }}">
                </div>
                <div class="form-group">
                    <label>*Priority level [ 0 to 5 is low to high]</label>
                    <select class="form-control" name="priorityId" >
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <input type="hidden" name="tagId" value="{{ $obj->id}}">
                <div class="form-group">
                    <input type="submit" value="submit" class="btn btn-block btn-primary">
                </div>
            {!! Form::close() !!}
        </div>
        <script type="text/javascript">
            document.forms['editForm'].elements['priorityId'].value='{{ $obj->priorityId}}'
        </script>
    </div>
</div>
@endsection