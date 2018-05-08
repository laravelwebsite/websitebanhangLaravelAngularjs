<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
class RoleController extends Controller
{
	public function postChecknamerole(Request $request)
	{
		$role=Role::where('delete',1)->where('name',$request->name)->get();
		if($role->count()>0)
		{
			return 0;
		}
		else
		{
			return 1;
		}
	}
	public function postdeleteRole(Request $request)
	{
		if($request->ajax())
		{
			$role=Role::whereIn('id',$request->val)->get();
			foreach($role as $r)
			{
				$r->delete=0;
				$r->save();
			}
		}
	}
}
