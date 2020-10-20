<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Tag;
class taskController extends Controller
{
    public function index(){
    	$obj = Tag::all();
    	return view('admin.task.taskEntry',['objs'=>$obj]);
    }
    public function indexFrom(){
    	return view('admin.task.EntryFrom');
    }
    
    public function saveFrom(Request $request){
        $obj = new Tag;
        $obj->tagName = $request->tagName;
        $obj->priorityId = $request->priorityId;
        
        $obj1= Tag::where('tagName',$request->tagName)->first();
        if($obj1){
            return redirect('/task/entry')->with('message','Tag Already Exist');
        }
        $obj->save();
        return redirect('/task/entry')->with('message','Tag insert Successfully');
    }

}
