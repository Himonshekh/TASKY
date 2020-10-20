<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
class tagController extends Controller
{
    public function index(){
    	return view('admin.tag.tagEntry');
    }
    public function save(Request $request){
    	$obj = new Tag;
    	$obj->tagName = $request->tagName;
    	$obj->priorityId = $request->priorityId;
        
        $obj1= Tag::where('tagName',$request->tagName)->first();
        if($obj1){
            return redirect('/tag/entry')->with('message','Tag Already Exist');
        }
    	$obj->save();
    	return redirect('/tag/entry')->with('message','Tag insert Successfully');
    }

    public function manage(){
    	$obj = Tag::all();
    	return view('admin.tag.tagManage',['objs'=>$obj]);
    }	
    public function edit($id){
    	$obj= Tag::where('id',$id)->first();
    	return view('admin.tag.tagEdit',['obj'=>$obj]);
    }
    public function update(Request $request){
    	$obj= Tag::find($request->tagId);
    	$obj->tagName = $request->tagName;
    	$obj->priorityId = $request->priorityId;
    	$obj->save();
    	 return redirect('/tag/manage')->with('message','Update Successfully');
    }
    public function delete($id){
        $obj = Tag::where('id',$id)->first();
        $obj->delete();
        return redirect('/tag/manage')->with('message','Deleted Successfully');
    }
}
