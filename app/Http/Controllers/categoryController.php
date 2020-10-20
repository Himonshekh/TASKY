<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class categoryController extends Controller
{
    public function index(){
    	return view('admin.category.categoryEntry');
    }
    public function save(Request $request){
    	// dd($request->all());
    	$categoryEntry = new Category;
    	$categoryEntry->categoryName= $request->categoryName;
    	$categoryEntry->shortDescription= $request->shortDescription;
    	$categoryEntry->publicationStatus= $request->publicationStatus;
    	$categoryEntry->save();
    	return redirect('/category/entry')->with('message','Data insert successfully');
    }
    public function manage(){
    	$categoryEntry = Category::all();
    	return view('admin.category.categoryManage',['categories'=>$categoryEntry]);
    }
    public function edit($x){
    	$categoryEntry = Category::where('id',$x)->first();
    	return view('admin.category.categoryEdit',['category'=>$categoryEntry]);
    }

    public function update(Request $request){
    	$categoryEntry = Category::find($request->categoryId);
    	$categoryEntry->categoryName=$request->categoryName;
    	$categoryEntry->shortDescription=$request->shortDescription;
    	$categoryEntry->publicationStatus=$request->publicationStatus;
    	$categoryEntry->save();
    	return redirect('/category/manage')->with('message','Update successfully');
    }

    public function delete($id){
        $categoryEntry = Category::where('id',$id)->first();
        $categoryEntry->delete();
        return redirect('/category/manage')->with('message','Delete Succesfully');
    }
}
