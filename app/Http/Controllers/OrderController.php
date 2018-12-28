<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;
use App\User;
use DB;
class OrderController extends Controller
{
    public function getlist(){
    	// $Order = Order::all();
    	
    	 $User = User::with('orders')->get();
        $Order = Order::with('users')->get();
        $User = DB::table('users')->orderBy('id','DESC')->get();
        
    	return view('Admin.order.list_order',compact('User','Order'));
    }

    public function getdelete($id){
    	$Order = Order::find($id);
        $Order->delete();
        

        return Redirect()->back()->with('thongbao','Bạn đã xóa thành công');
    }
}
