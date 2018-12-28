<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\validator;
class UserController extends Controller
{
    public function getlist(){
    	$User = User::all();
    	return view('Admin.user.list_user',compact('User'));
    }

    public function getadd(){
    	return view('Admin.user.add_user');
    }

    public function postadd(Request $request){
    	$this->validate($request,
    		[
    			'name'=>'required',
    			'email'=>'required|email|unique:users,email', 
    			'pass'=>'required|min:6|max:16',
    			'repass'=>'required|same:pass',
    		],
    		[
    			'name.required'=>'Bạn chưa nhập tên',
    			'email.required'=>'Bạn chưa nhập email',
    			'email.email'=>'Bạn chưa nhập đúng định dạng email',
    			'email.unique'=>'Email này đã tồn tại',
    			'pass.required'=>'Bạn chưa nhập mật khẩu',
    			'pass.min'=>'Mật khẩu ít nhất 6 ký tự',
    			'pass.max'=>'Mật khẩu tối đa 16 ký tự',
    			'repass.required'=>'Bạn chưa nhập lại mật khẩu',
    			'repass.same'=>'Mật khẩu không trùng khớp',
    		]);
    	$User = new user;
    	$User->name = $request->name;
    	$User->email = $request->email;
    	$User->password = bcrypt($request->pass);
    	$User->user_type = $request->lv;
        $User->phone = $request->phone;
        $User->address = $request->address;
    	$User->save();
    	return redirect(route('user.add'))->with('thongbao','Thêm thành công');

    }

    public function getedit($id){
        $User = User::find($id);
        return view('Admin/user/edit_user',compact('User'));
    }

      public function postedit(Request $request,$id){
        $this->validate($request,
            [
                'name'=>'required',
            ],
            [
                'name.required'=>'Bạn chưa nhập tên',
            ]);
        $User = User::find($id);
        $User->name = $request->name;
        $User->user_type = $request->lv;
        $User->phone = $request->phone;
        $User->address = $request->address;

        if($request->changpass == "on")
        {
            $this->validate($request,
            [
                'pass'=>'required|min:6|max:16',
                'repass'=>'required|same:pass',
            ],
            [
                'pass.required'=>'Bạn chưa nhập mật khẩu',
                'pass.min'=>'Mật khẩu ít nhất 6 ký tự',
                'pass.max'=>'Mật khẩu tối đa 16 ký tự',
                'repass.required'=>'Bạn chưa nhập lại mật khẩu',
                'repass.same'=>'Mật khẩu không trùng khớp',
            ]);
               $User->password = bcrypt($request->pass);
        }
        
      
        
        $User->save();
        return redirect()->route('user.edit',$User->id)->with('thongbao','Sửa thành công');

    }

     public function getdelete($id){
        $User = User::find($id);
        $User->delete();
        return redirect(route('user.list'))->with('thongbao','Bạn đã xóa thành công');
     }
}
