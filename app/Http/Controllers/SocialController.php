<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Socialite;
use App\User;
use DB;
use App\DetailAccount;
use Illuminate\Support\Facades\Auth;
class SocialController extends Controller
{
	public function redirectToProvider()
	{
		return Socialite::driver('facebook')->redirect();
	}
	public function handleProviderCallback()
	{
		$user = Socialite::driver('facebook')->user();
		$email=$user->email;
		$checkUser=User::where('email',$email)->count();
		if($checkUser>0)
		{
			$getUser=User::where('email',$email)->first();
			$id=$getUser->id;
		}
		else
		{
			$create['name'] = $user->name;
			$create['email'] = $user->email;
			$create['password'] = "";
			$create['role_id'] = 1;
			$id = DB::table('users')->insertGetId($create);
			if($id)
			{
				$detailac=new DetailAccount;
				$detailac->user_id=$id;
				$detailac->save();
			}
			
		}
		Auth::loginUsingId($id);
		return redirect("/");
	}
	public function redirectToProviderGoogle()
	{
		return Socialite::driver('google')->redirect();
	}
	public function handleProviderCallbackGoogle()
	{
		$user = Socialite::driver('google')->user();
		$email=$user->email;
		$checkUser=User::where('email',$email)->count();
		if($checkUser>0)
		{
			$getUser=User::where('email',$email)->first();
			$id=$getUser->id;
		}
		else
		{
			$create['name'] = $user->name;
			$create['email'] = $user->email;
			$create['password'] = "";
			$create['role_id'] = 1;
			$id = DB::table('users')->insertGetId($create);
			if($id)
			{
				$detailac=new DetailAccount;
				$detailac->user_id=$id;
				$detailac->save();
			}
		}
		Auth::loginUsingId($id);
		return redirect("/");
	}
}
