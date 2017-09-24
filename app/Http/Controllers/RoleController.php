<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
class RoleController extends Controller
{
	public function postChecknamerole(Request $request)
	{
		$role=Role::where('name',$request->name)->get();
		if($role->count()>0)
		{
			return 0;
		}
		else
		{
			return 1;
		}
	}
}
