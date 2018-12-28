<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function getlist(){
        $Product = Product::all();
      
        return view('Admin.product.list_product',compact('Product','Category'));
    }
    
    public function getadd(){
    	 	
        $Product = Product::with('categories')->get();
        $Category = Category::with('products')->get();
       
    	return view('Admin.product.add_product',compact('Product','Category'));
    }

    public function postadd(Request $request){
    	$this->validate($request,
    		[
    			'name' => 'required',
                'price' => 'required',
                'category' => 'required',
                'quantity' => 'required'
    		],
    		[
    			'name.required' 		=> 'Vui lòng nhập tên sản phẩm',
    			'price.required' 	=> 'Vui lòng nhập giá sản phẩm',
    			'category.required'	=>	'Vui lòng chọn loại sản phẩm',
    			'quantity.required' => 'Vui lòng chọn số lượng sản phẩm'
    		]);
    	$product = Product::with('categories')->get();
    	$file_name = $request->file('image')->getClientOriginalName();
      
       
        $product = new Product;
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->content = $request->content;
        $product->category_id = $request->category;
        $product->image = $file_name ;
        $request->file('image')->move('images/',$file_name);
        $product->save();
        return redirect(route('product.add'))->with('thongbao','Thêm thành công');
    }

    public function getedit($id){

        $Product = Product::with('categories')->find($id);
        $Category = Category::with('products')->get();
       
    	return view('Admin.product.edit_product',compact('Product','Category'));
    }
    
    public function postedit(Request $request, $id ){
        $product = Product::find($id);
         
         if(!empty($request->image)){
            $file_name = $request->file('image')->getClientOriginalName();
           // dd($file_name);
            $product->image = $file_name;
            $request->file('image')->move(public_path('images/'), $file_name);
            // $product->save();
        }
        else{
        }
        $product->name = $request->name;
        $product->price = $request->price;
        $product->content = $request->content;
        $product->category_id = $request->category;
        $product->quantity= $request->quantity;
    
        $product->save();
        return redirect(route('product.list'))->with('thongbao','Sửa thành công');
    }
     public function getdelete($id){
        $Product = Product::find($id);
        $Product->delete();
        return redirect()->back()->with('thongbao','Bạn đã xóa thành công');
     }

    

}
