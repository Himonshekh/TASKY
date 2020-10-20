@extends('admin.master')

@section('title-area')
	Task manager
@endsection

@section('content-heading')
	Tag Manage</br>
    <div class="" style="margin-left: 35%">{{ Session::get('message')}}</div>

@endsection
@section('mainContent')
<div class="panel-body ">
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>No.</th>
                <th>Tag Name</th>
                <th>Priority Level</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        	<?php
        		$i=0;
        	?>
			@foreach($objs as $obj)
            <tr class="odd gradeX ">
                <td>{{++$i}}</td>
                <td>{{ $obj->tagName }}</td>
                <td>{{ $obj->priorityId }}</td>
                <td class="center fnt-color">
                    <a href="{{ url('/tag/edit/'.$obj->id) }}">Edit</a> |
                    <a href="{{ url('/tag/delete/'.$obj->id) }}">Delete</a>
                </td>
            </tr>
			@endforeach
        </tbody>
    </table>
</div>
@endsection