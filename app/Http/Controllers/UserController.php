<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
	function getLogin()
	{
		return view('admin.login');
	}
	function postLogin(Request $request)
	{
		$this->validate($request,[
			'email'=>'required|email|max:100',
			'password'=>'required|min:5|max:100'
			]);
		if (Auth::attempt(['email' =>$request->email, 'password' => $request->password])) 
		{
			return redirect('admin/user');
		}
		//neu dang nhap thanh cong
		
		else
		{
			return redirect('admin/login-admin')->with('thongbao','Sai tên tài khoản hoặc mật khẩu');
		}

	}
	function getLogout()
	{
		Auth::logout();
		return redirect('admin/login-admin');
	}
	public function postList()
	{

		if(Auth::user()->role_id==3)
		{
			$listUser=User::orderBy('role_id','DESC')->get();
			
		}
		if(Auth::user()->role_id==2)
		{
			$listUser=User::where('role_id',1)->orderBy('role_id','DESC')->get();
		}
		foreach($listUser as $list)
		{
			$list->role;
		}

		return $listUser;
	}

	public function postAdd(Request $request)
	{
		//bcrypt($request->password);
		$user=new User;
		$user->name=$request->name;
		$user->email=$request->email;
		$user->role_id=$request->role_id;
		$user->password=bcrypt($request->password);
		$user->save();
		return "Thêm thành công";
	}
	public function getEdit($id)
	{
		$user=User::find($id);
		$user->role;
		return $user;
	}
	public function postEdit(Request $request,$id)
	{

	}
	public function getDelete($id)
	{
		$user = User::findOrFail($id);
		$user->delete();
		return "Xóa thành công";
	}

	public function postCheckemail(Request $request)
	{
		$check=true;
		$user=User::where('email',$request->email)->get();
		if($user->count()>0)
		{
			$status=0;
		}
		else
		{
			$status=1;
		}
		return json_encode($status);
	}
}
