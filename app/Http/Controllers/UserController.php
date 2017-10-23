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
		if(Auth::check())
		{
			if(Auth::user()->role_id==4 || Auth::user()->role_id==3)
			{
				return redirect('admin/user');
			}
		}
		else
		{
			return view('admin.login');
		}
		
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
	public function getUser()
	{
		if(Auth::user()->role_id==4)
		{
			$listUser=User::where('role_id',3)->orWhere('role_id',4)->get();

		}
		foreach($listUser as $list)
		{
			$list->role;
		}
		return $listUser;
	}

	public function getRegister()
	{
		return view('user.page.register');
	}
	public function postRegister(Request $request)
	{
		$this->validate($request,
			[
			'name'=>'required|min:5|max:50', 
			'email'=>'required|email|unique:users,email', 
			'password'=>'required|min:3|max:32',
			'repassword'=>'required|same:password'
			],
			[
			'name.required'=>'Vui  lòng nhập tên họ tên',
			'name.min'=>'Họ tên tối thiểu 5 ký tự',
			'name.max'=>'Tên quá dài',

			'email.required'=>'Vui lòng nhập email',
			'email.email'=>'Email không đúng định dạng',
			'email.unique'=>'Email đã tồn tại',
			'password.required'=>'Vui lòng nhập mật khẩu',
			'password.min'=>'Mật khẩu tối thiểu 3 ký tự',
			'password.max'=>'Mật khẩu tối đa 32 ký tự',
			'repassword.required'=>'Vui lòng nhập xác nhận mật khẩu',
			'repassword.same'=>'Mật khẩu xác nhận không đúng'
			]);
		$user = new User;
		$user->name=$request->name;
		$user->email=$request->email;
		$user->role_id=1;
		$user->password=bcrypt($request->password);
		$user->save();
		return redirect('dang-nhap')->with('dangky','Đăng ký tài khoản thành công');
	}

	public function getLoginUser()
	{
		return view('user.page.login');
	}
	public function postLoginUser(Request $request)
	{
		$this->validate($request,[
			'email'=>'required|email|max:100',
			'password'=>'required|min:5|max:100'
			]);
		if (Auth::attempt(['email' =>$request->email, 'password' => $request->password])) 
		{
			return redirect('/');
		}
		//neu dang nhap thanh cong
		
		else
		{
			return redirect('dang-nhap')->with('thongbao','Sai tên tài khoản hoặc mật khẩu');
		}
	}
	function getLogoutUser()
	{
		Auth::logout();
		return redirect('dang-nhap');
	}
}
