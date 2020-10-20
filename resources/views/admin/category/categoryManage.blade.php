@extends('admin.master')

@section('title-area')
	Task manager
@endsection

@section('content-heading')
	Category Manage</br>
    <div class="" style="margin-left: 35%">{{ Session::get('message')}}</div>

@endsection
@section('mainContent')
<div class="panel-body ">
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>No.</th>
                <th>Category Name</th>
                <th>Short Description</th>
                <th>Publication Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        	<?php
        		$i=0;
        	?>
			@foreach($categories as $category)
            <tr class="odd gradeX ">
                <td>{{++$i}}</td>
                <td>{{ $category->categoryName }}</td>
                <td>{{ $category->shortDescription }}</td>
                <td class="center">{{ ($category->publicationStatus)==0?'Unpublished':'Published' }}</td>
                <td class="center fnt-color"><a href="{{ url('/category/edit/'.$category->id)}}">Edit</a> | <a href=" {{url('category/delete/'.$category->id)}}">Delete</a></td>
            </tr>
			@endforeach
        </tbody>
    </table>
</div>
@endsection