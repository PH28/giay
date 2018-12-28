<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\validator;
class CategoryController extends Controller
{
    public function getlist(){
    	$Category = Category::all();
    	return view('Admin.category.list_category',compact('Category'));
    }
     public function getadd(){
          // $parent = Category::all();
     	return view('Admin.category.add_category',compact('parent'));
     }

     public function postadd(Request $request){
     	$this->validate($request,
     		[
     			"CategoryName"=>"required|unique:categories,name",
     		],
     		[
     			"CategoryName.required"=>"Bạn chưa nhập tên",
     			"CategoryName.unique"=>"Tên Thể Loại Đã Tồn Tại",
     		]);
     	$Category            = new Category;
     	$Category->name      = $request->CategoryName;
          // $Category->parent_id = $request->parent_id;
     	$Category->save();
     	return redirect(route('category.add'))->with('thongbao','Thêm Thành Công') ;
     }

     public function getedit($id){
     	$Category = Category::find($id);
     	return view('Admin.category.edit_category',compact('Category'));
     }

     public function postedit(Request $request,$id){
     	$this->validate($request,
     		[
     			"CategoryName"=>"required|unique:categories,name",
     		],
     		[
     			"CategoryName.required"=>"Bạn chưa nhập tên",
     			"CategoryName.unique"=>"Tên Thể Loại Đã Tồn Tại",
     		]);
     	$Category = Category::find($id);
     	$Category->name = $request->CategoryName;
     	$Category->save();
     	return redirect()->route('category.edit',$Category->id)->with('thongbao','Sửa thành công');
     }

     public function getdelete($id){
     	$Category = Category::find($id);
     	$Category->delete();
     	return redirect(route('category.list'))->with('thongbao','Bạn đã xóa thành công');
     }
}
