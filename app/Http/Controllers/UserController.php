<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\DetailAccount;
use Illuminate\Support\Facades\Hash;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
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
		if($user->save())
		{
			$detailac=new DetailAccount;
			$detailac->user_id=$user->id;
			$detailac->save();
		}
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

	public function getUpdateAccount()
	{
		$user=Auth::user();
		$detailAc=DetailAccount::where('user_id',$user->id)->first();
		return view('user.page.updateAccount',['userLogin'=>$user,'detailAc'=>$detailAc]);
	}
	public function postUpdateAccount(Request $request)
	{
		$this->validate($request,
			[
			'name'=>'required|min:5|max:50', 
			'phone'=>'numeric'
			],
			[
			'name.required'=>'Vui  lòng nhập tên họ tên',
			'name.min'=>'Họ tên tối thiểu 5 ký tự',
			'name.max'=>'Tên quá dài',
			'phone.numeric'=>'Số điện thoại sai'
			]);
		$user_id=Auth::user()->id;
		$user=User::find($user_id);
		$user->name=$request->name;
		$user->save();
		$deatailAc=DetailAccount::where('user_id',$user_id)->first();
		$deatailAc->phone=$request->phone;
		$deatailAc->address=$request->address;
		$deatailAc->sex=$request->sex;
		$deatailAc->save();
		return redirect('user/cap-nhat-tai-khoan')->with('thongbao','Cập nhật thành công');
	}
	public function getChangepass()
	{
		return view('user.page.changePass');
	}
	public function postChangepass(Request $request)
	{
		$this->validate($request,
			[
			'password'=>'required|min:3|max:32',
			'repassword'=>'required|same:password'
			],
			[
			'password.required'=>'Vui lòng nhập mật khẩu',
			'password.min'=>'Mật khẩu tối thiểu 3 ký tự',
			'password.max'=>'Mật khẩu tối đa 32 ký tự',
			'repassword.required'=>'Vui lòng nhập xác nhận mật khẩu',
			'repassword.same'=>'Mật khẩu xác nhận không đúng'
			]);
		$user=Auth::user();
		if(Auth::user()->password == "")
		{
			$user=User::find($user->id);
			$user->password=bcrypt($request->password);
			$user->save();
			return redirect('user/doi-mat-khau')->with('thongbao','Cập nhật thành công');
		}
		else
		{
			if(!Hash::check($request->oldpassword,$user->password))
			{
				return redirect('user/doi-mat-khau')->with('thongbao','Sai mật khẩu cũ');
			}
			else
			{
				$user=User::find($user->id);
				$user->password=bcrypt($request->password);
				$user->save();
				return redirect('user/doi-mat-khau')->with('thongbao','Cập nhật thành công');
			}
		}
		
	}
	public function postdeleteUser(Request $request)
	{
		if($request->ajax())
		{
			$user=User::whereIn('id',$request->val)->get();
			foreach($user as $u)
			{
				$u->delete();
			}
		}
	}
}
