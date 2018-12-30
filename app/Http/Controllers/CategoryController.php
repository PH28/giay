<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
    	$category = Category::all();
    	return view('Admin.category.list_category',compact('category'));
    }
     public function create(){
          $category = Category::all();
     	return view('Admin.category.add_category',compact('category'));
     }

     public function store(Request $request){
     	$this->validate($request,
     		[
     			"name"=>"required|unique:categories,name",
     		],
     		[
     			"name.required"=>"Bạn chưa nhập tên",
     			"name.unique"=>"Tên Thể Loại Đã Tồn Tại",
     		]);
     	$category            = new Category;
     	$category->name      = $request->name;
          // $category->parent_id = $request->parent_id;
     	$category->save();

     	return redirect()->route('category.create')->with('thongbao','Thêm Thành Công') ;
     }

     public function edit($id){
     	$category = Category::find($id);
     	return view('Admin.category.edit_category',compact('category'));
     }

     public function update(Request $request,$id){
     	$this->validate($request,
     		[
     			"name"=>"required|unique:categories,name",
     		],
     		[
     			"name.required"=>"Bạn chưa nhập tên",
     			"name"=>"Tên Thể Loại Đã Tồn Tại",
     		]);
     	$category = Category::find($id);
     	$category->name = $request->name;
     	$category->save();
     	return redirect()->route('category.edit',$category->id)->with('thongbao','Sửa thành công');

     }

     public function delete($id){
     	$category = Category::find($id);
     	$category->delete();
     	return redirect()->route('category.index')->with('thongbao','Bạn đã xóa thành công');
     }
}
